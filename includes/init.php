<?php
session_start();
require 'database.php';
require 'session.php';
require 'user.inc.php';

function redirect($location)
{
    header("Location: {$location}");
}
