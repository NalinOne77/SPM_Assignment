<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helpers/Format.php');
?>

<?php

class University
{
    private $db;
    private $fm;
    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function addUniversity($data){

    }

    public function getUniversities(){
        $query = "SELECT * from university";
        $result = $this->db->select($query);
        return $result;

    }


}

?>