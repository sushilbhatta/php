<?php
use Core\Response;
function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();  //terminate the further execution of program
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;

}


// Authorize to note created by the current user only.
function authorize($condition,$status=Response::FORBIDDEN){ //additional staus code param  so that in future  its easier to override the status code.
    if(!$condition){    
    abort($status);// using constant to make the message more clear 
    }
}


function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}