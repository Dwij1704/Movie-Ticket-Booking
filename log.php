<?php
      session_start();
      include 'connection.php';
if(isset($_POST['Login'])){
  $user = $_POST['c_name'];
  $pass = $_POST['c_pass'];
  $query=mysqli_query($db,"SELECT * FROM customer WHERE cname = '$user' AND c_pass = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['cname'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='profile.php'
    </script>
    <?php
}
}
      ?>