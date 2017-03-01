<?php

include 'db_connect.php';
?>
<!DOCTYPE html>
<html>
    <head>
      
		   <meta charset="utf-8" />
        <title>World Capital Markets Conference 2015</title>
        <link href="main.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 

        <link href="main.css" rel="stylesheet" type="text/css" />
		
		


  <script src="sorttable.js"></script>
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
        <div  id = "hmenu">
			<ul align = "center">
			<img src = "logo.jpg" width = "200px" height = "150px">
			<br>
				<li><a href = "index.html">Home</a></li>
				<li><a href = "registration_form.html">Reservation Form</a></li>
				<li><a href = "query.php">Query Form</a></li>
				<li><a href = "#">Workshop Materials</a>
				<ul>
						<li><a href = "agenda.html">Conference Agenda</a></li>
						<li><a href = "venue.html">Venue</a></li>
						<li><a href = "speakers.html">Speakers</a></li>
						<li><a href = "contact.html">Contact</a></li>
				</ul>
				</li>
			</ul>
		
		
		</div>
		
       
		<h1 align = "center">Query Form</h1>
	   
		
		<form  name = "myform" method="post"   id="searchform"> 
				<h3>Search</h3>
				
			      <input  type="text" name="name" placeholder = "Enter name" > 
					
				  <input class="btn btn-primary" type="submit" name="search" value="Search">
			     
				</form> 
       <br>
	  <form method = "post" >
						 
						 <input class="btn btn-primary" type="submit" name="show_all" value="Show all">
						
				</form>
	  
	<div class="col-md-15">
                        
						
						<br>
						
                        <div class="table-responsive">
                        <div class="table-responsive">
                           <table  class=" table table-bordered table-hover sortable">
							
							<thead>
                                    <tr>
                                       
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Gender</th>
                                        <th>Affiliation</th>
										<th>Nationality</th>
                                        <th>time_stamp</th>
                                    </tr>
                                </thead>
								<tbody>
				<?php
			
				$query_count = "SELECT * FROM registration_list";
				$result_count = $conn->query($query_count);
				$count_row=mysqli_num_rows($result_count);
				
				
				$query_se = "SELECT * FROM registration_list order by time DESC";
				
				if(isset($_POST["show_all"])){
					
					$query_se = "SELECT * FROM registration_list order by time DESC";
					
				}
				
				if(isset($_POST["search"])){
					
					
					if($_POST["name"] != ""){
						
						$search = $_POST["name"];
						$query_se = "SELECT * FROM registration_list where name LIKE '%". $search . "%'";
						
						
					}
				}
				
					
					

					$result_se = $conn->query($query_se);
					$rowcount=mysqli_num_rows($result_se);
				while($row = $result_se->fetch_assoc()) {
					echo "<tr>"; 
						
						echo "<td>".$row["name"];
						echo "<td>".$row["email"];
						echo "<td>".$row["contact"];
						echo "<td>".$row["gender"];
						echo "<td>".$row["affiliation"];
						echo "<td>".$row["nationality"];
						echo "<td>".$row["time"];
						
						echo "</tr>"; 
				
				
					}
				
				?>
				<p>Number of participants: <?php echo $rowcount;?></p>
				</tbody>
				</table>
			</div>
                    </div>
                
            </div>
		
		<br><br><br><br>
		<div id="footer">
			<hr style="width: 100%; color: black; height: 1px; background-color:black;" />
		<div>
		<p>
    <h2>Follow us on</h2>
	<a href="https://www.facebook.com/mmu.malaysia" target="_blank"><img src="fb_round.png"  width="44"/></a>
	</p>
		
			<p style="font-family: sans-serif;">
				&copy; copyright 2015 | all rights reserved
			</p>
			<p>Designed by Bong Wen Han(1131121346), Lim Kah Hoe(1131121536), Lee Seng Cong(1131121328), Yan Weng Ker(1112701035)</p>
		</div>
	</div>
	
	
	 <script src="js/bootstrap.min.js"></script>
    </body>
	
</html>