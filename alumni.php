<!-- Note: Please replace the placeholders your_username, your_password, 
and your_database_name with your actual database credentials. Also, make sure 
you create a database table named alumni with columns name, branch, year, contact, email, address, and company, job. -->


<?php
// Get the form data
$name = $_POST['name'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];
$company = $_POST['company'];
$job = $_POST['job'];

// Validate the data
if(empty($name) || empty($branch) || empty($year) || empty($contact) || empty($email) || empty($address) || empty($company || empty($job))) {
    echo "Please fill in all fields";
} else {
    // Connect to the database
    $servername = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "your_database_name";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the data
    $stmt = $conn->prepare("INSERT INTO alumni (name, branch, year, contact, email, address, company, job) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $branch, $year, $contact, $email, $address, $company, $job);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data submitted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
