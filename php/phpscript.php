<?php
$pattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
if (preg_match($pattern, $_REQUEST['name']) === 1){
    $data =$_REQUEST['name'];
}

$pattern = "/^0[1-9]([-. ]?[0-9]{2}){4}$/";
if (preg_match($pattern, $_REQUEST['number']) === 1){
    $data .="  ".$_REQUEST['number'];
}


$pattern = "/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/";
if (preg_match($pattern, $_REQUEST['email']) === 1){
    $data .="  ".$_REQUEST['email'];
}


$pattern = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžæÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
if (preg_match($pattern, $_REQUEST['message']) === 1){
    $data .="  ".$_REQUEST['message'] ."\n";
}

print_r($data);

/*
$data  = $_REQUEST['name'];
$data .="  ".$_REQUEST['number'];
$data .=" ".$_REQUEST['email'];
$data .=" ".$_REQUEST['message']."\n";
*/

echo "your data" .$data;
file_put_contents('contactdata'+$_REQUEST['name']+'.txt', $data, FILE_APPEND);
?>