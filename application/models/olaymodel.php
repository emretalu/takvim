<?php

Class OlayModel Extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}

	function hepsi()
    {   
        $query = $this->db->query("select * from olaylar order by id asc");
        $result = $query->result_array();

        return $result;
    }
	
	function search($limit, $offset)
	{
		$q = $this->db->select('id, olay_adi, olay_tarih')
			->from('olaylar')
			->limit($limit, $offset);
		
		$ret['rows'] = $q->get()->result();
		
		$q = $this->db->select('COUNT(*) as count', FALSE)
			->from('olaylar');
		
		$tmp = $q->get()->result();
		
		$ret['num_rows'] = $tmp[0]->count;
		
		return $ret;
	}

    function goster($id)
    {   
        $query = $this->db->query("select * from olaylar where id = '$id'");
        $result = $query->result_array();

        return $result;
    }

    function ekle($olayadi)
    {
    	$data = array(
            'olay_adi' => $olayadi
			);
		$this->db->insert('olaylar', $data);
    }

	function sil($id)
    {		
		$this->db->where('id', $id);
		$this->db->delete('olaylar');
    } 
}

?>