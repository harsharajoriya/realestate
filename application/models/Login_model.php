<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{
    function __construct()
	{
        parent::__construct();
    }
    
    public function validate_user()
    {
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));

        $this->db->select('*');
        $this->db->from('admin_users');        
        $this->db->where('password', $password);
        $this->db->where('email', $username);
        $this->db->where('user_type_id','1');
        
        $row = $this->db->get()->row();
		
        if(!empty($row))
        {
            $data = array(
                'full_name'=> $row->first_name.' '.$row->last_name,
                'username' => $row->email,
                'admin_id' => $row->admin_id,
                'user_type_id' => $row->user_type_id,
            );

            $this->session->set_userdata($data);
			return true;
        }
        else
        {
			return false;
        }	
    }
    function update_last_logged_in_details($user_id, $data)
    {
        if (is_numeric($user_id) && !empty($user_id))
        {
            $this->db->where('admin_id',$user_id);
            $this->db->update('admin_users',$data);
            return $user_id;
        }
    }
}
?>