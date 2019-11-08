<?php
function compress($source, $destination, $quality)
{
    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    }

    imagejpeg($image, $destination, $quality);
    return $destination;
};

function getPastEvent()
{
    $sql = "SELECT past_event_id,past_event_title,past_event_desc,img_name,past_event_img  from past_events 
    inner join images 
    on past_events_past_event_id = past_event_id;";

    //declaring the database class

    $obj = new DATABASE();
    $data =   $obj->queryNone($sql);
    return $data;
}

function getUpcomingEvents1($id)
{
    $sql = "SELECT past_event_id,past_event_title,past_event_desc,img_name  from past_events 
    inner join images 
    on past_events_past_event_id = past_event_id WHERE past_event_id = $id;";
    $obj = new DATABASE();
    $data = $obj->queryNone($sql);
    
    return $data;
}

 function queryInsert($sql)
{
    $obj = new DATABASE();

    $stmt = $obj->conn()->prepare($sql);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function getbookrequest()
{
    $sql = "SELECT * from event_book;";
    $obj = new DATABASE();
    $data = $obj->queryNone($sql);
    
    return $data;
}
function getbookrequest1($id)
{
    $sql = "SELECT * from event_book WHERE event_booking_id = $id;";
    $obj = new DATABASE();
    $data = $obj->queryNone($sql);
    
    return $data;
}
function getfeed()
{
    $sql = "SELECT * from feedback;";
    $obj = new DATABASE();
    $data = $obj->queryNone($sql);
    
    return $data;
}

