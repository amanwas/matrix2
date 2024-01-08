<?php
$servername = "localhost";
$username = "worlqzdd_ali";
$password = "karachi4515";
$dbname = "worlqzdd_ali";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM sources";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>MS WORD PLULGIN PORTAL</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    
	
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include("topbar.php"); ?>
        
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                 <?php include("header.php"); ?>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Database</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Database</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                 
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                          
                             <div class="card-body">
                                <div class="form-group">
    				    <div class="col-sm-12">
    					<a href="#" aria-expanded="false">
                                            <button class="btn btn-success text-white">New Source</button>
                                        </a>
                                         <button class="btn btn-primary float-end" onClick="window.location.reload();">Refresh Page</button>
    				    </div>
    				</div>
                            </div>

                            <div class="table-responsive">
                                <table id="myTable" class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Id</th>
                                            <th class="border-top-0">Type</th>
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0">Year</th>
                                            <th class="border-top-0">City</th>
                                            <th class="border-top-0">Publisher</th>
                                            <th class="border-top-0">Author</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									 
                                     <?php
                                     
                                         if ($result->num_rows > 0) {
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                      ?>

                                        <tr>
                                            <td>
                                                <h5 class="m-b-0"><?php echo $row["id"]; ?></h5>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-orange text-white">MA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $row["source_type"]; ?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><?php echo $row["title"]; ?></td>
                                            <td><?php echo $row["year"]; ?></td>
                                            <td>
                                                <label class="label label-info"><?php echo $row["city"]; ?></label>
                                            </td>
                                            <td><?php echo $row["publisher"]; ?></td>
                                            <td><?php echo $row["author_firstname"]; ?></td>

                                               
                                            <td align='center'>
                                               <a href="#" class='delete' data-table='sources' data-id='<?= $row["id"]; ?>'>Delete</a>
                                             </td>
                                            
                                        </tr>
                                        
                                        <?php
                                          }
                                        } 
                                        $conn->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Xtreme Admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

	 <script>
			
            $(document).ready( function () {

                var table = $('#myTable').DataTable()

                // Delete 
                  $('#myTable').on('click', '.delete', function() {
                   var el = this;
                  
                   // Delete id
                   var deleteid = $(this).data('id');
                   var table = $(this).data('table');
                 
                   var confirmalert = confirm("Are you sure?");
                   if (confirmalert == true) {
                      // AJAX Request
                      $.ajax({
                        url: 'delete_record.php',
                        type: 'POST',
                        data: { id:deleteid, table:table },
                        success: function(response)
                        {
                          if(response == 1){
                                // Remove row from HTML Table
                                $(el).closest('tr').css('background','tomato');
                                $(el).closest('tr').fadeOut(800,function(){
                                   $(this).remove();
                                });
                             }
                          else{
                                  alert('Invalid ID.');
                              }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) 
                        {
                            alert("some error: " + textStatus);
                        }
                      });
                   }

                 });

	    } );
	</script>
</body>

</html>