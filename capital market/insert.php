<?php

include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
 
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="image/favicon.png">

  




<script>

function return_back(){
	
	 window.location = 'query.php';
	
	
}


</script>
</head>




<body>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a class="navbar-brand" href="homepage.php">Flashbook</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<br><br>


<?php

$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$gender = $_POST["gender"];
$affiliation = $_POST["affiliation"];
$nationality = $_POST["nationality"];

if (isset($_POST["register"])){
	
		$sql_insert = "INSERT INTO registration_list (name, email, contact, gender, affiliation, nationality)
VALUES ('$name', '$email', '$contact', '$gender', '$affiliation', '$nationality')";;
		
	$resultfound = false;
	$result = $conn->query($sql_insert);
	

		if ($result) {
			?>
			<script type="text/javascript">
			 $(document).ready(function(){
			$("#myModal").modal('show');
			});
			 
			</script>
			<?php
			
		}	


}




?>



<!--Congratulation  -->
        <div id = "myModal" class="modal fade">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Congratulation! You have register sucessfully! </h4>
			  </div>
			 
			  <div class="modal-body">
				<label >Please check your name in Query form</label>
			  </div>
			  <div class="modal-footer">

			  
				<button type="button" onclick = "return_back()" class="btn btn-primary" data-dismiss="modal">OK</button>

				
				
			
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

</body>




</html>