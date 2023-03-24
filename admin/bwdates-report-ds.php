<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

    
?>
       

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Between Dates report date selection | Registration and Login System</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>

    
          <?php include_once('includes/sidebar.php');?>
                        

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile Update</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

                        
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Between Dates report date selection</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

                                 <form method="post" name="bwdatesreport" action="bwdates-report-result.php" >
                             <div class="card-body">
        <div class="form-group">
             <label for="fromdate">From Date</label>
   <input class="form-control" id="fromdate" name="fromdate" type="date" value="" required /></td>
                                  </div>
    <div class="form-group">
         <label for="todate">To Date</label>
            <input class="form-control" id="todate" name="todate" type="date" value=""  required />
                </div>
                        </div>
                <!-- /.card-body -->

                <div class="card-footer">                  
                <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
</section>
</div>

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

<?php } ?>
