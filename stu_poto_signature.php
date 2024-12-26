<?php

if (isset($_GET['message'])) {
    $receivedMessage = $_GET['message'];
    echo "your email: " . htmlspecialchars($receivedMessage);
} else {
    echo "No message received.";
}





include("cont.php");

if (isset($_POST['submit'])) {
    $file_name = $_FILES['image']['name'];
    $temp_name = $_FILES['image']['tmp_name'];
    $email=$receivedMessage;
    $folder = 'images/' . $file_name;
    $string2="1126";
    $result = $email . " " . $string2;


    if (filesize($folder) < 50 * 1024) {
        // File is smaller than 50KB
        echo "<p class='success'>The file is under 50KB.</p>";  // First, check if the file was uploaded
        if (move_uploaded_file($temp_name, $folder)) {
        // Now check the file size after it's moved
        
            
            // Insert the file name into the database
            $query = mysqli_query($con, "INSERT INTO images(file,email) VALUES('$file_name','$result')");
            echo "<h1 class='success'>Upload Successful</h1>";
            
           echo "<script> window.location.href = 'form_for _admisan.php?message=$receivedMessage'</script>";


        } else {
            echo "<p class='error'>Error uploading the file.</p>";
        }
    }
    else {
           // File is 50KB or larger
           echo "<p class='error'>The file is 50KB or larger.</p>";
       }
}
if (isset($_POST['submit'])) {
    $file_name1 = $_FILES['image1']['name'];
    $temp_name1 = $_FILES['image1']['tmp_name'];
    $email=$receivedMessage;
    $string2="1223";
    $result2 = $email . " " . $string2;
    $folder = 'images/' . $file_name1;

    // First, check if the file was uploaded
    if (filesize($folder) < 50 * 1024) {
        // File is smaller than 50KB
        echo "<p class='success'>The file is under 50KB.</p>";
    if (move_uploaded_file($temp_name1, $folder)) {
        // Now check the file size after it's moved
            
            // Insert the file name into the database
            $query = mysqli_query($con, "INSERT INTO images(file,email) VALUES('$file_name1','$result2')");
            echo "<h1 class='success'>Upload Successful</h1>";
        } else {
            echo "<p class='error'>Error uploading the file.</p>";
        }
    } else {
        // File is 50KB or larger
        echo "<p class='error'>The file is 50KB or larger.</p>";
    }
}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        input[type="file"] {
            margin-bottom: 15px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .success {
            color: #4CAF50;
            font-weight: bold;
        }
        .error {
            color: #e74c3c;
            font-weight: bold;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .gallery img {
            width: 150px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1>Image Upload</h1>
    <form method="post" enctype="multipart/form-data">
        <label for="Student photo"><strong>student photo in 50KB</strong></label><br><br>
        <input type="file" name="image" required>
        <div></div>
        <label for="Guardian signature"><strong >signature in 50KB</strong></label><br><br>
        <input type="file" name="image1" required><br>
        
        <button type="submit" name="submit">Submit</button>
    </form>

    <div class="gallery">
        <?php
        $res = mysqli_query($con, "SELECT * FROM `images`");
        if((isset($_POST['submit']))){
        while ($row = mysqli_fetch_assoc($res)) {
            // Display uploaded images
            if($row['email']==$result){
            echo '<img src="images/' . $row['file'] . '" alt="Image">';
            }
            if($row['email']==$result2){
                echo '<img src="images/' . $row['file'] . '" alt="Image">';  
            }
        }
    }
        ?>
    </div>
</body>
</html>
