<?php
include "db.php";

// DELETE FUNCTION
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM students WHERE id=$id");
    header("Location: view_students.php?msg=Student Deleted Successfully");
    exit();
}

$sql = "SELECT * FROM students ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function confirmDelete(id) {
            if(confirm("Are you sure you want to delete this student?")) {
                window.location.href = "view_students.php?delete=" + id;
            }
        }
    </script>
</head>
<body>

<div class="container">
    <h2>Student Records</h2>

    <?php if(isset($_GET['msg'])) { ?>
        <div class="message"><?php echo $_GET['msg']; ?></div>
    <?php } ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Section</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['age']; ?></td>
            <td><?php echo $row['section']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td>
                <a class="btn edit" href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a>
                <button class="btn delete" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</button>
            </td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <a class="btn add" href="add_student.php">+ Add New Student</a>
</div>

</body>
</html>