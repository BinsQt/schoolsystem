<?php
session_start();

include("./connection.php");

if (isset($_POST['username']) && isset($_POST['password'])) {

   $uname = $_POST['username'];
   $pword = $_POST['password'];
   

   if (empty($uname && $pword)) {
      header("Location: /index.php?error=Insert username and password");

      exit();

   } elseif (!empty($uname && $pword)) {

      $sql = "SELECT * FROM admin where username = '$uname' and password = '$pword'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) === 1) {
         $row = mysqli_fetch_assoc($result);

         if ($row['username'] === $uname && $row['password'] === $pword) {

               $_SESSION['username'] = $row['username'];

               $_SESSION['fullname'] = $row['fullname'];
   
               $_SESSION['aid'] = $row['aid'];

               $position = $row['position'];

               if ($position == 1) {
                  header("Location: /schoolsystem/frontend/admin/adminDashboard.php");
               } elseif ($position == 2) {
                  header("Location: /schoolsystem/frontend/teacher/teacherDashboard.php");
               } else {
                  header("Location: /schoolsystem/frontend/student/studentDashboard.php");
               }
               exit();
         }
      }
   }
}

?>