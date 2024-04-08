
<!DOCTYPE html>
<html lang="en">

<!--Head-->
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles/style.css?v=<?php echo time(); ?>">
<title>HR Database Manager | SwinWORK</title>
</head>

<!--Body-->
<body>
<br>
<h1 class="heading_DB">Database Manager</h1><br>
<br>

<!--Search bar-->
<form method="POST" action="search.php">
    <label for="query_text">Enter job number or name:</label>
    <input type="text" type="hidden" name="query_text" required>
    <input type="submit" value="Search" class='submitbutton button1' name="search_button"> 
    <input type="submit" value="Delete" class='submitbutton button1' name="delete_button">
</form>
<div class="divider-sm"></div>
<br>
<!--PHP-->
<?php
session_start();
//Check if user has login
if(!isset($_SESSION['login_user'])){
   header("Location:login.php");
}
//expire after 15 minutes activity and go back to login page
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    unset($_SESSION['login_user']); 
}
$_SESSION['LAST_ACTIVITY'] = time();


//TABLE PHP
require_once ("settings.php");

// Create connection
$conn =  @mysqli_connect($host, $user, $pwd, $sql_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}   

//read the database
$sql = "SELECT EOINumber, job_number, first_name, last_name, gender, birthday, street_address, suburb_town, states, postcode, email, phone, skills, other_skills, status FROM eoi";
$result = mysqli_query($conn, $sql);

//create table list all EOI
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
    $ctr = 0; // create a loop so each row has each different id 
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" ."<input type='number' id='id".$ctr."' name ='id_".$ctr."' value ='" .$row['EOINumber']."'></td>";
        if ($row['job_number'] == 'ABC12'){
            echo "<td>" ."<input type='text' id='jnumber".$ctr."' name ='job_number_".$ctr."' value ='Frontend Developer'></td>";
        } else if ($row['job_number'] == 'XYZ34'){
            echo "<td>" ."<input type='text' id='jnumber".$ctr."' name ='job_number_".$ctr."' value ='Data Analyst'></td>";
        } else if ($row['job_number'] == 'AI123'){
            echo "<td>" ."<input type='text' id='jnumber".$ctr."' name ='job_number_".$ctr."' value =' AI Engineer'></td>";
        } else{
            echo "<td>" ."<input type='text' id='jnumber".$ctr."' name ='job_number_".$ctr."' value ='Invalid'></td>";
        }
        echo "<td>" ."<input type='text' id='fname".$ctr."' name ='first_name_".$ctr."' value ='" .$row['first_name'] ."'></td>";
        echo "<td>" ."<input type='text' id='lname".$ctr."' name ='last_name_".$ctr."' value ='" .$row['last_name'] ."'></td>";
        echo "<td>" ."<input type='date' id='birth".$ctr."' name ='birthday_".$ctr."' value ='" .$row['birthday'] ."'></td>";
        echo "<td>" ."<input type='text' id='gender".$ctr."' name ='gender_".$ctr."' value ='" .$row['gender'] ."'></td>";
        echo "<td>" ."<input type='text' id='street".$ctr."' name ='street_address_".$ctr."' value ='" .$row['street_address'] ."'></td>";
        echo "<td>" ."<input type='text' id='suburb/town".$ctr."' name ='suburb_town_".$ctr."' value ='" .$row['suburb_town'] ."'></td>";
        echo "<td>" ."<input type='text' id='state".$ctr."' name ='states_".$ctr."' value ='" .$row['states'] ."'></td>";
        echo "<td>" ."<input type='number' id='pcode".$ctr."' name ='postcode_".$ctr."' value ='" .$row['postcode'] ."'></td>";
        echo "<td>" ."<input type='email' id='mail".$ctr."' name ='email_".$ctr."' value ='" .$row['email'] ."'></td>";
        echo "<td>" ."<input type='tel' id='phonenum".$ctr."' name ='phone_".$ctr."' value ='" .$row['phone'] ."'></td>";
        echo "<td>" ."<input type='text' id='skill".$ctr."' name ='skills_".$ctr."' value ='" .$row['skills'] ."'></td>";
        echo "<td>" ."<input type='text' id='oskill".$ctr."' name ='other_skills_".$ctr."' value ='" .$row['other_skills'] ."'></td>";
        echo "<td>" ."<input type='text' id='status".$ctr."' name ='status_".$ctr."' value ='" .$row['status'] ."'></td>";
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
    <input type="submit" class='submitbutton button1' value=" Home">
</form>
<br><br><br>
<div class="divider-sm"></div>
<?php include 'footer.inc'; ?>
</body>
</html>
<!--
(●っゝω・)っ～☆HELLO☆
-->
