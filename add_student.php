<?php
include "db.php";

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $section = $_POST['section'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO students (name, age, section, email, phone, address)
            VALUES ('$name', '$age', '$section', '$email', '$phone', '$address')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Student Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Student Details</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="number" name="age" placeholder="Age" required><br><br>
    <input type="text" name="section" placeholder="Section" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="tel" name="phone" placeholder="Phone Number" required><br><br>
    <input type="text" name="address" placeholder="Address" required><br><br>
    
    <button type="submit" name="submit">Add Student</button>
</form>

<br>
<a href="view_students.php">View Students</a>

</body>
</html>