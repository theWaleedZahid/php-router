# PHP Router Class

Just a Simple Router Class for URL Routing in PHP. Runs on PHP 5.4+

## Usage

Create a index.php file in your server root and try this code
```PHP
<?php
// Require Route Class
require 'route.php';

// Create Object
$route = new Route();

// Adding the Route
$route->add("/",function(){
	echo "Home";
});

// Adding a Test Page Route
$route->add("/test",function(){
	echo "Test Page";
});

// Submitting the Route
$route->submit();

?>
```

An Example Index File is Created for Test

Now in your server root visit `http://localhost/test` to visit the test page

or you can run the built-in php server

```
php -S localhost:8080
```
and visit `http://localhost:8080/test`.

