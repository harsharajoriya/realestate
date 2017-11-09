<?php

class Common_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //function to get details of a given table name.
    //parameters table name to retrive.
    //return values table rows
    //author : Harsha Rajoriya 
	function getTableDetails($table_name, $table_id = NULL, $condition = NULL,$order_by=NULL) {
        $this->db->select('*');
        $this->db->from($table_name);
        if (!empty($table_id) && is_numeric($table_id)) {
            $this->db->where($table_name . '_id', $table_id);
        }
        if(checkValue($condition['where'])){
            $this->db->where($condition['where']);
        }
        if(isset($order_by) && !empty($order_by))
        {
             $order_by;
        }

        $query = $this->db->get();
        // echo $this->db->last_query();
        if ($query) {
			//pr($query->result());
            return $query->result();
        } else {
            return false;
        }
    }
	
	 function updateTableData($table_name, $main_id = NULL, $table_data) {
        if ($main_id != '' && is_numeric($main_id)) {
            $this->db->where($table_name . '_id', $main_id);
            $this->db->update($table_name, $table_data);
             return $main_id;
        } else {
            $this->db->insert($table_name, $table_data);
            //echo $this->db->last_query(); exit();
            return $this->db->insert_id();
        }
    }
	
	function delete($tableName, $mainId){
        if(checkValue($tableName) && checkValue($mainId)){
            if($tableName == 'categories'){
                $returnVal = $this->db->delete($tableName, array('category_id' => $mainId));
            }else{
               $returnVal = $this->db->delete($tableName, array($tableName.'_id' => $mainId)); 
            }
            if($returnVal){
                return TRUE;
            }else{
                return FALSE;
            }
            
        }
    }
    
    function deleteTableData($tableName, $condition){
        if(checkValue($tableName) && checkValue($condition)){
            $returnVal = $this->db->delete($tableName, $condition); 
            if($returnVal){
                return TRUE;
            }else{
                return FALSE;
            }
        }
    }
	
	function getProperty($property_id='')
	{
		$this->db->from('property p');
		$this->db->join('property_images pi','p.property_id = pi.img_property_id','left');
		if(checkValue($property_id))
		{
			$this->db->where('p.property_id',$property_id);
		}
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.property_id');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit();
		return $query->result();
	}
	
	function getProjects($projects_id='')
	{
		$this->db->from('projects p');
		$this->db->join('projects_images pi','p.projects_id = pi.projects_id','left');
		if(checkValue($projects_id))
		{
			$this->db->where('p.projects_id',$projects_id);
		}
		$this->db->where('p.projects_status','1');
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.projects_id');
		$query = $this->db->get();
		//echo $this->db->last_query(); exit();
		return $query->result();
	}
	
	function getFrontProperty($id='',$condition='',$limit='',$start='')
	{
		$this->db->from('property p');
		$this->db->join('property_images pi','p.property_id = pi.img_property_id','left');
		if(checkValue($id)){
			$this->db->where('p.property_id',$id);
		}
		if(checkValue($condition)){
			$this->db->where($condition);
		}
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.property_id');
		$this->db->where('p.property_status','1');
	    if(isset($limit) && !empty($limit) && is_numeric($limit)) $this->db->limit($limit,$start);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit();
		   return $query->result();
	}
	
	
	function getFrontPropertyFor($condi='',$limit='',$start='')
	{
		$this->db->from('property p');
		$this->db->join('property_images pi','p.property_id = pi.img_property_id','left');
		if(checkValue($condi)){
			$this->db->where($condi);
		}
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.property_id');
		$this->db->where('p.property_status','1');
	    if(isset($limit) && !empty($limit) && is_numeric($limit)) $this->db->limit($limit,$start);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit();
		   return $query->result();
	}
	function getFrontPropertyTotalRow($condition='')
	{
		$this->db->from('property p');
		$this->db->join('property_images pi','p.property_id = pi.img_property_id','left');
		if(checkValue($condition)){
			$this->db->where($condition);
		}
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.property_id');
		$this->db->where('p.property_status','1');
		$query = $this->db->get();
		//echo 'total_rows'.$query->num_rows().$this->db->last_query(); exit();
		   return $query->num_rows();
	}
		function getFrontPropertyDetails($id)
	{
		$this->db->from('property p');
		$this->db->join('property_images pi','p.property_id = pi.img_property_id','left');
		$this->db->where('p.property_id',$id);
		$this->db->order_by('p.created','desc');
		$this->db->where('p.property_status','1');
		$query = $this->db->get();
		return $query->result();
	}
	function getFrontProjectDetails($id)
	{
		$this->db->from('projects p');
		$this->db->join('projects_images pi','p.projects_id = pi.projects_id','left');
		$this->db->where('p.projects_id',$id);
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.projects_id');
		$this->db->where('p.projects_status','1');
		$query = $this->db->get();
		return $query->result();
	}
	function getEnquiry($id='')
	{
		$this->db->from('enquiry e');
		$this->db->join('property p','e.property_id = p.property_id','left');
		if(checkValue($id))
		{
			$this->db->where('enquiry_id',$id);
		}
		$this->db->order_by('e.enq_added_dtm');
		$query = $this->db->get();
		return $query;
	}
    function getProjectEnquiry($id=''){
		$this->db->from('project_enquiry pe');
		$this->db->join('projects p','pe.project_id = p.projects_id','left');
		if(checkValue($id))
		{
			$this->db->where('project_enquiry_id',$id);
		}
		$this->db->order_by('pe.enq_added_dtm');
		$query = $this->db->get();
		return $query;
	}
	
	function getFrontProjectFor($condi='',$limit='',$start='')
	{
		$this->db->from('projects p');
		$this->db->join('projects_images pi','p.projects_id = pi.projects_id','left');
		if(checkValue($condi)){
			$this->db->where($condi);
		}
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.projects_id');
		$this->db->where('p.projects_status','1');
	    if(isset($limit) && !empty($limit) && is_numeric($limit)) $this->db->limit($limit,$start);
		$query = $this->db->get();
		//echo $this->db->last_query(); exit();
		   return $query->result();
	}
	function getFrontProjectTotalRow($condition='')
	{
		$this->db->from('projects p');
		$this->db->join('projects_images pi','p.projects_id = pi.projects_id','left');
		if(checkValue($condition)){
			$this->db->where($condition);
		}
		$this->db->order_by('p.created','desc');
		$this->db->group_by('p.projects_id');
		$this->db->where('p.projects_status','1');
		$query = $this->db->get();
		//echo 'total_rows'.$query->num_rows().$this->db->last_query(); exit();
		   return $query->num_rows();
	}
}

