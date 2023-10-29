Pop PHP Skeleton Application
============================

[![Join the chat at https://popphp.slack.com](https://media.popphp.org/img/slack.svg)](https://popphp.slack.com)
[![Join the chat at https://discord.gg/D9JBxPa5](https://media.popphp.org/img/discord.svg)](https://discord.gg/D9JBxPa5)

* [Overview](#overview)
* [Install](#install)
* [Basic Usage](#basic-usage)
* [Notes](#notes)

Overview
--------

This is a basic skeleton application for the Pop PHP Framework that provides a simple base
application on which you can build your own applications.

[Top](#pop-php-skeleton-application)

Install
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

[Top](#pop-php-skeleton-application)

Basic Usage
-----------

Start the web server by running:

```bash
$ ./kettle serve
```

And then you can access the web application at these routes:

    http://localhost:8000/
    http://localhost:8000/hello
    http://localhost:8000/hello/name

You should see the main home page and "hello" page, respectively. You can swap out "name"
for your name to see the result on the page.

[Top](#pop-php-skeleton-application)

Notes
-----

* The skeleton application uses the `pop-view` component to create and render the views.
* The web application is utilizing the `pop-http` component to leverage the HTTP request and
response objects within the controller object.

[Top](#pop-php-skeleton-application)
