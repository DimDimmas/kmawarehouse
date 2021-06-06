<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
	
<?php
  include 'auth.php';
  include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Warehouse - Karyamuda Mandiri Alkesindo
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="assets/css/pro/all.css"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a onclick="reloadpage()" class="simple-text logo-mini">
          KMA
        </a>
        <a onclick="reloadpage()" class="simple-text logo-normal">
           Warehouse
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a onclick="home()">
              <i class="now-ui-icons design_app"></i>
              <p>Catalogue</p>
            </a>
          </li>
          <li class="active">
            <a onclick="reloadpage()">
            <i class="far fa-user" aria-hidden="true"></i>         
              <p>User</p>
            </a>
          </li>
          <li class="active-pro">
            <a onclick="logout()">
              <i class="fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">User List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <form action="index.php" method="get">
                  <input type="text" value="" class="form-control" placeholder="Search..." name="search">
                </form>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header">
        <div class="header text-center">
          <h2 class="title">Table User</h2>
          <div class="row">
            <div class="col">
            </div>
            <div class="col">
            </div>
            <div class="col">
              <a href="#addUserModal" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus-circle" aria-hidden="true"></i><span> &nbsp; Add New User</span></a>
            </div>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Username
                      </th>
                      <th>
                        Password
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                      <?php                      
                        $n = 1;
                          $query = mysqli_query($con,"select * from admin");
                        
                          while($row = mysqli_fetch_array($query)){
                      ?>
                    <tbody>
                      <tr>
                        <td>
                          <?php echo $n++ ?>
                        </td>
                        <td>
                          <?php echo $row['user']; ?>
                        </td>
                        <td>
                          <?php echo $row['password']; ?>
                        </td>
                        <td class="text-right">
                          <a href="#editUserModal" class="edit" data-toggle="modal">
                            <i class="material-icons update" data-toggle="tooltip" 
                              data-id="<?php echo $row['id']; ?>" 
                              data-user="<?php echo $row['user']; ?>"
                              data-password="<?php echo $row['password']; ?>"
                              title="Edit">
                            </i>
                          </a>
                          &nbsp;
                          <a href="#deleteUserModal" class="delete" data-id="<?php echo $row['id']; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>      
                    </tbody>
                    <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <div class="copyright" id="copyright">
            &copy; 
            <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script> Karyamuda Mandiri Alkesindo, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- ----------------------------- -->
  <!-- Add Modal HTML -->
	<div id="addUserModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">						
						<h4 class="modal-title">Add Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Username</label>
							<input type="text" id="user" name="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" id="password" name="password" class="form-control" required>
						</div>			
					</div>
					<div class="modal-footer">
                        <input type="hidden" value="4" name="type">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  <!-- ----------------------------- -->

  <!-- ----------------------------- -->
  <!-- Edit Modal HTML -->
	<div id="editUserModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">						
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Username</label>
							<input type="text" id="user_u" name="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" id="pass_u" name="password" class="form-control" required>
						</div>		
					</div>
					<div class="modal-footer">
                        <input type="hidden" name="id" id="id_u">
                        <input type="hidden" value="5" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-warning" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
  </div>
  <!-- ----------------------- -->

  <!-- ----------------------- -->
  <!-- Delete Modal HTML -->
	<div id="deleteUserModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>						
					<div class="modal-header">						
						<h4 class="modal-title">Delete User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
  <!-- ----------------------- -->

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });
  </script>

  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

  <script>
    function reloadpage(){
        window.location.href = "user.php"
    }
    function logout(){
      window.location.href = "logout.php"
    }
    function home(){
      window.location.href = "index.php"
    }
  </script>

  <script>
    $(document).on('click','#btn-add',function(e) {
    var data = $("#user_form").serialize();
      $.ajax({
          data: data,
          type: "post",
          url: "save.php",
          success: function(dataResult){
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                      $('#addUserModal').modal('hide');
                      alert('Data added successfully!'); 
                      location.reload();						
                  }
                  else if(dataResult.statusCode==201){
                    alert(dataResult);
                  }
              }
          });
      });
      
      $(document).on('click','.update',function(e) {
          var id = $(this).attr("data-id");
          var user=$(this).attr("data-user");
          var password=$(this).attr("data-password");
          $('#id_u').val(id)
          $('#user_u').val(user);
          $('#pass_u').val(password);
      });
      $(document).on('click','#update',function(e) {
          var data = $("#update_form").serialize();
          $.ajax({
              data: data,
              type: "post",
              url: "save.php",
              success: function(dataResult){
                      var dataResult = JSON.parse(dataResult);
                      if(dataResult.statusCode==200){
                          $('#editUserModal').modal('hide');
                          alert('Data updated successfully !'); 
                          location.reload();						
                      }
                      else if(dataResult.statusCode==201){
                        alert(dataResult);
                      }
              }
          });
      });

      $(document).on("click", ".delete", function() { 
          var id=$(this).attr("data-id");
          $('#id_d').val(id);          
      });
      $(document).on("click", "#delete", function() { 
          $.ajax({
              url: "save.php",
              type: "POST",
              cache: false,
              data:{
                  type:6,
                  id: $("#id_d").val()
              },
              success: function(dataResult){
                      $('#deleteUserModal').modal('hide');
                      $("#"+dataResult).remove();
                      location.reload();						
                }
            });
        });
  </script>
</body>

</html>