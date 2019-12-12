<?php

$imagen= "DJI_0001.JPG";
$imagen= "IMG_20170101_010219.jpg";

echo "$imagen:<br />\n";
$exif = exif_read_data("img/$imagen", 'IFD0');
echo $exif===false ? "No header data found.<br />\n" : "Image contains headers<br />\n";


$exif = exif_read_data("img/$imagen", 0, true);
echo "$imagen:<br />\n";
foreach ($exif as $key => $section) {
    foreach ($section as $name => $val) {
    	if(is_array($val)){
    		print (nl2br(print_r($val,1)));
    	}else{
        	echo "$key.$name: $val<br />\n";
    	}
    }
}
?>