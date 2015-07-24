
<?php
//code for blurred image..
/* input is original image..it will first blur the image and and then slice the image and store the sliced parts in the folder blurred images */
class JPEGSlicer1 
{ 
    function JPEGSlicer1($directory, $temp_image1,$selection,$t,$resize) 
    { 
        $temp_image1 = $_FILES['image']['tmp_name']; 
        $imageFileType = pathinfo($temp_image1,PATHINFO_EXTENSION);
        $blurs = 80;
        $image = imagecreatefromjpeg($temp_image1);
        for ($i = 0; $i < $blurs; $i++)
		{
            imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
        }
        imagejpeg($image, $temp_image1);
       // imagedestroy($image);   

		
        $this->image_info = getimagesize($temp_image1); 
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
		//echo $dir1;
		//echo $t;
        @mkdir($directory,0777); 
		@mkdir("$directory/$t",0777);
        @mkdir("$directory/$t".'/blurred_images',0777); 
		
		for($j=0;$j<400;$j++)
		{
        $path[$j] = "$directory/$t".'/blurred_images/'; 
		}
        $this->Slicer($path,$height,$width,$temp_image1); 
        
	}

    function Slicer($path,$height,$width,$tmp_img1) 
    { 
        $this->filename = array(); 
        $full_width = $this->image_info[0]; 
        $full_height = $this->image_info[1]; 
       // echo"<br>".$width." ".$height; 
        $split_width = round($width/20); 
        $split_height = round($height/20); 
	
        $test = 0;
        for($i=0;$i<400;$i++) 
        { 
            
            $new_img1 = imagecreatetruecolor($width,$height); 
            $blur = imagecreatefromjpeg($tmp_img1); 
            imagecopyresized($new_img1,$blur,0,0,0,0,$width,$height,$full_width,$full_height)or die('Cannot Resize Image'); 
            
            if((($i)%20 == 0))
                { 
				
                    $init_x = 0; 
					$init_y = $split_height*$test;
						$test = $test+1;
                    //$init_y = $split_height*($i+1);
                }
				//echo '$init_x'.$init_x.'<br>';
				//echo '$init_y'.$init_y.'<br>';
        $this->filename[$i] = $path[$i].time().md5(rand(4567,976543)).'.jpg'; 
        $cut_image1 = imagecreatetruecolor($split_width,$split_height); 
                    
        imagecopyresampled($cut_image1,$new_img1,0,0,$init_x,$init_y,$split_width,$split_height,$split_width,$split_height)or die('Cannot Resample'); 
            
                imagejpeg($cut_image1,$this->filename[$i])or die('Cannot Write Image'); 
                imagedestroy($new_img1); 
                imagedestroy($cut_image1); 
                $init_x = $init_x+ $split_width; 
        } 

    } 
	
}

?>
