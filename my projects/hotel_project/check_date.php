<?php 
$check_in = '2018-11-9';
$check_out = '2018-11-10';
//-------------------get the days from check in and check out-----------------------------------
//---------------get the seconds between check in and check out.--------------------------
$check_in_date = strtotime($check_in);
$check_out_date = strtotime($check_out);
$seconds =  $check_out_date - $check_in_date;
//echo $datediff;
//-------------------------------------------------
//convert seconds into days-----------------------
function convert_seconds($seconds) {
  $dt1 = new DateTime("@0");
  $dt2 = new DateTime("@$seconds");
  return $dt1->diff($dt2)->format('%a days');
  }
echo "<br><br>";  
echo convert_seconds($seconds)."\n";

//----------------the end of get days from check in and check out ------------------------------------
 ?>