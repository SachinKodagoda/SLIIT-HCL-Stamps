<?php
class StampModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    // GET USERS -----------------------------------------------
    // public function get_stamps()
    // {
    //     $this->db->query("SELECT * FROM stamp WHERE userType=:usertype ORDER BY created_at ");
    //     $this->db->bind(':usertype', $usertype);
    //     return $this->db->resultset();
    // }




}
