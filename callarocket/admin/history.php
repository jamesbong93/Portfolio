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

	
	<script src="sorttable.js"></script>
	
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  
  


  <style>
		table.sortable thead {
    background-color:#eee;
    color:#666666;
    font-weight: bold;
    cursor: pointer;
		}
	table.fixed { table-layout:fixed; }
table.fixed td { overflow: hidden; }



	</style>
</head>

<body>

   

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Navigation -->
            <?php
			include 'sidebar.php';
			
			?>
			<!-- Navigation -->
			
			<p  id = "qwe"></p>
			
			
			<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                   
                    <li>
                        <a href="Dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                    </li>
                    <li >
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables  <span class="badge alert-info"> <?php echo $rowcount;?> </span></a>
                    </li>
                    <li>
                        <a href="today_order.php"><i class="fa fa-fw fa-edit"></i> Today <span class="badge alert-info"> <?php echo $today_counts;?> </span></a>
                    </li>
                    <li>
                        <a href="yesterday_order.php"><i class="fa fa-fw fa-desktop"></i> Yesterday <span class="badge alert-info"> <?php echo $yesterday_counts;?></a>
                    </li>
					<li class="active">
                        <a href="history.php"><i class="fa fa-fw fa-edit"></i> History</a>
                    </li>
                    <li>
                        <a href="shops.php"><i class="fa fa-fw fa-wrench"></i> Shops </a>
                    </li>
                    <li>
                        <a href="new_order.php"><i class="fa fa-fw fa-file"></i> New orders <span class="badge alert-info"> <?php echo $new_count;?></a>
                    </li>
                   
                </ul>
			
			
            </div>
			</nav>
        
 <div id="wrapper">
    <div id="page-wrapper">


        <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            History
                        </h1>
                        <ol class="breadcrumb">
                            
                            <li class="active">
                                <i class="fa fa-table"></i> History
                            </li>
                        </ol>
                    </div>
                </div>
				
				<form  method="post"   id="searchform"> 
				<h3>Select a date</h3>
				  <input  type="text" name = "date" id="datepicker" placeholder = "Select date">
			      <input  class="btn btn-primary" type="submit" name="date_sub" value="Search"> 
				</form> 
				<br>
				
				
				<form method = "post" >
						 
						 <input  class="btn btn-primary" type="submit" name="show_all" value="Show all">
						
				</form>
			<div class="col-lg-15">
                        
						
						<br>
						
                        <div class="table-responsive">
                        <div class="table-responsive">
                           <table   class=" table table-bordered table-hover sortable ">
							
							<thead>
                                    <tr>
                                          <th>ID</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Category</th>
                                        <th>Store_list</th>
										<th>Time_slot</th>
                                        <th>order_detail</th>
                                        <th>sms_code</th>
                                        <th>promo_code</th>
                                        <th>time_stamp</th>
                                    </tr>
                                </thead>
								<tbody>
				<?php
				$query_se = "SELECT * FROM confirmedrequest ORDER BY id DESC";
				
				
				
					if(isset($_POST["show_all"])){
						
						
						$query_se = "SELECT * FROM confirmedrequest ";
					}	

					if(isset($_POST["date_sub"])){
					
					
						$search = $_POST["date"];
						$query_se = "SELECT * FROM confirmedrequest where DATE_FORMAT(timeStamp, '%m/%d/%Y') LIKE '%". $search . "%' ";
						
					}
					
				
					$result_se = $conn->query($query_se);
					$rowcount=mysqli_num_rows($result_se);
				while($row = $result_se->fetch_assoc()) {
					echo "<tr>"; 
						echo "<td>".$row["id"];
						echo "<td>".$row["userName"];
						echo "<td>".$row["contactNumber"];
						echo "<td>".$row["userAddress"];
						echo "<td >".$row["category"];
						echo "<td>".$row["storeList"];
						echo "<td>".$row["timeFrame"];
						echo "<td>".$row["requestBody"];
						echo "<td>".$row["smsCode"];
						echo "<td>".$row["promoCode"];
						echo "<td>".$row["timeStamp"];
						
						echo "</tr>"; 
				
				
					}
				
					
				
				?>
				<p>Number of rows: <?php echo $rowcount;?></p>
				<?php
				if ($rowcount == 0){
					
					echo "No result found";
				}
				?>
				</tbody>
				</table>
			</div>
                    </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</div>
  

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	

</body>

</html>
