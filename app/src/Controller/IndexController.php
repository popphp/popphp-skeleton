<?php

namespace Skeleton\Controller;

use Pop\Controller\AbstractController;
use Pop\Http\Server\Request;
use Pop\Http\Server\Response;
use Pop\View\View;

class IndexController extends AbstractController
{

    protected $request;
    protected $response;
    protected $viewPath;

    public function __construct()
    {
        $this->request  = new Request();
        $this->response = new Response();
        $this->viewPath = __DIR__ . '/../../view';
    }

    public function index()
    {
        $view = new View($this->viewPath . '/index.phtml');
        $view->title = 'Welcome';

        $this->response->setBody($view->render());
        $this->response->send();
    }

    public function hello($name = 'World')
    {
        $view = new View($this->viewPath . '/hello.phtml');
        $view->title = 'Hello';
        $view->name  = ucfirst($name);

        $this->response->setBody($view->render());
        $this->response->send();
    }

    public function error()
    {
        $view = new View($this->viewPath . '/error.phtml');
        $view->title = 'Error - Page Not Found.';

        $this->response->setBody($view->render());
        $this->response->send(404);
    }

}
