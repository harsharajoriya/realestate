<?php
function pr($data){
    echo '<pre>';
    print_r($data);
    exit();
}

function pr2($data){
    echo '<pre>';
    print_r($data);

}
function checkValue($value){
    if(isset($value) && !empty($value)){
        return TRUE;
    }else{
        return FALSE;
    }
}
function send_email($to,$from,$subject,$message){
    $CI =& get_instance();
    $CI->load->library('email');
    $CI->email->set_mailtype("html");
    $CI->email->to($to); 
	$CI->email->from($from); 
    $CI->email->subject($subject);
    $data['message'] = $message;
    $data['subject'] = $subject;
    // $CI->email->message($body); 
	$CI->email->message($message); 
     $CI->email->set_newline("\r\n");
     if($CI->email->send())
     {     
       return 1;
     }else{
		 $CI->email->print_debugger(); exit(); 
     }   
}
function image_resizer($targetFile,$upload_dir){
    $ci =& get_instance();
    $thumb_config['image_library'] = 'gd2';
    $thumb_config['source_image'] = $targetFile; 
    $thumb_config['new_image'] = $upload_dir."/thumb"; 
    $thumb_config['create_thumb'] = FALSE;
    $thumb_config['maintain_ratio'] = TRUE;
    $thumb_config['width']         = 250;
    $thumb_config['height']       = 250;

    $ci->image_lib->initialize($thumb_config);
    //$ci->load->library('image_lib', $thumb_config);
    $ci->image_lib->resize();
    $ci->image_lib->clear();

    $thumb_config['image_library'] = 'gd2';
    $thumb_config['source_image'] = $targetFile; 
    $thumb_config['new_image'] = $upload_dir."/large"; 
    $thumb_config['create_thumb'] = FALSE;
    $thumb_config['maintain_ratio'] = TRUE;
    $thumb_config['width']         = 600;
    $thumb_config['height']       = 600;

    $ci->image_lib->initialize($thumb_config);
    //$ci->load->library('image_lib', $thumb_config);
    $ci->image_lib->resize();
    $ci->image_lib->clear();
     // echo $ci->upload->display_errors();  exit();  
}
 function short_date($date_time)
  {
      $ci =& get_instance();
      $date_format=isset($ci->fetch_value_meta_data[0]->site_date_format) ? $ci->fetch_value_meta_data[0]->site_date_format : "d M y";
      return date($date_format, strtotime($date_time)); 
 }
 
 function e($string){
    
    if(checkValue($string)){
        echo(isset($string) && $string != '') ? $string : "";
    }else{
        echo "";
    }
    
}
function single_file_upload($field_name,$path,$resize_condition,$custom_size="",$page_type=''){
        $ci =& get_instance();
        $ci->load->library('upload');
        if(!empty($field_name)  && !empty($path) && !empty($resize_condition)){
            $config['upload_path']   = $path;
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 1024 * 5;
            $config['encrypt_name']  = TRUE;
            
            $ci->upload->initialize($config);
            if (!$ci->upload->do_upload($field_name)) {
                $error_upload_file=$ci->upload->display_errors();
				echo 'error'.$error_upload_file; exit();
                return array('status'=>'error','message'=>$error_upload_file);
            }else{
                $upload_data = $ci->upload->data();
                if(isset($resize_condition) && !empty($resize_condition) && $resize_condition=='true' && empty($allowed_type)){
                    $custom_size=isset($custom_size) && !empty($custom_size) ? $custom_size : '';
                    //$page_type1=explode('/', $path);
                    //$page_type=end($page_type1); // To take the folder name where resize path will done.
                    image_resizer_data($upload_data,$page_type,$custom_size);
                }
                return array('status'=>'success','message'=>$upload_data);
            }
        }else{
			echo 'error_upload_file'; exit();
            return FALSE;
        }
    }

    function image_resizer_data($upload_Data,$module_name,$custom_size=""){
        if(isset($upload_Data) && !empty($upload_Data) && isset($module_name) && !empty($module_name)){
            if(!empty($custom_size)){
                $custom_size=explode('*', $custom_size);
                $width=$custom_size[0]; $height=$custom_size[1];
            }else{
                $width="250"; $height="250";
            }

            if(isset($width) && !empty($width) && isset($height) && !empty($height)){
                $ci =& get_instance();
                $thumb_config['image_library'] = 'gd2';
                $thumb_config['source_image'] = $upload_Data['full_path']; 
                $thumb_config['new_image'] = './assets/images/front-option/'.$module_name.'/thumb/'; 
                $thumb_config['create_thumb'] = FALSE;
                $thumb_config['maintain_ratio'] = TRUE;
                $thumb_config['width']         = $width;
                $thumb_config['height']       = $height;

                $ci->image_lib->initialize($thumb_config);
                $ci->image_lib->resize();
                $ci->image_lib->clear();                    

                $large_img_config['image_library'] = 'gd2';
                $large_img_config['source_image'] = $upload_Data['full_path']; 
                $large_img_config['new_image'] = './assets/images/front-option/'.$module_name.'/large/'; 
                $large_img_config['create_thumb'] = FALSE;
                $large_img_config['maintain_ratio'] = TRUE;
                $large_img_config['width']         = 600;
                $large_img_config['height']       = 600;                    

                $ci->image_lib->initialize($large_img_config);
                $ci->image_lib->resize();
                $ci->image_lib->clear();
            }else{
                return FALSE;
            }
        }else{
            return FALSE;
        }
    }
   
    function csv_report($module_name="",$module_data="")
    {
        if(isset($module_name) && !empty($module_name) && isset($module_data) && !empty($module_data)){
            $ci =& get_instance();
            $ci->load->helper('download');
            $ci->load->dbutil();
            $fileName = $module_name."_".date('d-M-y-H:i').".csv";
            $path=FCPATH.'assets/csv_files/'.$fileName;
            $csvFile = fopen($path, "w");
            $csv_data = $ci->dbutil->csv_from_result($module_data);
           // write_file($path, $csv_data);
            force_download($fileName,$csv_data);
            return TRUE;
        }else{
            redirect("admin");
        }
    }
 function common_pagination($count = 0, $url = '') 
    {
        $config['query_string_segment'] = 'page';
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['base_url'] = $url;
        $config['total_rows'] = $count;
        $config['per_page'] =  pagination_limit;
        // $choice = $config["total_rows"] / $this->pagination_limit;
        // $config["num_links"] = '3';

        // config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = false;
        $config['last_link'] = false;

        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['next_link'] = '&raquo';

        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        return $config;
    }

function clean_url($string) {
    $search =  '!"#$%&/()=?*+\'-.,;:_';
    $search = str_split($search);
    $string=str_replace($search, "", $string); // Removes special chars.
    return strtolower(str_replace(' ', '-', $string)); // Removes space with dash and convert in small letters
}