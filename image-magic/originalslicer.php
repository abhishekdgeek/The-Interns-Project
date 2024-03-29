<?php 
//code for original image..
/* input is original image..it will slice the image and store the sliced parts in the folder original images */
class JPEGSlicer 
{ 
    function JPEGSlicer($directory, $temp_image,$selection,$t,$resize) 
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
		
         //$dir1 = $_GET['t'] ;
		 //echo $t;
    
        @mkdir($directory,0777); 
		@mkdir("$directory/$t",0777); 
        @mkdir("$directory/$t".'/original_images',0777); 
		//$divisons=$_POST['parts'];
		for($j=0;$j<400;$j++)
		{
        $path[$j] = "$directory/$t".'/original_images/'; 
		}
        $this->Slicer($path,$height,$width,$temp_image); 
        
	}

    function Slicer($path,$height,$width,$tmp_img) 
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
            
            $new_img = imagecreatetruecolor($width,$height); 
            $original = imagecreatefromjpeg($tmp_img); 
            imagecopyresized($new_img,$original,0,0,0,0,$width,$height,$full_width,$full_height)or die('Cannot Resize Image'); 
            
            if((($i)%20 == 0))
                { 
				
                    $init_x = 0; 
					$init_y = $split_height*$test;
						$test = $test+1;
                    //$init_y = $split_height*($i+1);
                }
			//	echo '$init_x'.$init_x.'<br>';
				//echo '$init_y'.$init_y.'<br>';
        $this->filename[$i] = $path[$i].time().md5(rand(4567,976543)).'.jpg'; 
        $cut_image = imagecreatetruecolor($split_width,$split_height); 
                    
        imagecopyresampled($cut_image,$new_img,0,0,$init_x,$init_y,$split_width,$split_height,$split_width,$split_height)or die('Cannot Resample'); 
            
                imagejpeg($cut_image,$this->filename[$i])or die('Cannot Write Image'); 
                imagedestroy($new_img); 
                imagedestroy($cut_image); 
                $init_x = $init_x+ $split_width; 
        } 

    } 
	
} 




?> 