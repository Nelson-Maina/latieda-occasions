<?php
require 'init.php';
require 'functions.php';
if (isset($_GET['event'])) {
    $id = $_GET['event'];

    if (!empty($id)) {
        $sql = "DELETE FROM images WHERE (past_events_past_event_id = '$id');";

        //FIXME: Redirect with a Message
        if (queryInsert($sql)) {
            redirect("../admin.php");
        } else {
            //FIXME: Redirect with a Message
            redirect("../admin.php");
        }
    }
} elseif (isset($_GET['book'])) {
    $id = $_GET['book'];

    if (!empty($id)) {
        $sql = "DELETE FROM event_book WHERE (`event_booking_id` = $id);";

        //FIXME: Redirect with a Message
        if (queryInsert($sql)) {
            redirect("../admin.php");
        } else {
            //FIXME: Redirect with a Message
            redirect("../admin.php");
        }
    }
}
