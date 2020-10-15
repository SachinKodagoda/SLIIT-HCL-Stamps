<?php
class StampModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    // GET STAMPS -----------------------------------------------
    // public function get_stamps()
    // {
    //     $this->db->query("SELECT * FROM stamp WHERE userType=:usertype ORDER BY created_at ");
    //     $this->db->bind(':usertype', $usertype);
    //     return $this->db->resultset();
    // }

    public function findStampById($stamp_id)
    {
        $this->db->query('SELECT * FROM stamp WHERE stamp_id = :stamp_id');
        $this->db->bind(':stamp_id', $stamp_id);
        return $this->db->single();
    }

    public function getPageCount($perPage)
    {
        $this->db->query('SELECT * FROM stamp');
        $this->db->execute();
        $noOfData = $this->db->rowCount();
        $noOfTotalPages = (int)($noOfData / $perPage);
        if($noOfData % $perPage > 0){
            $noOfTotalPages++;
        }
        return $noOfTotalPages;
    }

    public function getStampList($perPage,$pageNeeded)
    {
        $offset = $perPage * ($pageNeeded - 1);
        $this->db->query('SELECT * FROM stamp ORDER BY stamp_id LIMIT :perPage OFFSET :offset');
        $this->db->bind(':perPage', $perPage);
        $this->db->bind(':offset', $offset);
        return $this->db->resultset();
    }
}
