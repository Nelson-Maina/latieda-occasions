<?php

class SESSION extends DATABASE
{
    public $signed_in = false;
    public $session_id;
    public $usertype;
    
    public function __construct()
    {
    }
//return the session of the person who is logged in
    public function getSessionID(){
        return $_SESSION['user_id'];
    }
    
    public function login($user)
    {//sets thesession id of the user
        if ($user) {
            $_SESSION['user_id'] = $user;
            $this->signed_in = true;
            $this->session_id= $user;
        }
    }

    
    public function is_admin()
    {
        if (isset($_SESSION['user_type'])) {
            if ($_SESSION['user_type'] === "normal") {
                redirect("user.php");
            }
        }
    }

    public function isAdmin ($id){
        $sql = "SELECT admin_fk_user_id as adminID, admin_type FROM admin where admin_fk_user_id = $id";
        $result = $this->queryNone($sql);
        if (empty($result)) {
            return false;
        } else {
            return $result;
        } 
    }

    //check type of admin and return true if super and false ir normal
    public function admintypeSuper($id){
        $result = $this->isAdmin($id);
        $admintype = $result[0]['admin_type'];
        if ($admintype === 'normal') {
            return false;
        } elseif($admintype === 'super') {
            return true;
        }

    }

    
    public function redirect($location)
    {
        header("Location: {$location}");
    }
}
