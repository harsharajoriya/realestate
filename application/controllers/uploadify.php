<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class uploadify extends CI_Controller {
    function upload_file()
    {
        ini_set('memory_limit', '-1');
        $imageType = $this->input->post('image_type');
        //create a folder if not exists
        $list_id = $this->input->post('list_id');
        $upload_dir = DETAIL_IMAGE_PATH.$imageType.'/'.$this->input->post('list_id');
       // $upload_dir = $_SERVER['DOCUMENT_ROOT'].$uploadDir;
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
            mkdir($upload_dir."/thumb", 0777, true);
            mkdir($upload_dir."/large", 0777, true);
        }
        // Set the allowed file extensions
        $fileTypes = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'); // Allowed file extensions

         if (!empty($_FILES) && $_FILES['Filedata']['error']==0) 
        {
            if ($_FILES['Filedata']['size'] < 12000000 ) {
            $tempFile   = $_FILES['Filedata']['tmp_name']; 
            $targetFile = $upload_dir .'/'. $_FILES['Filedata']['name'];
            // Validate the filetype
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            if (in_array(strtolower($fileParts['extension']), $fileTypes)) 
            {
                // Save the file
                move_uploaded_file($tempFile, $targetFile);
               // chmod($targetFile,0777);
                chmod($upload_dir."/thumb",0777);
                chmod($upload_dir."/large",0777);
                image_resizer($targetFile,$upload_dir);
                echo 'upload success';  
            } else {
                // The file type wasn't allowed
                echo 'Invalid file type.';
            }
         }else
         {
            echo 'Image should be less than 6 mb.';
         }
        }
        else
        {
            echo $_FILES['Filedata']['error'];  
        }


    }


    function filemanipulation($filename, $mainId, $imageType)
    {
        $file_path = base_url().'img/'.$imageType.'/'.$mainId.'/'.$filename;
      // alert($file_path);
        $this->load->model('common_model');
        
        if($imageType == 'category'){
            $file_data = array(
                'category_id' => $mainId,
                'image_name' => $filename,
                'image_path' => $file_path,
                'status' => 1
            );
            
            $added = $this->common_model->updateTableData('category_images', NULL, $file_data);
            
            $categoryImage = array('image_path' => $file_path);
            
            $this->common_model->updateTableData('category', $mainId, $categoryImage);
            
        }elseif($imageType == 'subcategory'){
            $file_data = array(
                'subcategory_id' => $mainId,
                'image_name' => $filename,
                'image_path' => $file_path,
                'status' => 1
            );
            
            $added = $this->common_model->updateTableData('subcategory_images', NULL, $file_data);
            
            $categoryImage = array('image_path' => $file_path);
            
            $this->common_model->updateTableData('subcategory', $mainId, $categoryImage);
            
        }elseif($imageType == 'slideshow'){
            $file_data = array(
                'slideshow_id' => $mainId,
                'image_name' => $filename,
                'image_path' => $file_path,
                'status' => 1
            );
            
            $added = $this->common_model->updateTableData('slideshow_images', NULL, $file_data);
            
            $categoryImage = array('image_path' => $file_path);
            
            $this->common_model->updateTableData('slideshow', $mainId, $categoryImage);
            
        }elseif($imageType == 'blogs'){
            $file_data = array(
                'blogs_id' => $mainId,
                'image_name' => $filename,
                'image_path' => $file_path,
                'status' => 1
            );
            
            $added = $this->common_model->updateTableData('blogs_images', NULL, $file_data);
            
            $blogImage = array('image_path' => $file_path);
            
            $this->common_model->updateTableData('blogs', $mainId, $blogImage);
            
        }elseif ($imageType == 'featured_product') {
            $file_data = array(
                'featured_products_id' => $mainId,
                'image_name' => $filename,
                'image_path' => $file_path,
                'status' => 1
            );

            $added = $this->common_model->updateTableData('featured_product_images', NULL, $file_data);

            $featuredProductImage = array('image_path' => $file_path);

            $this->common_model->updateTableData('featured_products', $mainId, $featuredProductImage);
        }elseif($imageType == 'projects'){
            $file_data = array(
                    'projects_id' => $mainId,
                    'projects_images_name' => $filename
                );
                $added = $this->common_model->updateTableData('projects_images', NULL, $file_data);
        }else{
                $file_data = array(
                    'property_id' => $mainId,
                    'property_images_name' => $filename
                );
                $added = $this->common_model->updateTableData('property_images', NULL, $file_data);

        }

    }
        
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */