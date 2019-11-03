<?php

require 'init.php';

if (isset($_POST['post_article'])) {
    require_once('functions.php');

    //adding time stamp to the image
    $path_parts = pathinfo($_FILES["image"]["name"]);
    $new_file = $path_parts['filename'].'_'.time().'.'.$path_parts['extension'];
    $target = "../images/pasteventimages/";
    $target = $target . $new_file ;
    // echo $new_file;

    $event_title = $_POST['post-title'];
    $event_img = $new_file;
    $event_desc =  $_POST['content'];
    $user= new USER();

    if (compress($_FILES['image']['tmp_name'], $target, 20)) {
        $sql ="INSERT INTO past_events (past_event_title,past_event_desc) VALUES (?,?);
    ";
        if (!$stmt = $user->conn()->prepare($sql)) {
            echo "Server Error!!  Please Report This Error To The Admin Through The Feedback Form In The Home Page";
        } else {
            if ($stmt->execute([$event_title,$event_desc])) {
               $sql = "SELECT MAX(past_event_id) from past_events";
               
            }
        }

        
    };
}
