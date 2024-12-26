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



    if (isset($_GET['message'])) {
        $receivedMessage = $_GET['message'];
        
    } 
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
    $email=$receivedMessage;
    $a=1126;
    $b=1223;
    $result1=$email." ".$a;
    $result=$email." ".$b;
    

    // File uploads
    
        

        // First, check if the file was uploaded
      

                // Insert the form data into the database
                $sql = "INSERT INTO `student_admission` (village, district, state, name_of_people, aadhar_no, dob, mother_tongue, birth_place, guardian_name, guardian_aadhar_no, nationality, category, other_languages, medium, guardian_mobile, fathers_occupation, annual_income, previous_school, percentage_previous_class, sts_tc_no, last_school_dise, Gender,email) VALUES ('$village', '$district', '$state', '$name', '$aadhar', '$dob', '$mother_tongue', '$birth_place', '$guardian_name', '$guardian_aadhar', '$nationality', '$category', '$other_languages', '$medium', '$guardian_mobile', '$fathers_occupation', '$annual_income', '$previous_school', '$percentage', '$sts_tc', '$last_school_dise', '$Gender','$email') ";
                $reo=mysqli_query($conn, $sql);
                // Execute the query
                if ($reo) {
                    echo "Record inserted successfully in data base.";
                } else {
                    echo "Error inserting record: " . mysqli_error($conn);
                }
            

    // Close the connection (optional)
    // mysqli_close($conn);
            }


            
           
?>

<!-- c------------------------------------------- -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            background-color: #fff;
        }

        .form-container {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        h1 {
            grid-column: span 2;
            text-align: center;
            margin-bottom: 20px;
        }

        .photo-container {
            grid-column: 2 / 3;
            display: flex;
            justify-content: flex-end;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .photo-container div {
            width: 150px;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            color: #666;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
           overflow: hidden;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        .form-group div {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
        }

        .button-container {
            grid-column: span 2;
            text-align: center;
            margin-top: 20px;
        }

        .p1 {
            height: 3cm;
            border: 2px solid black;
            overflow: hidden;
        }
        .p1 img{
                width: 100%;
                height: 100%;
            
               object-fit: cover;

        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .photo-container div img {
                 /* Ensure the image is visible */
                width: 100%;
                height: 100%;
            
               object-fit: cover;
            }
            @media print {
    body {
        margin: 0;
    }

    .form-container {
        border: none;
        padding: 0;
        width: 100%;
    }

    button {
        display: none;
    }

    }


    </style>
</head>
<body>
    <div class="form-container">
        <h1>SRI SRI GANMODIR ERAL</h1>
        <div>
            <?php
          $rek= mysqli_query ($conn, "SELECT * FROM `student_admission`") ;
          while($rowe = mysqli_fetch_assoc($rek)){
            if($rowe['email']=$email){
                echo "<h3>your application id :" .$rowe['id']."</h3> ";
                break;
            }




          }
            



            ?>
        </div>

        <div class="photo-container">
            <div>
            <?php
            include("cont.php");
        $res = mysqli_query($con, "SELECT * FROM `images`");


        while ($row = mysqli_fetch_assoc($res)) {
            
            if($row['email']==$result1){
            // Display uploaded images
            echo '<img src="images/' . $row['file'] . '" alt="Image">';
            }
         
        }
        ?>
            </div>
        </div>
        <div class="form-group">
            <label>School code:</label>
            <div>AOLS/WB-0016</div>
        </div>

        <div class="form-group">
            <label>Village:</label>
            <div><?php echo $village; ?></div>
        </div>
        <div class="form-group">
            <label>District:</label>
            <div><?php echo $district; ?></div>
        </div>
        <div class="form-group">
            <label>State:</label>
            <div><?php echo $state; ?></div>
        </div>

        <div class="form-group">
            <label>Name of the People:</label>
            <div><?php echo $name; ?></div>
        </div>

        <div class="form-group">
            <label>Aadhar No:</label>
            <div><?php echo $aadhar; ?></div>
        </div>

        <div class="form-group">
            <label>Date of Birth:</label>
            <div><?php echo $dob; ?></div>
        </div>

        <div class="form-group">
            <label>Mother Tongue:</label>
            <div><?php echo $mother_tongue; ?></div>
        </div>

        <div class="form-group">
            <label>Place of Birth:</label>
            <div><?php echo $birth_place; ?></div>
        </div>

        <div class="form-group">
            <label>Guardian's Name:</label>
            <div><?php echo $guardian_name; ?></div>
        </div>

        <div class="form-group">
            <label>Guardian's Aadhar No:</label>
            <div><?php echo $guardian_aadhar; ?></div>
        </div>

        <div class="form-group">
            <label>Nationality:</label>
            <div><?php echo $nationality; ?></div>
        </div>

        <div class="form-group">
            <label>Category:</label>
            <div><?php echo $category; ?></div>
        </div>
        <div class="form-group">
            <label>Gender:</label>
            <div><?php echo $Gender; ?></div>
        </div>

        <div class="form-group">
            <label>Other Languages Spoken:</label>
            <div><?php echo $other_languages; ?></div>
        </div>

        <div class="form-group">
            <label>Medium:</label>
            <div><?php echo $medium; ?></div>
        </div>

        <div class="form-group">
            <label>Guardian Mobile No:</label>
            <div><?php echo $guardian_mobile; ?></div>
        </div>

        <div class="form-group">
            <label>Father's Occupation:</label>
            <div><?php echo $fathers_occupation; ?></div>
        </div>

        <div class="form-group">
            <label>Parent's Annual Income:</label>
            <div><?php echo $annual_income; ?></div>
        </div>

        <div class="form-group">
            <label>Previous School Name:</label>
            <div><?php echo $previous_school; ?></div>
        </div>

        <div class="form-group">
            <label>Percentage of Previous Class Marks:</label>
            <div><?php echo $percentage; ?></div>
        </div>

        <div class="form-group">
            <label>STS or TC No of Student:</label>
            <div><?php echo $sts_tc; ?></div>
        </div>

        <div class="form-group">
            <label>Last School DISE No:</label>
            <div><?php echo $last_school_dise; ?></div>
        </div>

        <div class="form-group">
            <label>Requesting Admission For:</label>
            <div><?php echo $admission_request; ?></div>
        </div>

        <div class="p1">
            <div>
            <?php
             include("cont.php");
             $res = mysqli_query($con, "SELECT * FROM `images`");
     
            while ($row = mysqli_fetch_assoc($res)) {
            
            if($row['email']==$result){
            // Display uploaded images
            echo '<img src="images/' . $row['file'] . '" alt="Image">';
            }
         
        }
        ?>
        </div>
        </div>
        <div class="p1">
            <div>Guardian's Signature</div>
        </div>

        <div class="button-container">
            <button onclick="window.print()">Print</button>
        </div>
    </div>
</body>
</html>
