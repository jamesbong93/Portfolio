<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
	
    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
	
  <style>
	table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: pointer;

}
	</style>
	


</head>



<body>

    <div id="wrapper">

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Navigation -->
            <?php include 'sidebar.php';
			$admin_email = $_GET["admin_email"];
			?>
			<!-- Navigation -->
		
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
               	<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                     <li >
                        <a href="dashboard.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="books.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-wrench"></i> Books </a>
                    </li>
					<li>
                        <a href="today_order.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-desktop"></i>  Today orders  <span class="badge alert-info"> <?php echo $today_counts;?></a>
                    </li>
					<li>
                        <a href="yesterday_order.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-desktop"></i>  Yesterday orders  <span class="badge alert-info"> <?php echo $yesterday_counts;?></a>
                    </li>
                    <li>
                        <a href="purchase_history.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-desktop"></i>  Purchase History <span class="badge alert-info"> <?php echo $purchase_counts;?> </a>
                    </li>
					<li  >
                        <a href="purchase_request.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-wrench"></i> Purchase Request <span class="badge alert-info"> <?php echo $request_counts;?></a>
                    </li>
					<li >
                        <a href="view_history.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-calendar"></i>  View History <span class="badge alert-info"> <?php echo $view_counts;?></a>
                    </li>
					<li>
                        <a href="report.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-list-alt"></i> Customer Reports </a>
                    </li>
					<li class="active">
                        <a href="sales_report.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-list-alt"></i> Sales Reports </a>
                    </li>
					<li>
                        <a href="feedback_analysis.php?admin_email=<?php echo $admin_email;?>"><i class="fa fa-fw fa-list-alt"></i> Feedback Reports </a>
                    </li>
                    
                   
                </ul>
			
			
            </div>
			
			
            </div>
		</nav>
        

    <div id="page-wrapper">
	 <div class="container-fluid">
				<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         Sales Report
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
				
               
				

				
			
			
				<div class="row">
				<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Number of books sold
                            </li>
                        </ol>
				
								<div class="col-md-15">
						
                        <div class="table-responsive">
                        <div class="box-body table-responsive">
                           <table id="example1" class="table table-bordered table-striped">
							
							<thead>
                                    <tr>
                                        <th>Book Name</th>
                                        <th>Number of sold</th>
                                    </tr>
                                </thead>
								<tbody>
				<?php
			
				
				
				
				$query_booksold = "SELECT books.Name,COUNT(purchase_history.Purchase_ID) AS NumberofSold
							FROM purchase_history LEFT JOIN books ON purchase_history.Book_ID=books.ISBN 
							GROUP BY Name order by NumberofSold ";

					
					
			
					$result_booksold = $conn->query($query_booksold);
					
					
					
				while($row_booksold = $result_booksold->fetch_assoc()) {
					
				
					echo "<tr>"; 
						echo "<td>".$row_booksold["Name"];
						echo "<td>".$row_booksold["NumberofSold"];
						echo "</tr>"; 
					
						
					}
					
				
				?>
				
   
				</tbody>
				</table>
			</div>
                    </div>
                
            </div>
                </div>
			

<br><br><br>
<legend></legend>			
		<div class="row">
				<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Number of Books Viewed
                            </li>
                        </ol>
				
								<div class="col-md-15">
						
                        <div class="table-responsive">
                        <div class="box-body table-responsive">
                           <table id="example3" class="table table-bordered table-striped">
							
							<thead>
                                    <tr>
                                        <th>Book Name</th>
                                        <th>Number of View</th>
                                    </tr>
                                </thead>
								<tbody>
				<?php
			
				$query_count = "SELECT * FROM view_history";
				$result_count = $conn->query($query_count);
				$count_row=mysqli_num_rows($result_count);
				$page_count = $count_row/10;
				$page_count = ceil($page_count);
				
				
				$query_booksold = "SELECT books.Name,COUNT(view_history.View_ID) AS NumberOfbook 
							FROM view_history LEFT JOIN books ON view_history.Book_ID=books.ISBN 
							GROUP BY Name ORDER BY `NumberOfbook` DESC";

					
					
			
					$result_booksold = $conn->query($query_booksold);
					$rowcount=mysqli_num_rows($result_booksold);
					
					
				while($row_booksold = $result_booksold->fetch_assoc()) {
					
				
					echo "<tr>"; 
						echo "<td>".$row_booksold["Name"];
						echo "<td>".$row_booksold["NumberOfbook"];
						echo "</tr>"; 
					
						
					}
					
				
				?>
				
   
				</tbody>
				</table>
			</div>
                    </div>
                
            </div>
                </div>
							
			</div>
		</div>
		
		
		
		
		
		
		
		
    </div>
	<script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $("#example3").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
	 <script src="js/bootstrap.min.js"></script>
</body>

</html>
