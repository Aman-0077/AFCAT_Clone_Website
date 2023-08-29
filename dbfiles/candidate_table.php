<?php
$title = "Candidate ";
$candi = "collapsed";
include 'admin_header.php';

?>

<main id="main" class="main ">


  <div class="pagetitle">
    <h1>Candidate</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Candidate</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->





  <!-- Registered Candidates -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Registered Candidates</h5>


      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Father Name</th>
            <th scope="col">Mother Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>

          <?php 

                $con = mysqli_connect("localhost","root","","afcat");
                $sql = "select * from candi";
                $r = mysqli_query($con,$sql);

                $sn = 0;
                while($v = mysqli_fetch_assoc($r)){
                    $sn++;
                ?>


          <tr>
            <th scope="row">
              <?php echo $sn; ?>
            </th>
            <td>
              <?php echo $v['cname']; ?>
            </td>
            <td>
              <?php echo $v['fname']; ?>
            </td>
            <td>
              <?php echo $v['mname']; ?>
            </td>
            <td>
              <?php echo $v['gender']; ?>
            </td>
            <td>
              <?php echo $v['dob']; ?>
            </td>
            <td>
              <?php echo $v['mobile']; ?>
            </td>
            <td>
              <?php echo $v['email']; ?>
            </td>

            <!-- E D I T -->
            <td>
              <a href="#" class="btn btn-primary" data-bs-target="#edit<?php echo $v['s_no'];?>"
                data-bs-toggle="modal"><i class="bi bi-pen"></i></a>


              <div class="modal" tabindex="-1" role="dialog" id="edit<?php echo $v['s_no'];?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">E D I T</h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Do You Want to Edit Information of
                        <?php echo $v['cname'];?>
                      </p>
                    </div>
                    <div class="modal-footer">
                      <a href="user_login\candidate\user_registration\candidate\register_edit.php?q=<?php echo $v['s_no']; ?>" class="btn btn-primary">Yes</a>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    </div>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-danger" data-bs-target="#delete<?php echo $v['s_no'];?>"
                data-bs-toggle="modal"><i class="bi bi-trash"></i></a>



              <div class="modal" tabindex="-1" role="dialog" id="delete<?php echo $v['s_no'];?>">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">D E L E T E </h5>
                      <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>Do You Want to Delete Information of
                        <?php echo $v['cname'];?>
                      </p>
                    </div>
                    <div class="modal-footer">
                      <a class="btn btn-primary" href="delete.php?q=<?php echo $v['s_no'];?>">Yes</a>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
          </tr>

          <?php 
                }
                ?>

        </tbody>
      </table>

    </div>
  </div>
</main>
<?php
include 'admin_footer.php';
?>
</body>

</html>