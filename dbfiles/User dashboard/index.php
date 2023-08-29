<!-- index/ Dashbord -->

<?php 

$home = "collapsed";
$title = "Home";
include 'user_header.php';
 

?>

  <main id="main" class="main " >
<center><div class="pagetitle"><h1>My Profile</h1></div></center>
  <table class="table table-hover">
  <thead>
    <tr>
   <th>Name</th>
   <td>            
    <?php
          echo $_SESSION['u_name'];
    ?>
    </td>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th>Father's Name</th>
        <td>
        <?php
              echo $_SESSION['u_fname'];
            ?>
        </td>
     
    </tr>
    <tr>
    <th>Mother's Name</th>
        <td>
          <?php
          echo $_SESSION['u_mname'];
          ?>
        </td>
    </tr>
    <tr>
    <th>Gender</th>
        <td>
        <?php
          echo $_SESSION['u_gender'];
          ?>
        </td>
    </tr>
    <tr>
    <th>Date of Birth</th>
        <td>
        <?php
          echo $_SESSION['u_dob'];
          ?>
        </td>
    </tr>
    <tr>
    <th>Mobile Number</th>
        <td>
        <?php
          echo $_SESSION['u_mobile'];
          ?>
        </td>
    </tr>
    <tr>
    <th>Email ID</th>
        <td>
        <?php
          echo $_SESSION['u_email'];
          ?>
        </td>
    </tr>
  </tbody>
</table>
   



  </main>

 
</body>

</html>