<?php
class M_grafik extends CI_Model{
	function get_data_popular(){
        $query = $this->db->query("SELECT studio,SUM(rating) AS rating FROM popularitas GROUP BY studio");
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
            $hasil[] = $data;
            }
            return $hasil;
        }
    }

}
