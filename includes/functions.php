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

function getPastEvent() {
    $sql = "SELECT past_event_id,past_event_title,past_event_desc,img_name  from past_events 
    inner join images 
    on past_events_past_event_id = past_event_id;";

    //declaring the database class

    $obj = new DATABASE();
    $data =   $obj->queryNone($sql);
    return $data;
}

function getUpcomingEvents1(){
    
}

