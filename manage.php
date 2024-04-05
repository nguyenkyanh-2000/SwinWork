<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="table.css?v=<?php echo time(); ?>">
<title>HR Database Manager | SwinWORK</title>
</head>
<body>
<br>
<h1 class="heading_DB">Database Manager</h1><br>
<?php
require_once ("settings.php");
// Create connection
$conn =  @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}   

$sql = "SELECT EOINumber, job_number, first_name, last_name, gender, birthday, street_address, suburb_town, states, postcode, email, phone, skills, other_skills, status FROM eoi";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<form action='edit.php' method='POST' class='inline'>";
    echo "<table id=\"customers\">";
    echo "<tr>"
    ."<th scope=\"col\">ID</th>"    
    ."<th scope=\"col\">Job number</th>" 
    ."<th scope=\"col\">First name</th>" 
    ."<th scope=\"col\">Last name</th>" 
    ."<th scope=\"col\">Date of birth</th>" 
    ."<th scope=\"col\">Gender</th>" 
    ."<th scope=\"col\">Street address</th>" 
    ."<th scope=\"col\">Suburb/town</th>" 
    ."<th scope=\"col\">State</th>" 
    ."<th scope=\"col\">Postcode</th>" 
    ."<th scope=\"col\">Email</th>" 
    ."<th scope=\"col\">Phone</th>" 
    ."<th scope=\"col\">Skills</th>" 
    ."<th scope=\"col\">Other skills</th>" 
    ."<th scope=\"col\">Status</th>" 
    ."</tr>";
    $ctr = 0;
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" ."<input type='number' id='id' name ='id_".$ctr."' value ='" .$row['EOINumber'] ."' </td>";
        echo "<td>" ."<input type='number' id='jnumber' name ='job_number_".$ctr."' value ='" .$row['job_number'] ."' </td>";
        echo "<td>" ."<input type='text' id='fname' name ='first_name_".$ctr."' value ='" .$row['first_name'] ."' </td>";
        echo "<td>" ."<input type='text' id='lname' name ='last_name_".$ctr."' value ='" .$row['last_name'] ."' </td>";
        echo "<td>" ."<input type='date' id='birth' name ='birthday_".$ctr."' value ='" .$row['birthday'] ."' </td>";
        echo "<td>" ."<input type='text' id='gender' name ='gender_".$ctr."' value ='" .$row['gender'] ."' </td>";
        echo "<td>" ."<input type='text' id='street' name ='street_address_".$ctr."' value ='" .$row['street_address'] ."' </td>";
        echo "<td>" ."<input type='text' id='suburb/town' name ='suburb_town_".$ctr."' value ='" .$row['suburb_town'] ."' </td>";
        echo "<td>" ."<input type='text' id='state' name ='states_".$ctr."' value ='" .$row['states'] ."' </td>";
        echo "<td>" ."<input type='number' id='pcode' name ='postcode_".$ctr."' value ='" .$row['postcode'] ."' </td>";
        echo "<td>" ."<input type='email' id='mail' name ='email_".$ctr."' value ='" .$row['email'] ."' </td>";
        echo "<td>" ."<input type='phone' id='phonenum' name ='phone_".$ctr."' value ='" .$row['phone'] ."' </td>";
        echo "<td>" ."<input type='text' id='skill' name ='skills_".$ctr."' value ='" .$row['skills'] ."' </td>";
        echo "<td>" ."<input type='text' id='oskill' name ='other_skills_".$ctr."' value ='" .$row['other_skills'] ."' </td>";
        echo "<td>" ."<input type='text' id='status' name ='status_".$ctr."' value ='" .$row['status'] ."' </td>";
        $ctr++;
    }
    echo "</table>";
    echo "<input type='submit' class='submitbutton button1' name='send' value='Update'>";
    echo "</form>";
} else {
    echo "0 results";   
}

mysqli_close($conn);
?>
<form action="about.php" class="inline">
    <input type="submit" class='submitbutton button1' value=" Home" />
</form>
<br><br><br>
<div class="divider-sm"></div>
<?php include 'footer.inc'; ?>
</body>
</html>
<!--
(●っゝω・)っ～☆HELLO☆
-->
