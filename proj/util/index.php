<?php

require 'functions.php';
// make sure database is loaded before the router .
require 'Database.php';
require 'Response.php';
require 'router.php';

// $config = require('config.php');
// $db = new Database($config['database']);



// preventing the SQL Injection
// $id = $_GET['id'];  //super global that gives the information about the GET http request like info about the query params.
// //  getting the id  directly from the   query string is mo
// $query = "select * from posts where id = :id";

// $posts = $db->query($query, [':id' => $id])->fetchAll();
