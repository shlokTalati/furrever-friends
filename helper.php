<?php


$parsed_path = parse_url($_SERVER['REQUEST_URI']);
$request_uri = str_replace('/petmarket', '', $parsed_path['path']); // Remove the /notes.io from the URL
$segment = explode('/', trim($request_uri, '/')); // Get the URL segments

?>