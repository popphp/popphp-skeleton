Pop PHP Skeleton Application
============================

OVERVIEW
--------

This is a basic skeleton application for the Pop PHP Framework that provides a simple base
application on which you can build your own applications.

INSTALL
-------

Create a new project with it:

```console
$ composer create-project popphp/popphp-skeleton project-folder
```

Or clone the repository and install it:

```console
$ composer install
```

Once installed, the main web access point is at `public/index.php`.

BASIC USAGE
-----------

While running the built-in PHP web server with `php -S localhost:8000 -t public`,
try accessing the web application at these routes:

    http://localhost:8000/
    http://localhost:8000/hello
    http://localhost:8000/hello/name

You should see the main home page and "hello" page, respectively. You can swap out "name"
for your name to see the result on the page.

NOTES
-----

* The skeleton application uses the `pop-view` component to create and render teh views.
* The web application is utilizing the `pop-http` component to leverage the HTTP request and
response objects within the controller object.
