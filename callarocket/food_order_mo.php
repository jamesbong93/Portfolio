<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="image/favicon.png">

    <title>Make an order</title>
  
  
  <style>
  h1.page-title{
  text-align: center;
  color:black;
  }
  
  #form_att {
	position:absolute;left:0px;top:200px;bottom:50px;
	padding:30px;
	
  }

  
  section.title1{
  background-color:#CCCCFF;
  }
  

  .fee{
	  
	  color:red;
	  font-weight: bold;
  }
  #le{
	  
	  color:black;
	  font-weight: bold;
  }


  </style>
  
  <?php
$servername = "localhost";
$username = "callaroc_admin";
$password = "!gwUL$9ToeTg";
$dbname = "callaroc_callarocket";


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
	
	
	if($_POST["area"] == "Cyberjaya"){
	$sql_res = "SELECT STORENAME FROM storelistfood ORDER BY STORENAME ASC";
		
	}
	elseif($_POST["area"] == "Malacca bukit beruang and ayeh keroh"){
		
		$sql_res = "SELECT STORENAME FROM storelistfoodmelaka ORDER BY STORENAME ASC";
		
	}
	elseif($_POST["area"] == "Cheras"){
		
		$sql_res = "SELECT STORENAME FROM storelistfoodcheras ORDER BY STORENAME ASC";
	}
		
		
		$result_res = $conn->query($sql_res);
		
		
		$category = $_POST["category"];
	?>

	<script>
	
	
	
	
function validateForm() {
	
    var x = document.forms["myform"]["name"].value;
	var y = document.forms["myform"]["contact"].value;
	var z = document.forms["myform"]["address"].value;
	var q = document.forms["myform"]["detail"].value;
	var t = document.forms["myform"]["time_slot"].value;
	var h = document.forms["myform"]["restaurant"].value;
	
if ( x == "" || y == "" || z == "" || q == "" || t == "Select time slot" || h == "Select restaurant") {
        $(document).ready(function(){
		$("#myModal").modal('show');
	});
        return false;
    }
	
	

}

function goBack() {
    window.history.back();
}




</script>

</head>

<body>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              
                <a class="navbar-brand" href="http://callarocket.com/">Call A Rocket</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<br><br>
	
	<!--title-->
	<section id="header" class="title1" style="border-bottom:1px solid #CCCCFF;padding-bottom:50px;padding-top:50px">
	<h1 class="page-title">Make an order now!</h1>
	</section>
	
	<br><br><br><br>
	








	
		<div id = "form_att" class="col-md-4 col-md-offset-4" >
	
      <form name = "myform" class="form-horizontal" method = "post"  action = "food_confirmation_mo.php"  onsubmit="return validateForm()" >
      

          <!-- Form Name -->
          <legend id = "le">Fill in your information and order</legend>

          <!-- Name input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Name: </label>
            <div class="col-sm-9">
			<input class = "form-control"type = "text" name = "name" pattern="[a-z A-Z]*$" title = "only letters are allowed" placeholder = "Enter your name" >
            </div>
          </div>
		  
		  <!-- Contact input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Contact: </label>
            <div class="col-sm-9">
			<input class = "form-control" type = "text" name = "contact" pattern="[0-9]+" maxlength = "11" title = "only numbers are allowed" placeholder= "Enter your number(e.g.:0176964587)" >	
            </div>
          </div>
		  
		    <!-- Address input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Address: </label>
            <div class="col-sm-9">
			<input class = "form-control" type = "text" name = "address" placeholder= "Enter your address to be delivered" >	
            </div>
          </div>
		  
		  
		<!-- Time Slot input-->
        <div class="form-group">
            <label class="col-sm-3 control-label">Time: </label>
            <div class="col-sm-9">
			<select class = "form-control" name = "time_slot" >
			<option>Select time slot</option>
			<option>11.00a.m to 12.00p.m</option>
			<option>12.00p.m to 01.00p.m</option>
			<option>02.00p.m to 03.00p.m</option>
			<option>03.00p.m to 04.00p.m</option>
			<option>04.00p.m to 05.00p.m</option>
			<option>05.00p.m to 06.00p.m</option>
			<option>06.00p.m to 07.00p.m</option>
			<option>07.00p.m to 08.00p.m</option>
			<option>08.00p.m to 09.00p.m</option>
			<option>09.00p.m to 10.00p.m</option>
			</select>	
            </div>
          </div>
        
		 <div class="form-group">
         <label  class="col-sm-3 control-label">Restaurant:</label>
         <div class="col-sm-9">
		<select class = "form-control"  name = "restaurant"> 
		<option>Select restaurant</option>
		<?php 
		if ($result_res->num_rows > 0) {
			
			while($row = $result_res->fetch_assoc()) {
				$r = $row["STORENAME"];
			 echo"
			 <option>$r</option>	
			";	
			}
		}
		?>
		</select>
			</div>
		</div>
		
		<!--category hidden input-->
		<input type = "hidden" name = "category" value="<?php echo $category;?>"   >

		
		<!-- detail input-->
          <div class="form-group">
            <label class="col-sm-3 control-label">Detail: </label>
            <div class="col-sm-9">
			<textarea class = "form-control" rows = "5" cols = "40" name = "detail"  placeholder= "Enter the detail of the food you want to order" ></textarea>	
            </div>
          </div>
		  
		  <input type = "hidden" name = "area" value="<?php echo $_POST["area"]?>"   >
		  
		   <span class = "fee" >*Delivery fee for food: RM2.99 + 10% of order value</span>
		  <legend></legend>
		 
         
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
			  
				<input type = "button" value = "Back" class="btn btn-primary" onclick="goBack()"   >
				
                <input type="submit" value = "Next" class="btn btn-primary"   >
              </div>
            </div>
        
<br><br><br><br>
       
      </form>
	  
	 
    </div><!-- /.col-lg-12 -->
	
		<!--Congratulations  -->
        <div id = "myModal" class="modal fade">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
			  
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title">Form is not completed! </h4>
			  </div>
			 
			  <div class="modal-body">
				<label >Please complete the form</label>
			  </div>
			  <div class="modal-footer">
			 
				
				<button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>

				
				
			
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	

	
	
</body>
 <br><br><br><br><br><br>

		