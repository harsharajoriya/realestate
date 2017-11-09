<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	   
	   function __construct() {
        parent::__construct();
		   $this->fetch_value = $this->Common_model->getTableDetails('front_options', 1);
           $this->site_date_format = $this->fetch_value[0]->site_date_format;

       }
	  
    public function index()
    {
		   $data['property'] = $this->Common_model->getFrontProperty();
           $condition['where'] = array('city_status'=>'1');
			$data['city'] = $this->Common_model->getTableDetails('city',NULL,$condition);
			$condition['where'] = array('state_status'=>'1');
			$data['state'] = $this->Common_model->getTableDetails('state',NULL,$condition);
			$data['projects'] = $this->Common_model->getProjects();
			$this->load->view('common/header');
			$this->load->view('home/index',$data);
			$this->load->view('common/footer'); 		    
    }
	
	public function search_property()
	{
		
		$start=isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>='1' 
        ? round((($_GET['page'] - 1 ) * pagination_limit)) : '0';
		if(checkValue($_GET["search"])){
			if(checkValue($_GET["location"])){
				$condi = $this->db->where('p.city',$_GET["location"]);
			}
			if(checkValue($_GET["property_for"])){
				$condi .= $this->db->where('p.property_for',$_GET["property_for"]);
			}
			
		    //$condi .= $this->db->where('p.title LIKE "%'.$_GET["search"].'%" OR p.address LIKE "%'.$_GET["search"].'%" OR p.description LIKE "%'.$_GET["search"].'%"'); 
		    $condi .= $this->db->where('p.title LIKE "%'.$_GET["search"].'%" OR p.address LIKE "%'.$_GET["search"].'%"'); 
			if(checkValue($_GET["min-price"]) && checkValue($_GET["max-price"])){
				$msg = 'p.property_price >='.$_GET["min-price"].' AND '.'p.property_price <='.$_GET["max-price"];
				$condi .= $this->db->where($msg);
			}
			$data['property'] = $this->Common_model->getFrontProperty('',$condi,pagination_limit,$start);
			if(checkValue($_GET["location"])){
				$condi = $this->db->where('p.city',$_GET["location"]);
			}
			if(checkValue($_GET["property_for"])){
				$condi .= $this->db->where('p.property_for',$_GET["property_for"]);
			}
		   // $condi .= $this->db->where('p.title LIKE "%'.$_GET["search"].'%" OR p.address LIKE "%'.$_GET["search"].'%" OR p.description LIKE "%'.$_GET["search"].'%"'); 
		    $condi .= $this->db->where('p.title LIKE "%'.$_GET["search"].'%" OR p.address LIKE "%'.$_GET["search"].'%"'); 
			if(checkValue($_GET["min-price"]) && checkValue($_GET["max-price"])){
				$msg = 'p.property_price>='.$_GET["min-price"].' AND '.'p.property_price<='.$_GET["max-price"];
				$condi .= $this->db->where($msg);
			}
			$total_rows = $this->Common_model->getFrontPropertyTotalRow($condi);
			//echo $total_rows; exit();
			$querystring=!empty($_GET["location"]) ? 'location='.$_GET["location"].'&': '';
			$querystring.=!empty($_GET['property_for']) ? 'property_for='.$_GET['property_for'].'&': '';
			$querystring.=!empty($_GET['search']) ? 'search='.$_GET['search'].'&' : '';
			$querystring.=!empty($_GET['min-price']) ? 'min-price='.$_GET['min-price'].'&' : '';
			$querystring.=!empty($_GET['max-price']) ? 'max-price='.$_GET['max-price'].'&' : '';
			$url = !empty($_GET["location"]) || !empty($_GET['property_for']) || !empty($_GET['search']) || !empty($_GET["min-price"]) || !empty($_GET["max-price"])? base_url('search-property?'.htmlspecialchars($querystring,ENT_QUOTES)) : base_url('search-property');
			$config = common_pagination($total_rows, $url);
			$this->pagination->initialize($config);
			if(isset($data['property']) && !empty(array_filter($data['property'])) || 
				isset($data['property']) && !empty(array_filter($data['property']))){
				$data['links']  = $this->pagination->create_links();
			}
			$condition['where'] = array('city_status'=>'1');
			$data['city'] = $this->Common_model->getTableDetails('city',NULL,$condition);
			$condition['where'] = array('state_status'=>'1');
			$data['state'] = $this->Common_model->getTableDetails('state',NULL,$condition);
			$this->load->view('common/header2');
			$this->load->view('listing-search',$data);
			$this->load->view('common/footer');
		}
	}
	
	public function user_data_view($comming_from=''){
		$data['comming_from']=$comming_from;
		$this->session->set_userdata('comming_from',$comming_from);
		$this->load->view('common/header2');
        $this->load->view('form/user');
        $this->load->view('common/footer');
	}
	
	public function property_listing_rent()
	{
		$start=isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>='1' 
        ? round((($_GET['page'] - 1 ) * pagination_limit)) : '0';
		$condi = 		$condi = array('p.property_for'=>'Rent');
		$data['property'] = $this->Common_model->getFrontPropertyFor($condi,pagination_limit,$start);
		$total_rows = $this->Common_model->getFrontPropertyTotalRow($condi);
		$url = base_url('rent-property');
		$config = common_pagination($total_rows, $url);
		$this->pagination->initialize($config);
		if(isset($data['property']) && !empty(array_filter($data['property'])) || 
			isset($data['property']) && !empty(array_filter($data['property']))){
			$data['links']  = $this->pagination->create_links();
		}
		$condition['where'] = array('city_status'=>'1');
		$data['city'] = $this->Common_model->getTableDetails('city',NULL,$condition);
        $this->load->view('common/header2');
        $this->load->view('listing-rent',$data);
        $this->load->view('common/footer');
	}
	
	public function property_listing_sell()
	{
        $start=isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>='1' 
        ? round((($_GET['page'] - 1 ) * pagination_limit)) : '0';
		$condi = array('p.property_for'=>'Sell');
		$total_rows = $this->Common_model->getFrontPropertyTotalRow($condi);
		$data['property'] = $this->Common_model->getFrontPropertyFor($condi,pagination_limit,$start);
		$url = base_url('sell-property');
		$config = common_pagination($total_rows, $url);
		$this->pagination->initialize($config);
		if(isset($data['property']) && !empty(array_filter($data['property'])) || 
			isset($data['property']) && !empty(array_filter($data['property']))){
			$data['links']  = $this->pagination->create_links();
		}
		$condition['where'] = array('city_status'=>'1');
		$data['city'] = $this->Common_model->getTableDetails('city',NULL,$condition);
        $this->load->view('common/header2');
        $this->load->view('listing-sell',$data);
        $this->load->view('common/footer');
	}
	public function submit_user(){
		if($this->input->post()){
			$user_type = $this->input->post('iAmType');
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$email = $this->input->post('email');
			$number = $this->input->post('number');
			$property_for = $this->input->post('property_for');
			$property_type = $this->input->post('property_type');
			$arrUser = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'number'=>$number,'user_type'=>$user_type,'property_for'=>$property_for,'property_type'=>$property_type);
			$insertid = $this->Common_model->updateTableData('property',NULL,$arrUser);
			if($property_type == 'Agricultural Land' || $property_type == 'Farm House'){
				$this->land($insertid,$property_for);
			}else{
				$this->post($insertid,$property_for);
			}
		}else{
			redirect('');
		}
	}
    public  function land($insertid='',$property_for=''){
		if($this->input->post()){
		$data['insertid'] = $insertid;
		$data['property_for'] = $property_for;
		$order = $this->db->order_by('city_name','asc');
		$data['city'] = $this->Common_model->getTableDetails('city',NULL,NULL,$order);
		$order = $this->db->order_by('state_name','asc');
		$data['state'] = $this->Common_model->getTableDetails('state',NULL,NULL,$order);
        $this->load->view('common/header2');
        $this->load->view('form/add-land',$data);
        $this->load->view('common/footer');
		}else{
			redirect('');
		}
    }
	
	public  function post($insertid='',$property_for=''){
		if($this->input->post()){
		$data['insertid'] = $insertid;
		$data['property_for'] = $property_for;
		$order = $this->db->order_by('city_name','asc');
		$data['city'] = $this->Common_model->getTableDetails('city',NULL,NULL,$order);
		$order = $this->db->order_by('state_name','asc');
		$data['state'] = $this->Common_model->getTableDetails('state',NULL,NULL,$order);
        $this->load->view('common/header2');
        $this->load->view('form/add-post',$data);
        $this->load->view('common/footer');
		}else{
			redirect('');
		}
    }
	public function submit_post(){
		if($this->input->post()){
			$title = $this->input->post('title');
			$desc = $this->input->post('description');
			$property_price = $this->input->post('property_price');
			$address = $this->input->post('address');
			$zip = $this->input->post('zip');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$country = $this->input->post('country');
			$property_area = $this->input->post('property-area');
			$property_size = $this->input->post('property-size');
			$property_bedrooms = $this->input->post('property-bedrooms');
			$area_in = $this->input->post('area_in');
			$property_bathrooms = $this->input->post('property-bathrooms');
			$property_year = $this->input->post('property-year-built');
			$gym = $this->input->post('gym');
			$balcuny = $this->input->post('balcuny');
			$Swimingpull = $this->input->post('Swimingpull');
			$videourl = $this->input->post('videourl');
			$property_hall = $this->input->post('property_hall');
			$insertid = $this->input->post('insertid');
			$property_for = $this->input->post('property_for');
			if($property_for == 'Rent')
			  {
				  $unique_id = 'R'.$insertid;
			  }
			  if($property_for == 'Sell')
			  {
				  $unique_id = 'S'.$insertid;
			  }
             if($Swimingpull == 'on')
			 {
				 $Swimingpull = '1';
			 }else{
				 $Swimingpull = '0';
			 }
			 if($balcuny == 'on')
			 {
				 $balcuny = '1';
			 }else{
				 $balcuny = '0';
			 }
			  if($gym == 'on')
			 {
				 $gym = '1';
			 }else{
				 $gym = '0';
			 }
			 if($insertid){
				 $arrPost = array('title'=>$title,'property_year'=>$property_year,'description'=>$desc,'property_price'=>$property_price,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'zip'=>$zip,'property_bathrooms'=>$property_bathrooms,'property_bedrooms'=>$property_bedrooms,'property_hall'=>$property_hall,'videourl'=>$videourl,'property_area'=>$property_area,'property_size'=>$property_size,'gym'=>$gym,'Swimingpull'=>$Swimingpull,'balcuny'=>$balcuny,'created'=>date('Y-m-d H:i:s'),'property_unique_id'=>$unique_id,'area_in'=>$area_in);			
			     $insertid = $this->Common_model->updateTableData('property',$insertid,$arrPost);
				 $row = $this->Common_model->getTableDetails('property',$insertid);
				 $first_name = $row[0]->first_name;
                 $last_name = $row[0]->first_name;
				 $to = $row[0]->email;
                 $from = ADMIN_EMAIL;
                 $subject = 'Thank you for posting add';
                 $message = "<b>Hi.</b>"."<b><?php if(isset($first_name) && isset($last_name) && !empty($first_name) && !empty($last_name)) echo $first_name.' '.$last_name; ?><b><br>
                             <p> Thank you for posting an add your add will be showing after admin approve.</p>";
                 send_email($to,$from,$subject,$message);
                 $this->session->set_flashdata('flashSuccess','Thanks for posting property it will post soon once approved by admin..!');
			 }
			 $comming_from = $this->session->userdata(comming_from);
			 if($comming_from == 'admin'){
				 redirect('property');
			 }else{
				 $this->user_data_view(); 
			 }
		}else{
			redirect('');
		}
	}
	
	function update_post(){
		if($this->input->post()){
			$title = $this->input->post('title');
			$desc = $this->input->post('description');
			$property_type = $this->input->post('property_type');
			$property_price = $this->input->post('property_price');
			$address = $this->input->post('address');
			$zip = $this->input->post('zip');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$country = $this->input->post('country');
			$property_area = $this->input->post('property-area');
			$property_size = $this->input->post('property-size');
			$property_bedrooms = $this->input->post('property-bedrooms');
			$property_bathrooms = $this->input->post('property-bathrooms');
			$property_year = $this->input->post('property-year-built');
			$gym = $this->input->post('gym');
			$balcuny = $this->input->post('balcuny');
			$Swimingpull = $this->input->post('Swimingpull');
			$videourl = $this->input->post('videourl');
			$property_hall = $this->input->post('property_hall');
			$insertid = $this->input->post('insertid');
             if($Swimingpull == 'on')
			 {
				 $Swimingpull = '1';
			 }else{
				 $Swimingpull = '0';
			 }
			 if($balcuny == 'on')
			 {
				 $balcuny = '1';
			 }else{
				 $balcuny = '0';
			 }
			  if($gym == 'on')
			 {
				 $gym = '1';
			 }else{
				 $gym = '0';
			 }
			 if($insertid){
				 $arrPost = array('title'=>$title,'property_year'=>$property_year,'description'=>$desc,'property_type'=>$property_type,'property_price'=>$property_price,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'zip'=>$zip,'property_bathrooms'=>$property_bathrooms,'property_bedrooms'=>$property_bedrooms,'property_hall'=>$property_hall,'videourl'=>$videourl,'property_area'=>$property_area,'property_size'=>$property_size,'gym'=>$gym,'Swimingpull'=>$Swimingpull,'balcuny'=>$balcuny,'created'=>date('Y-m-d H:i:s'));			
			     $insertid = $this->Common_model->updateTableData('property',$insertid,$arrPost);
				 $row = $this->Common_model->getTableDetails('property',$insertid);
				 $first_name = $row[0]->first_name;
                 $last_name = $row[0]->first_name;
				 $to = $row[0]->email;
                 $from = ADMIN_EMAIL;
                 $subject = 'Thank you for posting add';
                 $message = "<b>Hi.</b>"."<b><?php if(isset($first_name) && isset($last_name) && !empty($first_name) && !empty($last_name)) echo $first_name.' '.$last_name; ?><b><br>
                             <p> Thank you for posting an add your add will be showing after admin approve.</p>";
                 send_email($to,$from,$subject,$message);
                 $this->session->set_flashdata('flashSuccess','Thank you for posting an add your add will be showing after admin approve..!');
			 }
		     redirect('admin');
		}else{
			redirect('');
		}
	}
	function front_options()
    {
		if($this->session->userdata('admin_id'))
      {
        $data['content'] = 'front-option-view';
        $data['front_options'] = $this->Common_model->getTableDetails('front_options', '1',NULL,NULL);
        $this->load->view('layouts/layout',$data);
	  }else{
		  $this->load->view('admin');
	  }

    }
      function submitFrontOptions($i=''){
		  if($this->input->post())
      {
            $site_date_format = $this->input->post('site_date_format');
           
        // echo $this->input->post('Currency'); exit();
        
        if($this->input->post('submit')){
            $aFrontArray = array(
                'title' => $this->input->post('title'),
                'meta_desc' => $this->input->post('meta_desc'),
                'meta_key' => $this->input->post('meta_key'),
                'email' => $this->input->post('email'), 
                'email_us' => $this->input->post('email_us'),
                'call_us' => $this->input->post('call_us'), 
                'address' => $this->input->post('address'),
                'site_date_format' => $this->input->post('site_date_format'),
                'facebook_link' => $this->input->post('facebook_link'), 
                'twitter_link' => $this->input->post('twitter_link'),
                'google_link' => $this->input->post('google_link'), 
                'linked_link' => $this->input->post('linked_link'),
            );
              $upload_dir = DETAIL_IMAGE_PATH.'front-option/';
            if(!empty($_FILES) && $_FILES['file']['name'] != ''){
                /***********************/
                $field_name='file'; 
                $path= $upload_dir.'bg/';
                $upload_file_status=single_file_upload($field_name,$path,'false',NULL,'bg'); 
                if($upload_file_status['status']=='error'){
                      $this->session->set_flashdata('Something went wrong please try again'.$upload_file_status['message'], "error");
                }else{
                    //$full_path =  $path.$this->fetch_value_meta_data[0]->background_image; 
                   // deleted_image_f($full_path);
                    $aFrontArray['background_image'] = $upload_file_status['message']['file_name'];
                }
            }
             if(!empty($_FILES) && $_FILES['logo']['name'] != ''){
                 /***********************/
                $field_name='logo';
                $path= $upload_dir.'logo/';
				$custom_size = '100*100';
                $upload_file_status=single_file_upload($field_name,$path,true,$custom_size,'logo'); 
                if($upload_file_status['status']=='error'){
                      $this->session->set_flashdata('flashError','Something went wrong please try again'.$upload_file_status['message']);
                }else{
                    //$full_path =  $path.$this->fetch_value_meta_data[0]->logo; 
                    //deleted_image_f($full_path);
                    $aFrontArray['logo'] = $upload_file_status['message']['file_name'];
                }
            }
                if(!empty($_FILES) && $_FILES['location']['name'] != ''){

                $field_name='location'; 
                $path = $upload_dir.'location/';
                $upload_file_status=single_file_upload($field_name,$path,'false',NULL,'location'); 
                if($upload_file_status['status']=='error'){
                      $this->session->set_flashdata('flashError','Something went wrong please try again'.$upload_file_status['message']);
                }else{
                   // $full_path =  $path.$this->fetch_value_meta_data[0]->location_image; 
                   // deleted_image_f($full_path);
                    $aFrontArray['location_image'] = $upload_file_status['message']['file_name'];
                }

                /********************/
           }
            $returnId = $this->Common_model->updateTableData('front_options', 1, $aFrontArray);

            if(checkValue($returnId)){
                $this->session->set_flashdata('flashSuccess',"Admin front option successfully updated..!");
                redirect('front-options');
            }
        }
		}else{
		  redirect('admin');
	  }
    }
	public function enquiry()
	{
		if($this->session->userdata('admin_id'))
      {
        $data['content'] = 'enquiry';
		$order = $this->db->order_by('enq_added_dtm','DESC');
		//$data['enquiry'] = $this->Common_model->getTableDetails('enquiry',NULL,NULL,$order);
		$data['enquiry'] = $this->Common_model->getEnquiry();
        $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
	}
	function delete_data(){
   	    $tableName = $this->input->post('tableName');
        $Id = $this->input->post('id');
        $path = $this->input->post('path');
        $image_name = $this->input->post('image_name');
        $returnId = $this->Common_model->delete($tableName, $Id);
        if(checkValue($tableName) && checkValue($Id)){
             if(checkValue($returnId)) {
                if(checkValue($path) && checkValue($image_name)){
                    deleted_image_path($path,$image_name);
                }
                    echo "OK";
             }else{
                    echo "Error";
             }
            
        }else{
            echo "Error";
        }
   }

    public function approve_data($id,$table_name)
    {
        if(!empty($id) && isset($id)){
            $condition = array($table_name.'_status' => '1');
            $id = $this->Common_model->updateTableData($table_name,$id, $condition);
        }
        redirect('admin');
    }

    public function disapprove_data($id,$table_name)
    {
        if(!empty($id)){
            $condition = array($table_name.'_status' => '0');
            $id = $this->Common_model->updateTableData($table_name,$id, $condition);
        }
        redirect('admin');
    }

    public function download_csv($module_name=''){
        if(!empty($module_name))
        {
            if($module_name == 'Enquiry')
            {
                 $order = $this->db->order_by('created','desc');
                 $module_data = $this->Common_model->getEnquiry();
            }
            $data = csv_report($module_name,$module_data);
        }

    }
	
	public function property()
    {
	  	if($this->session->userdata('admin_id'))
      {
        $data['content'] = 'property';
		$data['property'] = $this->Common_model->getProperty();
        $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
    }
	
	public function projects()
    {
	  	if($this->session->userdata('admin_id'))
      {
        $data['content'] = 'projects';
		$data['projects'] = $this->Common_model->getTableDetails('projects',NULL);
        $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
    }
	
	public function edit_property($property_id){
	   if(checkValue($property_id))
        {
			$data['content'] = 'edit-property';
			$data['insertid'] = $property_id;
			$data['property'] = $this->Common_model->getProperty($property_id);
			$data['propertydetails'] = $this->Common_model->getFrontPropertyDetails($property_id);
			$order = $this->db->order_by('city_name','asc');
		    $data['city'] = $this->Common_model->getTableDetails('city',NULL,NULL,$order);
			$order = $this->db->order_by('state_name','asc');
		    $data['state'] = $this->Common_model->getTableDetails('state',NULL,NULL,$order);
			$this->load->view('layouts/layout',$data);
        }else{
            redirect('admin');
        }
	}
	
	public function city(){
		if($this->session->userdata('admin_id'))
       {
        $data['content'] = 'city';
		$order = $this->db->order_by('city_name','asc');
		$data['city'] = $this->Common_model->getTableDetails('city',NULL,NULL,$order);
        $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
	}
	
	public function state(){
		if($this->session->userdata('admin_id'))
       {
        $data['content'] = 'state';
		$order = $this->db->order_by('state_name','asc');
		$data['state'] = $this->Common_model->getTableDetails('state',NULL,NULL,$order);
        $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
	}
	
	public function submit_city()
	{
		if($this->input->post())
		{
			$city = $this->input->post('city_name');
			$condition['where'] = array('city_name'=>$city);
			$cityValue = $this->Common_model->getTableDetails('city',NULL,$condition);
			if(empty($cityValue)){
			$arrCity = array('city_name'=>$city,'city_status'=>'1','created'=>date('Y-m-d H:i:s'));
			$insertid = $this->Common_model->updateTableData('city',NULL,$arrCity);
			if($insertid)
			{
				$this->session->set_flashdata('flashSuccess','city added successfully..!');
			}else{
				$this->session->set_flashdata('flashError','please try again..!');
			}
			}else{
			    $this->session->set_flashdata('flashError','city name allready exist..!');
			}
			redirect('city');
		}else{
			redirect('admin');
		}
	}
	
	
	public function submit_state()
	{
		if($this->input->post())
		{
			$state = $this->input->post('state_name');
			$condition['where'] = array('state_name'=>$state);
			$cityValue = $this->Common_model->getTableDetails('state',NULL,$condition);
			if(empty($cityValue)){
			$arrCity = array('state_name'=>$state,'state_status'=>'1','state_created'=>date('Y-m-d H:i:s'));
			$insertid = $this->Common_model->updateTableData('state',NULL,$arrCity);
			if($insertid)
			{
				$this->session->set_flashdata('flashSuccess','state added successfully..!');
			}else{
				$this->session->set_flashdata('flashError','please try again..!');
			}
			}else{
			    $this->session->set_flashdata('flashError','state name allready exist..!');
			}
			redirect('state');
		}else{
			redirect('admin');
		}
	}
	
	public function submit_enquiry()
	{
		if($this->input->post())
		{
			//pr($this->input->post());
		   $property_id = $this->input->post('property_id');
		   $first_name = $this->input->post('first_name');
		   $last_name = $this->input->post('last_name');
           $email = $this->input->post('email');
		   $number = $this->input->post('mobile_number');
		   $subject = $this->input->post('subject');
           $message = $this->input->post('message');
		   $url = $this->input->post('url');
		   $enquiry_id = $this->input->post('enquiry_id');
		   $remark =  $this->input->post('remark');
           if(checkValue($enquiry_id)){
			   $meeting = $this->input->post('meeting_date');
		   if(checkValue($meeting))
		   {
			   $meeting_date = $meeting;
			  // echo $meeting_date; exit();
		   }
		       $followup_status = $this->input->post('followup_status');
			              $arrEnquiry = array('meeting_date'=>$meeting_date,'followup_status'=>$followup_status,'remark'=>$remark);
			      $insertid = $this->Common_model->updateTableData('enquiry',$enquiry_id,$arrEnquiry);
			   if($insertid)
				{
					$this->session->set_flashdata('flashSuccess','Meeting date successfully updated ..!');
				}else{
					$this->session->set_flashdata('flashError','please try again..!');
				}

				  redirect('enquiry');
				
		   }else{
			              $arrEnquiry = array('property_id'=>$property_id,'enq_first_name'=>$first_name,'enq_last_name'=>$last_name,'enq_email'=>$email,'enq_phone'=>$number,'enq_subject'=>$subject,'enq_message'=>$message,'enq_added_dtm'=>date('Y-m-d H:i:s'));
			   $insertid = $this->Common_model->updateTableData('enquiry',NULL,$arrEnquiry);
			   if($insertid)
				{
					$this->session->set_flashdata('flashSuccess','Enquiry successfully submit..!');
				}else{
					$this->session->set_flashdata('flashError','please try again..!');
				}
				if($url == 'listing-sell')
				{
				  redirect('sell-property');
				}
				else{
					redirect('rent-property');
				}
		   }
		}else{
			redirect('');
		}
	}
	
	public function edit_enquiry($id){
		if(checkValue($id))
	    {
		  $data['enquiry'] = $this->Common_model->getEnquiry($id);
		  $data['content'] = 'edit-enquiry';
          $this->load->view('layouts/layout',$data);
		  
		}else{
			redirect('');
		}
	}
	
	public function edit_project_enquiry($id){
		if(checkValue($id))
	    {
		  $data['enquiry'] = $this->Common_model->getProjectEnquiry($id);
		  $data['content'] = 'edit-enquiry-project';
          $this->load->view('layouts/layout',$data);
		  
		}else{
			redirect('');
		}
	}
	
	public function follow_up(){
		if($this->session->userdata('admin_id'))
       {
        $data['content'] = 'follow-up';
		$data['enquiry'] = $this->Common_model->getEnquiry();
        $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
	}
	
	public function property_details($id){
		if(checkValue($id))
		{
			$data['property'] = $this->Common_model->getFrontProperty($id);
			$data['propertydetails'] = $this->Common_model->getFrontPropertyDetails($id);
			$this->load->view('common/header2');
            $this->load->view('property-details',$data);
            $this->load->view('common/footer');

		}else{
			redirect('');
		}
	}
	
	public function add_enquiry(){
		
		$data['content'] = 'add-enquiry';
        $this->load->view('layouts/layout',$data);
	}
	
	public function add_project_enquiry(){
		
		$data['content'] = 'add-enquiry-project';
		$data['projects'] = $this->Common_model->getFrontProjectFor();
        $this->load->view('layouts/layout',$data);
	}
	
	public function submit_new_enquiry(){
		if($this->input->post())
		{
		   $property_for = $this->input->post('property_for');
		   $property_id = 'admin_'.$property_for;
		   $first_name = $this->input->post('first_name');
		   $last_name = $this->input->post('last_name');
           $email = $this->input->post('email');
		   $number = $this->input->post('mobile_number');
		   $subject = $this->input->post('subject');
           $message = $this->input->post('message');
		   $flat_type = $this->input->post('flat_type');
		   $source_enquiry = $this->input->post('source_enquiry');
		   $source_fund = $this->input->post('source_fund');
           $attend_by = $this->input->post('attend_by');
           $price_range = $this->input->post('price_range');
		   
		   	 $arrEnquiry = array('property_id'=>$property_id,'admin_property_for'=>$property_for,'enq_first_name'=>$first_name,'enq_last_name'=>$last_name,'enq_email'=>$email,'enq_phone'=>$number,'enq_subject'=>$subject,'enq_message'=>$message,'enq_added_dtm'=>date('Y-m-d H:i:s'),'attend_by'=>$attend_by,'source_of_enquiry'=>$source_enquiry,'source_of_fund'=>$source_fund,'flat_type'=>$flat_type,'price_range'=>$price_range);
			 $insertid = $this->Common_model->updateTableData('enquiry',NULL,$arrEnquiry);
			 if($insertid)
		     {
				$this->session->set_flashdata('flashSuccess','Enquiry successfully submit..!');
			}else{
				$this->session->set_flashdata('flashError','please try again..!');
			}
           redirect('enquiry');
		}else{
			redirect('enquiry');
		}
	}
	
	public function submit_admin_project_enquiry(){
		if($this->input->post())
		{
		   $property_for = $this->input->post('property_for');
		   $property_id = 'admin_'.$property_for;
		   $first_name = $this->input->post('first_name');
		   $last_name = $this->input->post('last_name');
           $email = $this->input->post('email');
		   $number = $this->input->post('mobile_number');
		   $subject = $this->input->post('subject');
           $message = $this->input->post('message');
		   $flat_type = $this->input->post('flat_type');
		   $source_enquiry = $this->input->post('source_enquiry');
		   $source_fund = $this->input->post('source_fund');
           $attend_by = $this->input->post('attend_by');
           $price_range = $this->input->post('price_range');
           $project_id = $this->input->post('project_id');
		   
		   	 $arrEnquiry = array('project_id'=>$project_id,'admin_property_for'=>$property_for,'enq_first_name'=>$first_name,'enq_last_name'=>$last_name,'enq_email'=>$email,'enq_phone'=>$number,'enq_subject'=>$subject,'enq_message'=>$message,'enq_added_dtm'=>date('Y-m-d H:i:s'),'attend_by'=>$attend_by,'source_of_enquiry'=>$source_enquiry,'source_of_fund'=>$source_fund,'flat_type'=>$flat_type,'price_range'=>$price_range);
			 $insertid = $this->Common_model->updateTableData('project_enquiry',NULL,$arrEnquiry);
			 if($insertid)
		     {
				$this->session->set_flashdata('flashSuccess','Enquiry successfully submit..!');
			}else{
				$this->session->set_flashdata('flashError','please try again..!');
			}
           redirect('enquiry');
		}else{
			redirect('enquiry');
		}
	}
	
	public function add_project(){
		if($this->session->userdata('admin_id'))
       {
		    $condition['where'] = array('city_status'=>'1');
			$data['city'] = $this->Common_model->getTableDetails('city',NULL,$condition);
			$condition['where'] = array('state_status'=>'1');
			$data['state'] = $this->Common_model->getTableDetails('state',NULL,$condition);
			$data['content'] = 'form/add-project';
			$this->load->view('layouts/layout',$data);
       }else{
            redirect('admin');
       }
	}
	
	public function privacy()
	{
		$this->load->view('common/header2');
        $this->load->view('privacy',$data);
        $this->load->view('common/footer');
	}
	
	public function terms_conditions(){
		$this->load->view('common/header2');
        $this->load->view('terms-condition',$data);
        $this->load->view('common/footer');
	}
	
	public function contact_us(){
		$this->load->view('common/header2');
        $this->load->view('contact',$data);
        $this->load->view('common/footer');
	}
	
	public function save_contact(){
		if(checkValue($this->input->post()))
		{
			$email = $this->input->post('email');
			$number = $this->input->post('number');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
			$arrCont = array('email'=>$email,'number'=>$number,'subject'=>$subject,'message'=>$message);
			$insertid = $this->Common_model->updateTableData('contacts',NULL,$arrCont);
			if($insertid)
			{
				$this->session->set_flashdata('flashSuccess','contact send successfully we will get back to you soon..!');
			}else{
				$this->session->set_flashdata('flashError','please try again..!');
			}
			redirect('contact-us');
		}else{
			redirect('');
		}
	}
	
	public function submit_project(){
		if($this->input->post()){
			$title = $this->input->post('title');
			$desc = $this->input->post('description');
			$projects_price = $this->input->post('projects_price');
			$address = $this->input->post('address');
			$zip = $this->input->post('zip');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$country = $this->input->post('country');
			$projects_area = $this->input->post('projects-area');
			$projects_size = $this->input->post('projects-size');
			$area_in = $this->input->post('area_in');
			$projects_year = $this->input->post('projects-year-built');
			//$videourl = $this->input->post('videourl');
			$projects_for = $this->input->post('projects_for');
			if($projects_for == 'Rent')
			  {
				  $unique_id = 'PR'.uniqid();
			  }
			  if($projects_for == 'Sell')
			  {
				  $unique_id = 'PS'.uniqid();
			  }
			
				 $arrPost = array('projects_for'=>$projects_for,'title'=>$title,'projects_year'=>$projects_year,'description'=>$desc,'projects_price'=>$projects_price,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'zip'=>$zip,'projects_area'=>$projects_area,'projects_size'=>$projects_size,'created'=>date('Y-m-d H:i:s'),'projects_unique_id'=>$unique_id,'area_in'=>$area_in);			
			     $insertid = $this->Common_model->updateTableData('projects',NULL,$arrPost);
				 $this->add_project_image($insertid); 		
	} 		
	}
	
	public function update_project(){
		    if($this->input->post()){
		    $title = $this->input->post('title');
			$desc = $this->input->post('description');
			$projects_price = $this->input->post('projects_price');
			$address = $this->input->post('address');
			$zip = $this->input->post('zip');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$country = $this->input->post('country');
			$projects_area = $this->input->post('projects-area');
			$projects_size = $this->input->post('projects-size');
			$area_in = $this->input->post('area_in');
			$projects_year = $this->input->post('projects-year-built');
			$project_id = $this->input->post('insertid');
			$arrPost = array('title'=>$title,'projects_year'=>$projects_year,'description'=>$desc,'projects_price'=>$projects_price,'address'=>$address,'city'=>$city,'state'=>$state,'country'=>$country,'zip'=>$zip,'projects_area'=>$projects_area,'projects_size'=>$projects_size,'created'=>date('Y-m-d H:i:s'),'area_in'=>$area_in);			
			$insertid = $this->Common_model->updateTableData('projects',$project_id,$arrPost);
	        if($insertid)
			{
				$this->session->set_flashdata('flashSuccess','Project successfully updated..!');
			}else{
				$this->session->set_flashdata('flashError','please try again..!');
			}
			}else{
				
			}
			redirect('projects');
	}
	
	public function add_project_image($insertid=''){
		if($this->session->userdata('admin_id'))
       {
			$data['insertid'] = $insertid;
			$data['content'] = 'form/add-project-image';
			$this->load->view('layouts/layout',$data);
       }else{
            redirect('admin');
       }
	}
	
	public function projects_listing()
	{
		/*$start=isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>='1' 
        ? round((($_GET['page'] - 1 ) * pagination_limit)) : '0';
		$total_rows = count($this->Common_model->getProjects());
		$data['projects'] = $this->Common_model->getProjects('',pagination_limit,$start);
		$url = base_url('projects-listing');
		$config = common_pagination($total_rows, $url);
		$this->pagination->initialize($config);
		if(isset($data['projects']) && !empty(array_filter($data['projects'])) || 
			isset($data['projects']) && !empty(array_filter($data['projects']))){
			$data['links']  = $this->pagination->create_links();
		}
		$condition['where'] = array('city_status'=>'1');
		$data['city'] = $this->Common_model->getTableDetails('city',NULL,$condition);
        $this->load->view('common/header2');
        $this->load->view('projects-listing',$data);
        $this->load->view('common/footer'); */
		$start=isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page']>='1' 
        ? round((($_GET['page'] - 1 ) * pagination_limit)) : '0';
			if(checkValue($_GET["location"])){
				$condi = $this->db->where('p.city',$_GET["location"]);
			}
			if(checkValue($_GET["property_for"])){
				$condi .= $this->db->where('p.projects_for',$_GET["property_for"]);
			}
		    $condi .= $this->db->where('p.title LIKE "%'.$_GET["search"].'%" OR p.address LIKE "%'.$_GET["search"].'%" OR p.description LIKE "%'.$_GET["search"].'%"'); 
			if(checkValue($_GET["min-price"]) && checkValue($_GET["max-price"])){
				$msg = 'p.projects_price>='.$_GET["min-price"].' AND '.'p.projects_price<='.$_GET["max-price"];
				$condi .= $this->db->where($msg);
			}
			$data['projects'] = $this->Common_model->getFrontProjectFor($condi,pagination_limit,$start);
			if(checkValue($_GET["location"])){
				$condi = $this->db->where('p.city',$_GET["location"]);
			}
			if(checkValue($_GET["property_for"])){
				$condi .= $this->db->where('p.projects_for',$_GET["property_for"]);
			}
		    $condi .= $this->db->where('p.title LIKE "%'.$_GET["search"].'%" OR p.address LIKE "%'.$_GET["search"].'%" OR p.description LIKE "%'.$_GET["search"].'%"'); 
			if(checkValue($_GET["min-price"]) && checkValue($_GET["max-price"])){
				$msg = 'p.projects_price>='.$_GET["min-price"].' AND '.'p.projects_price<='.$_GET["max-price"];
				$condi .= $this->db->where($msg);
			}
			$total_rows = $this->Common_model->getFrontProjectTotalRow($condi);
			//echo $total_rows; exit();
			$querystring=!empty($_GET["location"]) ? 'location='.$_GET["location"].'&': '';
			$querystring.=!empty($_GET['property_for']) ? 'property_for='.$_GET['property_for'].'&': '';
			$querystring.=!empty($_GET['search']) ? 'search='.$_GET['search'].'&' : '';
			$querystring.=!empty($_GET['min-price']) ? 'min-price='.$_GET['min-price'].'&' : '';
			$querystring.=!empty($_GET['max-price']) ? 'max-price='.$_GET['max-price'].'&' : '';
			$url = !empty($_GET["location"]) || !empty($_GET['property_for']) || !empty($_GET['search']) || !empty($_GET["min-price"]) || !empty($_GET["max-price"])? base_url('projects-listing?'.htmlspecialchars($querystring,ENT_QUOTES)) : base_url('projects-listing');
			$config = common_pagination($total_rows, $url);
			$this->pagination->initialize($config);
			if(isset($data['projects']) && !empty(array_filter($data['projects'])) || 
				isset($data['projects']) && !empty(array_filter($data['projects']))){
				$data['links']  = $this->pagination->create_links();
			}
			$condition['where'] = array('city_status'=>'1');
			$data['city'] = $this->Common_model->getTableDetails('city',NULL,$condition);
			$condition['where'] = array('state_status'=>'1');
			$data['state'] = $this->Common_model->getTableDetails('state',NULL,$condition);
			$this->load->view('common/header2');
			$this->load->view('projects-listing',$data);
			$this->load->view('common/footer');
	}
	
	public function submit_project_enquiry()
	{
		if($this->input->post())
		{
			//pr($this->input->post());
		   $property_id = $this->input->post('property_id');
		   $first_name = $this->input->post('first_name');
		   $last_name = $this->input->post('last_name');
           $email = $this->input->post('email');
		   $number = $this->input->post('mobile_number');
		   $subject = $this->input->post('subject');
           $message = $this->input->post('message');
		   $url = $this->input->post('url');
		   $enquiry_id = $this->input->post('enquiry_id');
		   $remark =  $this->input->post('remark');
           if(checkValue($enquiry_id)){
			   $meeting = $this->input->post('meeting_date');
		   if(checkValue($meeting))
		   {
			   $meeting_date = $meeting;
			  // echo $meeting_date; exit();
		   }
		       $followup_status = $this->input->post('followup_status');
			              $arrEnquiry = array('meeting_date'=>$meeting_date,'followup_status'=>$followup_status,'remark'=>$remark);
			      $insertid = $this->Common_model->updateTableData('project_enquiry',$enquiry_id,$arrEnquiry);
			   if($insertid)
				{
					$this->session->set_flashdata('flashSuccess','Meeting date successfully updated ..!');
				}else{
					$this->session->set_flashdata('flashError','please try again..!');
				}

				  redirect('project-enquiry');
				
		   }else{
			   $arrEnquiry = array('project_id'=>$property_id,'enq_first_name'=>$first_name,'enq_last_name'=>$last_name,'enq_email'=>$email,'enq_phone'=>$number,'enq_subject'=>$subject,'enq_message'=>$message,'enq_added_dtm'=>date('Y-m-d H:i:s'));
			   $insertid = $this->Common_model->updateTableData('project_enquiry',NULL,$arrEnquiry);
			   if($insertid)
				{
					$this->session->set_flashdata('flashSuccess','Enquiry successfully submit..!');
				}else{
					$this->session->set_flashdata('flashError','please try again..!');
				}
				
				redirect('projects-listing');
		   }
		}else{
			redirect('');
		}
	}
	
	public function project_enquiry()
	{
		if($this->session->userdata('admin_id'))
      {
        $data['content'] = 'project-enquiry';
		$data['enquiry'] = $this->Common_model->getProjectEnquiry();
        $this->load->view('layouts/layout',$data);
        }else{
          redirect('admin');
        }
	}
	
	public function projects_details($id){
		if(checkValue($id))
		{
			$data['projects'] = $this->Common_model->getProjects($id);
			$data['projectsdetails'] = $this->Common_model->getFrontProjectDetails($id);
			$this->load->view('common/header2');
            $this->load->view('project-property-details',$data);
            $this->load->view('common/footer');

		}else{
			redirect('');
		}
	}
	
	public function edit_projects($id){
		if(checkValue($id))
        {
			$data['content'] = 'edit-project';
			$data['insertid'] = $id;
			$data['projects'] = $this->Common_model->getProjects($id);
			$data['projectsdetails'] = $this->Common_model->getFrontProjectDetails($id);
			$order = $this->db->order_by('city_name','asc');
		    $data['city'] = $this->Common_model->getTableDetails('city',NULL,NULL,$order);
			$order = $this->db->order_by('state_name','asc');
		    $data['state'] = $this->Common_model->getTableDetails('state',NULL,NULL,$order);
			$this->load->view('layouts/layout',$data);
        }else{
            redirect('admin');
        }
	}
}
