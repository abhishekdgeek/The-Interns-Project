<?php 



class JPEGSlicer 
{ 
    function JPEGSlicer($directory, $temp_image,$selection,$resize) 
    { 
        
        
        $this->image_info = getimagesize($temp_image); 
        if(strtolower($selection) == 'nill') //NO RESIZE NEEDED 
        { 
            $height = $this->image_info[1]; 
             $width = $this->image_info[0]; 
        } 
        else if(strtolower($selection) == 'height') // IF THE FIXED SIZE IS HEIGHT 
        { 
            $height = $resize; 
            $ratio = $height/$this->image_info[1]; 
            $width = ceil($this->image_info[0] * $ratio); 
            
        } 
        else if(strtolower($selection) == 'width') 
        { 
            $width = $resize; 
            $ratio = $width/$this->image_info[0]; 
            $height = ceil($this->image_info[1] * $ratio); 
        } 
        @mkdir($directory,0777); 
        @mkdir($directory.'/top_left',0777); 
        @mkdir($directory.'/top_right',0777); 
        @mkdir($directory.'/bottom_left',0777); 
        @mkdir($directory.'/bottom_right',0777); 
		@mkdir($directory.'/top_left1',0777); 
        @mkdir($directory.'/top_right1',0777); 
        @mkdir($directory.'/bottom_left1',0777); 
        @mkdir($directory.'/bottom_right1',0777); 
		 @mkdir($directory.'/top_left2',0777); 
        @mkdir($directory.'/top_right2',0777); 
        @mkdir($directory.'/bottom_left2',0777); 
        @mkdir($directory.'/bottom_right2',0777); 
		 @mkdir($directory.'/top_left3',0777); 
        @mkdir($directory.'/top_right3',0777); 
        @mkdir($directory.'/bottom_left3',0777); 
        @mkdir($directory.'/bottom_right3',0777); 
        
        $path[0] = $directory.'/top_left/'; 
        $path[1] = $directory.'/top_right/'; 
        $path[2] = $directory.'/bottom_left/'; 
        $path[3] = $directory.'/bottom_right/'; 
		$path[4] = $directory.'/top_left1/'; 
        $path[5] = $directory.'/top_right1/'; 
        $path[6] = $directory.'/bottom_left1/'; 
        $path[7] = $directory.'/bottom_right1/'; 
		$path[8] = $directory.'/top_left2/'; 
        $path[9] = $directory.'/top_right2/'; 
        $path[10] = $directory.'/bottom_left2/'; 
        $path[11] = $directory.'/bottom_right2/'; 
		$path[12] = $directory.'/top_left3/'; 
        $path[13] = $directory.'/top_right3/'; 
        $path[14] = $directory.'/bottom_left3/'; 
        $path[15] = $directory.'/bottom_right3/'; 
        
        
        $this->Slicer($path,$height,$width,$temp_image); 
    } 

    function Slicer($path,$height,$width,$tmp_img) 
    { 
        $this->filename = array(); 
        $full_width = $this->image_info[0]; 
        $full_height = $this->image_info[1]; 
        echo"<br>".$width." ".$height; 
        $split_width = round($width/4); 
        $split_height = round($height/4); 
	
        $test = 0;
        for($i=0;$i<16;$i++) 
        { 
            
            $new_img = imagecreatetruecolor($width,$height); 
            $original = imagecreatefromjpeg($tmp_img); 
            imagecopyresized($new_img,$original,0,0,0,0,$width,$height,$full_width,$full_height)or die('Cannot Resize Image'); 
            
            if((($i)%4 == 0))
                { 
				
                    $init_x = 0; 
					$init_y = $split_height*$test;
						$test = $test+1;
                    //$init_y = $split_height*($i+1);
                }
				echo '$init_x'.$init_x.'<br>';
				echo '$init_y'.$init_y.'<br>';
        $this->filename[$i] = $path[$i].time().'.jpg'; 
        $cut_image = imagecreatetruecolor($split_width,$split_height); 
                    
        imagecopyresampled($cut_image,$new_img,0,0,$init_x,$init_y,$split_width,$split_height,$split_width,$split_height)or die('Cannot Resample'); 
            
                imagejpeg($cut_image,$this->filename[$i])or die('Cannot Write Image'); 
                imagedestroy($new_img); 
                imagedestroy($cut_image); 
                $init_x = $init_x+ $split_width; 
        
        } 

    } 
} if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        $blurs = 40;
        $image = imagecreatefromjpeg($target_file);
        for ($i = 0; $i < $blurs; $i++) {
            imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
        }
        imagejpeg($image, $target_file);
        imagedestroy($image);   
    } else {
        //echo "Sorry, there was an error uploading your file. $target_file";
    }
  
?> 