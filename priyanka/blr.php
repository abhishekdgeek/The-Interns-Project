<?php

//header('Content-Type: image/jpeg');

$blurs = 100;
$image = imagecreatefromjpeg('C:\wamp\www\hi\6170-489.jpg');
for ($i = 0; $i < $blurs; $i++) {
    imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
}
imagejpeg($image, 'C:\wamp\www\hi\6170-489.jpg');
imagedestroy($image);
?>