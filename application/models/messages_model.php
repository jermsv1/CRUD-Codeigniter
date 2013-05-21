<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Messages_model extends CI_Model {

    var $name   = '';
    var $message = '';
    var $contact = '';
    var $date    = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all_entries()
    {
       
        $query = $this->db->get('messages');
        return $query->result();
    }

    function insert_entry($data)
    {
        $this->name   = $data['name']; // please read the below note
        $this->message = $data['message'];
        $this->contact = $data['contact'];
        $this->date    = time();

        $this->db->insert('messages', $this);
    }

    function update_entry($data)
    {
        $this->name   = $data['name']; // please read the below note
        $this->message = $data['message'];
        $this->contact = $data['contact'];
        $this->date    = time();
        $this->db->update('messages', $this, array('id' => $data['id']));
    }

    function delete_entry($id)
    {
        $this->db->delete('messages', array('id' => $id));
    }

    function get_entry($id){
        $this->db->where('id', $id);
        $query = $this->db->get('messages', 1);
        return $query->result();
    }



}