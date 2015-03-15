<?php
class catalogos_m extends CI_Model
{
	function getcatalogoinfo($id,$dsc,$tabla,$condiciones)
	{
	
		$query=$this->db->query("select $id id, $dsc nombre from $tabla $condiciones");
		if($query !=null && $query->num_rows() > 0) 
		{
			foreach ($query->result_array() as $row)
			{
				$info[]=$row;
			}

			return $info;

		}
		

	}
}