<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Model_Login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUser($userid,$pass)
    {
            return $this->db->query("SELECT * FROM MUSER WHERE USERID = '".$userid."' AND PASSWORD = '".$pass."'")->RESULT_ARRAY();
    }
}
