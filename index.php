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