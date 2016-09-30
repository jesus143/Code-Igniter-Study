<?php

class User_model extends CI_Model {

    private $table_name = 'users';


    public $name;

    public function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
    }

    public function test() {
        return 'This is a test';
    }

    public function get_last_ten_entries()
    {
        //        $query = $this->db->get('entries', 10);
        //        return $query->result();
    }

    public function insert_entry()
    {
        $this->name    = 'Jesus Erwin Suarez';
        return $this->db->insert($this->table_name, $this);
    }

    public function update_entry()
    {
        //        $this->title    = $_POST['title'];
        //        $this->content  = $_POST['content'];
        //        $this->date     = time();
        //
        //        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}
?>