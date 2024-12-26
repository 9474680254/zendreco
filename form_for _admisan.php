<?php
if (isset($_GET['message'])) {
    $receivedMessage = $_GET['message'];
    
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: rgba(0, 0, 0, 0.548);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgb(47, 6, 231);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            text-transform: uppercase;
        }
        
        .form-group5 input,
        .form-group5 select,
        .form-group5 textarea{
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
        
        }

        .form-group input[type="file"] {
            text-transform: none;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group .small-text {
            font-size: 12px;
            color: #666;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1 style="color: #fff;">Student Admission Form</h1>
    <?php echo"<form action='23data_student.php?message=$receivedMessage' method='POST' enctype='multipart/form-data' >";?>
        <div class="form-group">
            <label for="village">Village:</label>
            <input type="text" id="village" name="village" required>
        </div>
        <div class="form-group">
            <label for="district">District:</label>
            <input type="text" id="district" name="district" required>
        </div>
        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" id="state" name="state" required>
        </div>
        <div class="form-group">
            <label for="name">Name of the Student:</label>
            <input type="text" id="name" name="name" required>
        </div>
       
        <div class="form-group">
            <label for="aadhar">Aadhar No:</label>
            <input type="text" id="aadhar" name="aadhar" maxlength="12" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="mother-tongue">Mother Tongue:</label>
            <input type="text" id="mother-tongue" name="mother-tongue" required>
        </div>
        <div class="form-group">
            <label for="birth-place">Place of Birth:</label>
            <input type="text" id="birth-place" name="birth-place" required>
        </div>
        <div class="form-group">
            <label for="guardian-name">Guardian's Name:</label>
            <input type="text" id="guardian-name" name="guardian-name" required>
        </div>
        <div class="form-group">
            <label for="guardian-aadhar">Guardian's Aadhar No:</label>
            <input type="text" id="guardian-aadhar" name="guardian-aadhar" maxlength="12" required>
        </div>
        <div class="form-group">
            <label for="nationality">Nationality:</label>
            <input type="text" id="nationality" name="nationality" required>
        </div>
        <div class="form-group">
            <label for="Gender">Gender:</label>
            <select id="Gender" name="Gender" required>
                <option value="">Select</option>
                <option value="Mail">Mail</option>
                <option value="Female">Female</option>
               
            </select>
        <div class="form-group">
            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="">Select</option>
                <option value="general">General</option>
                <option value="st">ST</option>
                <option value="obc">OBC</option>
            </select>
        </div>
        <div class="form-group">
            <label for="languages">Other Languages Spoken:</label>
            <textarea id="languages" name="languages" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="medium">Medium:</label>
            <select id="medium" name="medium" required>
                <option value="">Select</option>
                <option value="english">English</option>
                <option value="local-language">Local Language</option>
            </select>
        </div>
        <div class="form-group">
            <label for="guardian-mobile">Guardian Mobile No:</label>
            <input type="text" id="guardian-mobile" name="guardian-mobile" maxlength="10" required>
        </div>
        <div class="form-group">
            <label for="fathers-occupation">Father's Occupation:</label>
            <input type="text" id="fathers-occupation" name="fathers-occupation">
        </div>
        <div class="form-group">
            <label for="annual-income">Parent's Annual Income:</label>
            <input type="text" id="annual-income" name="annual-income">
        </div>
        <div class="form-group">
            <label for="previous-school">Previous School Name:</label>
            <input type="text" id="previous-school" name="previous-school">
        </div>
        <div class="form-group">
            <label for="percentage">Percentage of Previous Class Mark:</label>
            <input type="text" id="percentage" name="percentage">
        </div>
        <div class="form-group">
            <label for="sts-tc">STS or TC No of Student:</label>
            <input type="text" id="sts-tc" name="sts-tc">
        </div>
        <div class="form-group">
            <label for="last-school-dise">Last School DISE No:</label>
            <input type="text" id="last-school-dise" name="last-school-dise">
        </div>
     
        <div class="form-group">
            <label for="admission-request">Requesting Admission For:</label>
            <select id="admission-request" name="admission-request" required>
                <option value="">Select</option>
                <option value="primary">Primary School</option>
                <option value="high">High School</option>
            </select>
        </div>
      
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>


