<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{
    function __construct() {
		$this->tableName = 'files';
		$this->load->database();
    }
    
    /*
     * Fetch files data from the database
     * @param id returns a single record if specified, otherwise all records
     */
    public function getRows($where=array()){
        //SELECT * FROM news [WHERE....]
        $this->db->select("*");
        $this->db->where($where);
        // $this->db->order_by("id", "desc");
		$query = $this->db->get('files');
		$result = $query->result_array();
        return !empty($result)?$result:false;
    }
    
    /*
     * Insert file data into the database
     * @param array the data for inserting into the table
     */
    public function insert($data = array()){
        $insert = $this->db->insert_batch('files',$data);
        return $insert?true:false;
    }
    
}
