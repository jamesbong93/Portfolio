<!DOCTYPE html>
<html lang="en">

<head>

<style>

   </style>
	<script src="sorttable.js"></script>
<?php
include 'db_connect.php';
?>
</head>
<body class = "dd">


<div id  = "d" class="col-md-15">
                        
						
						<br>
						
                        <div class="table-responsive">
                        <div class="table-responsive">
                           <table   class=" table table-bordered table-hover sortable">
							
							<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Store_list</th>
										<th>Time_slot</th>
                                        <th>order_detail</th>
                                        <th>sms_code</th>
                                        <th>time_stamp</th>
                                    </tr>
                                </thead>
								<tbody>
				<?php
				
				
					
					
					$query_se = "SELECT * FROM confirmedrequest ORDER BY id DESC ";
					

					$result_se = $conn->query($query_se);
					$rowcount=mysqli_num_rows($result_se);
				while($row = $result_se->fetch_assoc()) {
					echo "<tr>"; 
						echo "<td>".$row["id"];
						echo "<td>".$row["userName"];
						echo "<td>".$row["contactNumber"];
						echo "<td>".$row["userAddress"];
						echo "<td>".$row["storeList"];
						echo "<td>".$row["timeFrame"];
						echo "<td>".$row["requestBody"];
						echo "<td>".$row["smsCode"];
						echo "<td>".$row["timeStamp"];
						echo "</tr>"; 
				
				
					}
				
					
				
				?>
				<p>Number of rows: <?php echo $rowcount;?></p>
				</tbody>
				</table>
			</div>
                    </div>
                
            </div>
			
			
</body>
</html>