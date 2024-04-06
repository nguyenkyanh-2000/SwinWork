<?php
require_once ("settings.php");

// Create connection
$conn =  @mysqli_connect($host, $user, $pwd, $sql_db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());    
}
$sql1 = "SELECT EOINumber FROM eoi";
$result = mysqli_query($conn, $sql1);
$ctr = 0;
while($row = mysqli_fetch_assoc($result)) {
  if ($_POST["job_number_".$ctr.""] == 'Frontend Developer' or $_POST["job_number_".$ctr.""] == 'ABC12' ){
    $jobnums = 'ABC12';
  }else if ($_POST["job_number_".$ctr.""] == 'Data Analyst' or $_POST["job_number_".$ctr.""] == 'XYZ34' ){
    $jobnums = 'XYZ34';
  }else if ($_POST["job_number_".$ctr.""] == 'AI Engineer' or $_POST["job_number_".$ctr.""] == 'AI123' ){
    $jobnums = 'AI123';
  }else{
    $jobnums = 'Invalid';
  }
  $sql="UPDATE eoi SET job_number='".$jobnums."'
  , first_name='".$_POST["first_name_".$ctr.""]."'
  , last_name='".$_POST["last_name_".$ctr.""]."'
  , birthday='".$_POST["birthday_".$ctr.""]."'
  , gender='".$_POST["gender_".$ctr.""]."' 
  , street_address='".$_POST["street_address_".$ctr.""]."'
  , suburb_town='".$_POST["suburb_town_".$ctr.""]."'
  , states='".$_POST["states_".$ctr.""]."'
  , postcode='".$_POST["postcode_".$ctr.""]."'
  , email='".$_POST["email_".$ctr.""]."'
  , phone='".$_POST["phone_".$ctr.""]."'
  , skills='".$_POST["skills_".$ctr.""]."'
  , other_skills='".$_POST["other_skills_".$ctr.""]."'
  , status='".$_POST["status_".$ctr.""]."'

  WHERE EOINumber='".$_POST["id_".$ctr.""]."'";

if (mysqli_query($conn, $sql)) {
  header("Location:success.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
$ctr++;
}
mysqli_close($conn);
//(●っゝω・)っ～☆HELLO☆
?>
