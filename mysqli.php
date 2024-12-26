<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // Update with your password
$dbname = "admission_form"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the table
$sql = "CREATE TABLE student_admission (
    id INT AUTO_INCREMENT PRIMARY KEY,
    village VARCHAR(100) NOT NULL,
    district VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    name_of_people VARCHAR(255) NOT NULL,
    aadhar_no CHAR(12) NOT NULL,
    dob DATE NOT NULL,
    mother_tongue VARCHAR(100) NOT NULL,
    birth_place VARCHAR(100) NOT NULL,
    guardian_name VARCHAR(255) NOT NULL,
    guardian_aadhar_no CHAR(12) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    category ENUM('general', 'st', 'obc') NOT NULL,
    other_languages TEXT,
    medium ENUM('english', 'local-language') NOT NULL,
    guardian_mobile CHAR(10) NOT NULL,
    fathers_occupation VARCHAR(100),
    annual_income VARCHAR(50),
    previous_school VARCHAR(255),
    percentage_previous_class DECIMAL(5,2),
    sts_tc_no VARCHAR(50),
    last_school_dise VARCHAR(50),
    admission_request ENUM('primary', 'high') NOT NULL,
    student_photo_path VARCHAR(255) NOT NULL,
    guardian_signature_path VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table student_admission created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();
?>
