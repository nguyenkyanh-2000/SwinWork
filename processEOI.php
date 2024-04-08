<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process EOI</title>
    <link rel="stylesheet" href="./styles/style.css" />
</head>

<body class="apply-page">

    <?php include 'navbar.inc'; ?>

    <header class="header">
    <div class="header__heading-container">
    <h1 class="header__heading">Application Confirmation</h1>
    </div>
    </header>

     <?php include 'navbar-solid.inc'; ?>
    <?php

    require_once ("settings.php");

    function clean_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Server-side validation
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize form data
        $jobReferenceNumber = clean_input($_POST['jpre']);
        $firstName = clean_input($_POST['fname']);
        $lastName = clean_input($_POST['lname']);
        if (empty($_POST['bday'])) {
            $errors[] = "Birthday field is empty";
        } else {
            $birthday = date('Y-m-d', strtotime($_POST['bday']));
        }
        $gender = $_POST['gender'];
        $streetAddress = clean_input($_POST['st-address']);
        $suburbTown = clean_input($_POST['su-to']);
        $state = clean_input($_POST['states']);
        $postcode = clean_input($_POST['postcode']);
        $emailAddress = clean_input($_POST['email']);
        $phoneNumber = clean_input($_POST['phone']);
        if(isset($_POST['skills'])) {
            $selectedSkills = $_POST['skills'];
            $selectedSkills = implode(", ", $selectedSkills);
        }
        $otherSkills = isset($_POST['other_skills']) ? $_POST['other_skills'] : "None";
        $status = 'New';

      

        // Validate job reference number
        if (!preg_match("/^[a-zA-Z0-9]{5}$/", $jobReferenceNumber)) {
            $errors[] = "Job reference number must be exactly 5 alphanumeric characters.";
        }

        // Validate first name
        if (!preg_match("/^[a-zA-Z]{1,20}$/", $firstName)) {
            $errors[] = "First name must be max 20 alphabetic characters.";
        }

        // Validate last name
        if (!preg_match("/^[a-zA-Z]{1,20}$/", $lastName)) {
            $errors[] = "Last name must be max 20 alphabetic characters.";
        }

        // Validate street address
        if (strlen($streetAddress) > 40) {
            $errors[] = "Street address must be max 40 characters.";
        }

        // Validate suburb/town
        if (strlen($suburbTown) > 40) {
            $errors[] = "Suburb/town must be max 40 characters.";
        }

        // Validate state
        $validStates = array("VIC", "NSW", "QLD", "NT", "WA", "SA", "TAS", "ACT");
        if (!in_array($state, $validStates)) {
            $errors[] = "Invalid state.";
        }


        // Validate gender
        $validGenders = array("Male", "Female");
        if (!in_array($gender, $validGenders)) {
            $errors[] = "Invalid gender.";
        }

        // Validate birthday


        $today = date('Y-m-d');
        $minDate = '1900-01-01';
    
        if ($birthday < $minDate || $birthday > $today) {
            $errors[] = "Invalid birthday";
        } 

        // Validate email address format
        if (!filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email address format.";
        }

        // Validate phone number
        $phoneNumber = preg_replace("/[^0-9]/", "", $phoneNumber); // Remove non-numeric characters
        if (strlen($phoneNumber) < 8 || strlen($phoneNumber) > 12) {
            $errors[] = "Phone number must be between 8 and 12 digits.";
        }

        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo "<p class=\"confirmation-message\">Error: $error</p>";
            }
        } else {

            // Create connection
            $conn = new mysqli($host, $user, $pwd, $sql_db);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Sanitize form data before inserting into database
            $jobReferenceNumber = mysqli_real_escape_string($conn, $jobReferenceNumber);
            $firstName = mysqli_real_escape_string($conn, $firstName);
            $lastName = mysqli_real_escape_string($conn, $lastName);
    
            // Insert data into the database
            $sql = "INSERT INTO eoi (job_number, first_name, last_name, birthday, gender, street_address, suburb_town, states, postcode, email, phone, skills, other_skills, status) 
        VALUES ('$jobReferenceNumber', '$firstName', '$lastName', '$birthday', '$gender', '$streetAddress', '$suburbTown', '$state', '$postcode', '$emailAddress', '$phoneNumber',  '$selectedSkills', '$otherSkills', '$status')";



            if ($conn->query($sql) === TRUE) {
                $last_id = $conn->insert_id;
                echo "<p class=\"confirmation-message\">Expression of Interest submitted successfully. Your EOInumber is: $last_id.</p>";

            } else {
                echo "<p class=\"confirmation-message\">$sql</p>";
                echo "<p class=\"confirmation-message\">$conn->error</p>";
            }

            $conn->close();
        }
    } else {
        // If the form is not submitted, redirect the user to the form page
        header("Location: apply.php");
        exit();
    }
    ?>

    <div class="divider-sm"></div>
    <?php include 'footer.inc'; ?>
    </div>
</body>

</html>