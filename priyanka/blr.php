<?php

//header('Content-Type: image/jpeg');

$blurs = 100;
$image = imagecreatefromjpeg('uploads/IMG_20150603_170127.jpg');
for ($i = 0; $i < $blurs; $i++) {
    imagefilter($image, IMG_FILTER_GAUSSIAN_BLUR);
}
imagejpeg($image, 'uploads/IMG_20150603_170127.jpg');
imagedestroy($image);
?>