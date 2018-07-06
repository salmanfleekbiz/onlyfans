<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://localhost/post_form");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, array('field1'=>'value1','field2'=>'value2','field3'=>'value3'));//Setting post data as xml
$result = curl_exec($curl);
curl_close($curl);
print($result);
?>