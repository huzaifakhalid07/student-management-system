<?php
include "db.php";

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])) {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $section = $_POST['section'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    mysqli_query($conn, "UPDATE students SET 
        name='$name',
        age='$age',
        section='$section',
        email='$email',
        phone='$phone'
        WHERE id=$id");

    header("Location: view_students.php?msg=Student Updated Successfully");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Edit Student</h2>

    <form method="POST">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <input type="number" name="age" value="<?php echo $row['age']; ?>" required>
        <input type="text" name="section" value="<?php echo $row['section']; ?>" required>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="tel" name="phone" value="<?php echo $row['phone']; ?>" required>

        <button type="submit" name="update">Update Student</button>
    </form>

    <br>
    <a class="btn back" href="view_students.php">← Back</a>
</div>

</body>
</html>