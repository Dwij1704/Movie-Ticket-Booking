<!DOCTYPE html>
<html lang="en-US">
  <head>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="libs/style.css">
  </head>
  <?php
  include 'connection.php';
  session_start();
$id=$_SESSION['id'];
$query=mysqli_query($db,"SELECT * FROM customer where cname='$id'");
$row=mysqli_fetch_array($query);
  ?>
<div class="profile-input-field">
        <h2>User Profile</h2>
        <h3>-----------------------------------</h3>
        <div class="form-group">
            <label></label>
          </div>
          <div class="form-group">
            <label>Fullname:-  </label>
            <?php echo $row['cname']; ?>
          </div>  
          <div class="form-group">
            <label>Gender:-  </label>
            <?php echo "Male"; ?>
          </div>
          <div class="form-group">
            <label>Email:-  </label>
            <?php echo "18"; ?>
          </div>
          <div class="form-group">
            <label></label>
          </div>
          <div class="form-group">
            <center>
             <button id=btn><a href="logout.php">Delete Account</a></button>
           </center>
            <center>
             <a href="logout.php">Log out</a>
           </center>
          </div>
        </form>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $fullname = $_POST['fname'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $address = $_POST['address'];
      $query = "UPDATE users SET full_name = '$fullname',
                      gender = '$gender', age = $age, address = '$address'
                      WHERE user_id = '$id'";
                    $result = mysqli_query($db, $query) or die(mysqli_error($db));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "index.php";
        </script>
        <?php
             }               
?>  