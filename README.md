# 🎓 Student Management System (PHP + MySQL)

A simple and beautiful Student Management System built using **PHP, MySQL, HTML, CSS, and JavaScript**.

This project allows you to:

- ✅ Add Students
- ✅ View Students
- ✅ Edit Student Details
- ✅ Delete Students (with confirmation alert)
- ✅ Display success messages via URL
- ✅ Modern and Attractive UI

---

## 🚀 Features

- Add new student records
- View all students in a styled table
- Edit existing student information
- Delete students with confirmation popup
- Success messages after add, update, delete
- Clean and responsive design
- Organized project structure

---

## 🛠️ Technologies Used

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- XAMPP / WAMP / Localhost

---

## 📂 Project Structure


student-management/
│
├── db.php
├── add_student.php
├── edit_student.php
├── view_students.php
├── style.css
└── README.md


---

## 🗄️ Database Setup

### 1️⃣ Create Database

Open **phpMyAdmin** and run:

```sql
CREATE DATABASE school_db;
USE school_db;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    section VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    address VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
2️⃣ Configure Database Connection

Open db.php and update if needed:

$host = "localhost";
$user = "root";
$password = "";
$database = "school_db";
▶️ How to Run the Project

Install XAMPP or WAMP

Start Apache and MySQL

Copy the project folder into:

htdocs/   (for XAMPP)

Open browser and go to:

http://localhost/student-management/add_student.php
📸 System Workflow

Add Student → Saves to Database

View Students → Shows all records

Edit → Update student details

Delete → Confirmation popup + success message

🔐 Future Improvements

Use Prepared Statements (SQL Injection protection)

Add Search functionality

Add Pagination

Add Admin Login System

Add Dashboard with statistics

 Author huzaifa khalid


here is the working sample vedio link :-
🔗 (https://drive.google.com/file/d/1UuvRSR_cvGjdYB5lkTmx4MWd9tc4A37l/view?usp=drivesdk)

