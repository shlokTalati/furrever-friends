<?php

$parsed_path = parse_url($_SERVER['REQUEST_URI']);
$request_uri_path = str_replace('/petmarket', '', $parsed_path['path']); // Remove the /notes.io from the URL
$segment = explode('/', trim($request_uri_path, '/')); // Get the URL segments

?>
