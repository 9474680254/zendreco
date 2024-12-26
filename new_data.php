<?php
// Database credentials
$host = 'localhost';
$db = 'admission_form';
$user = 'root';
$password = '';

// Create a database connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Validate and collect POST data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collecting form data
    $village = $_POST['village'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $name = $_POST['name'];
    $aadhar = $_POST['aadhar'];
    $dob = $_POST['dob'];
    $mother_tongue = $_POST['mother-tongue'];
    $birth_place = $_POST['birth-place'];
    $guardian_name = $_POST['guardian-name'];
    $guardian_aadhar = $_POST['guardian-aadhar'];
    $nationality = $_POST['nationality'];
    $category = $_POST['category'];
    $other_languages = $_POST['languages'];
    $medium = $_POST['medium'];
    $guardian_mobile = $_POST['guardian-mobile'];
    $fathers_occupation = $_POST['fathers-occupation'];
    $annual_income = $_POST['annual-income'];
    $previous_school = $_POST['previous-school'];
    $percentage = $_POST['percentage'];
    $sts_tc = $_POST['sts-tc'];
    $admission_request = $_POST['admission-request'];
    $last_school_dise = $_POST['last-school-dise'];
    $Gender=$_POST['Gender'];
    $email=$_POST['email'];
    $a=1126;
    $b=1223;
    $result1=$email." ".$a;
    $result=$email." ".$b;
    


      

                
                $sql = "INSERT INTO `student_admission` (village, district, state, name_of_people, aadhar_no, dob, mother_tongue, birth_place, guardian_name, guardian_aadhar_no, nationality, category, other_languages, medium, guardian_mobile, fathers_occupation, annual_income, previous_school, percentage_previous_class, sts_tc_no, last_school_dise, Gender,email) VALUES ('$village', '$district', '$state', '$name', '$aadhar', '$dob', '$mother_tongue', '$birth_place', '$guardian_name', '$guardian_aadhar', '$nationality', '$category', '$other_languages', '$medium', '$guardian_mobile', '$fathers_occupation', '$annual_income', '$previous_school', '$percentage', '$sts_tc', '$last_school_dise', '$Gender','$email') ";
                $reo=mysqli_query($conn, $sql);
            
                if ($reo) {
                    echo "Record inserted successfully in data base.";
                } else {
                    echo "Error inserting record: " . mysqli_error($conn);
                }
            

    mysqli_close($conn);
            }


            
           
?>