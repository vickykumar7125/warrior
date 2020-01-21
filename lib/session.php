<?php

Class Client_Session{


    private $name = null;
    private $lifespan = null;
    private $id = null;

    // __Construct function to start session
    public function __construct($name = 'uid', $lifespan = 10800, $id = true){
        $this -> name = $name;
        $this -> lifespan = $lifespan;
        $this -> id = $id;
        self::StartSession($this -> name, $this -> lifespan, $this -> id);
    }

    // public function to start session
    public function StartSession($name, $lifespan, $id)
    {
        if ($lifespan != null){
            self::SetSessionValidity($lifespan);
        }
        if ($name != null){
            self::SetSessionName($name);
        }
        if ($id == true) {
            if (isset($_COOKIE[$name])) {
                self::SetCustomeSeesionId($_COOKIE[$name]);
            } else {
                self::SetCustomeSeesionId($this->Sessionid(26));
            }
        }
        session_start();
    }


    // public function to set session id
    public function SetCustomeSeesionId($id){
        session_id($id);
    }

    // public function to set custom session name
    public function SetSessionName($session_name){
        session_name($session_name);
    }

    // public function to set session validity
    public function SetSessionValidity($lifespan){
        session_set_cookie_params($lifespan);
    }

    // custom session id generator
    public function Sessionid($length){
        $SessionID = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $SessionID .= $characters[$rand];
        }
        return $SessionID;
    }

    // public function to destroy session
    public function DestroySession(){
        session_unset();
        session_destroy();
    }

    // public function set session variable
    public function setsessionvar($name,$value){
        $_SESSION[$name] = $value;
    }

    // public function get session variable values
    public function getsessiondata($var){
        return $_SESSION[$var];
    }

    // public function to get multiple session variables at same time
    public function getmultisessiondata($variable){
        $values = [];
        foreach ($variable as $var){
            $values[$var] = self::getsessiondata($var);
        }
        return $values;
    }

    // public function to validate the session variables
    public function hassessionvar($var){
        return isset($_SESSION[$var]) ? true : false;
    }

    // public function to remove a certain session variable
    public function removesessionvar($var){
        unset($_SESSION[$var]);
    }

    // public function to remove multiple session variables
    public function removemultivar($variables = []){
        foreach ($variables as $var){
            self::removesessionvar($var);
        }
    }
}