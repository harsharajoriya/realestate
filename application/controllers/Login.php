<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->fetch_value = $this->Common_model->getTableDetails('front_options', 1);
           $this->site_date_format = $this->fetch_value[0]->site_date_format;
        $this->load->model('login_model');
    }

    public function index()
    {
		//getUserSession();
        if($this->session->userdata('admin_id'))
        {
          redirect('dashboard');
       }else{

        $this->load->view('auth/login_view');
       }
  }
   public function dashboard()
    {
      if($this->session->userdata('admin_id'))
      {
        $data['content'] = 'dashboard';
		$order = $this->db->order_by('enq_added_dtm','DESC');
		$data['enquiries'] = $this->Common_model->getTableDetails('enquiry',NULL,NULL,$order);
		$data['property'] = $this->Common_model->getProperty();
          $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
    }
    
    public function check_user()
    {
        $validate = $this->login_model->validate_user();
		//pr($this->session->all_userdata());

        if($validate)
        {
             $data = array(
                'last_logged_dtm' => date('Y-m-d H:i:s'),
                'last_logged_ip' => $this->input->ip_address()
            );
            $this->login_model->update_last_logged_in_details($this->session->userdata('admin_id'), $data);
            redirect('dashboard');
        }
        else
        {
            $this->session->set_flashdata('message','Invalid Username & Password');
            redirect('admin');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }
    
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
