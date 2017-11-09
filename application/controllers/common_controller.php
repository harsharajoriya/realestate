<?php
class common_controller extends CI_Controller {
   function delete_data(){
   	    $tableName = $this->input->post('tableName');
        $Id = $this->input->post('id');
        $path = $this->input->post('path');
        $image_name = $this->input->post('image_name');
        $returnId = $this->common_model->delete($tableName, $Id);
        if(checkValue($tableName) && checkValue($Id)){
             if(checkValue($returnId)) {
                if(checkValue($path) && checkValue($image_name)){
                    deleted_image_path($path,$image_name);
                }
                if($tableName == 'products'){
                    $this->common_model->delete_product_images($Id);
                    if(checkValue($path)){
                        delete_folder($path);
                    }
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
            $id = $this->common_model->updateTableData($table_name,$id, $condition);
        }
        redirect('admin');
    }

    public function disapprove_data($id,$table_name)
    {
        if(!empty($id)){
            $condition = array($table_name.'_status' => '0');
            $id = $this->common_model->updateTableData($table_name,$id, $condition);
        }
        redirect('admin');
    }

    public function download_csv($module_name=''){
        if(!empty($module_name))
        {
            if($module_name == 'Orders')
            {
                $module_data = $this->common_model->getOrders();
            }
            if($module_name == 'Enquiry')
            {
                 $order = $this->db->order_by('created','desc');
                 $module_data = $this->common_model->getTableDetails('enquiries', NULL,NULL,$order);
            }
            
            $data = csv_report($module_name,$module_data);
        }

    }

    public function clean_url_f($image_name){
		echo clean_url($image_name); exit();
	}
}