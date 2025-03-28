<?php
use Core\Database;
$config = require base_path('config.php');
$db=new Database($config['database']);

$currentUserId=1; //for readibility  only

// $id=_GET['id']; //creating the variable that is extracted from the query params
// dd($id);


// refreshing that variable  when quering the database to prevent the sql injection
$note= $db->query('select * from notes where id = :id',[':id'=>$_GET['id']])->findOrFail();
// dd($note);
// if $id is used only once, we can directly inline it . 


// Authorize to note created by the current user only.
authorize(($note['user_id']===$currentUserId));

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);