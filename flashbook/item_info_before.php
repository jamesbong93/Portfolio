<?php
session_start();
include 'connect_database.php';
$username = $_SESSION["username"];





?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flashbook</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

		<style>
	 .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: blue;
}


	
	
	img.home_page_book{
	
	width: 200px;
	height: 300px;
	
	}
	


	</style>
	
	<script>
	
	function confirm_message(){
		
	}
	
	
	</script>
	
	

</head>

<body>

     <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
						<a class="navbar-brand " href="homepage.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Flashbook</a>
					</li>
				
                    <li class = "active">
                        <a href="item.php"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Books</a>
                    </li>
                  
                    
					
					
                </ul >
				
				<ul class="nav navbar-nav navbar-right">
					<li >
						<a  href="sign_in.php" ><span class="dropdown-toggle glyphicon glyphicon-user" aria-hidden="true"></span> Login</a>
					
					</li>
					
				</ul>
				
					   
			  
            </div >
			

			 
            <!-- /.navbar-collapse -->
		
        </div>
        <!-- /.container -->
		
	
	
	</nav>
	
	
	 
	 
	
	
	 

    <!-- Page Content -->
    <div class="container">
		 <br> <br><br>
		 
	<?php include "search_box.php";?>
			
			<br><br><br>
        <div class="row">

             <div class="col-md-3">
                <p class="lead">Book Categories</p>
                <div class="list-group">
                     <a href="item.php" class="list-group-item ">Arts & Photography</a>
                    <a href="item_business.php" class="list-group-item ">Business & Money </a>
                    <a href="item_children.php" class="list-group-item ">Children's Books</a>
                    <a href="item_cook.php" class="list-group-item ">Cookbooks, Food & Wine</a>
                    <a href="item_computer.php" class="list-group-item ">Computer & Technology</a>
                    <a href="item_education.php" class="list-group-item ">Education & Teaching</a>  
                </div>
            </div>
			
			

				
			<div class="col-md-9">
			<?php
			
			
				$query_user = "SELECT ID FROM user_login where username = '".$username."'";
				$result_user = $conn->query($query_user);
				$row_user = $result_user->fetch_assoc();
				
				
				
				
				
				
				$query_se = "SELECT * FROM books where ISBN = ".$_GET["ISBN_past"]."";
				$result_se = $conn->query($query_se);
				$rowcount=mysqli_num_rows($result_se);
				
				$row = $result_se->fetch_assoc();
				
				
				$user_id = $row_user["ID"];
				$book_id = $row["ISBN"];
				$query_se = "INSERT INTO view_history (User_ID,Book_ID) VALUES ('$user_id','$book_id')";
				$conn->query($query_se);
				
				
				$query_countview = "Select * FROM view_history where Book_ID = '".$book_id."' ";
				$result_countview = $conn->query($query_countview);
				$count_view=mysqli_num_rows($result_countview);
				
		
			
				
				
				?>
				
				<div class="thumbnail">
				 <h2 class="pull-left"><?php echo $row["Name"]?></h2>
				<br>
				
				
				
				 <br><br>
				 <hr>
				 
				<img class="img-responsive" src ="books_pic\<?php echo $row["ISBN"]; ?>.jpg" height = "300px" width = "300px">
				<br><br>
				 <hr>
				
			
				
				
				 </div>
				<?php
				
				
				
			?>
            

                <div class="well">
                   
                    <div class="caption-full">
						<h4 class="pull-left">Author: <?php echo $row["Author"]?></h4>
						<br><br>
                        <h4 class="pull-left">Price: RM <?php echo $row["Price"]?></h4>
						<br><br>
						<h2 class="pull-left" > Description </h2>
                        <h4 class="pull-left"> <?php echo $row["Description"]?></h4>
						<br><br>

                    </div>
					
					
				
                
	
               

                    

					<br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br><br>
                    <hr>
					<hr style="height:1px;border:none;color:#333;background-color:#333;" />
					<?php
					  
					$query_review = "SELECT * FROM review,books,user_login
									WHERE review.Book_ID = '".$book_id."'
									and review.Book_ID = books.ISBN
									and review.User_ID = user_login.ID";
					$result_review = $conn->query($query_review);
					
					
					while($row_review = $result_review->fetch_assoc()){
					
					?>
					
                    <div class="row">
                        <div class="col-md-12">
						<span class="pull-right"><?php echo $row_review["Review_created"]?></span>
							<?php echo $row_review["username"]?><div class="stars starrr fixed" data-rating="<?php echo $row_review["Rating"]?>" ></div>
                            
                            <p><?php echo $row_review["Comment"]?></p>
							
							<hr style="height:1px;border:none;color:#333;background-color:#333;" />

                        </div>
						
                    </div>
					
					<?php
					}
					?>
					<br><br><br>
					
					
					



				
			
					</div>
				</div>
            </div>
			
			
	 <div class="row">
            <div class="col-lg-12">
                <h3>Customers Who View This Book Also View</h3>
            </div>
        </div>
        <!-- /.row -->

                <div class="row text-center" >
		
		<?php 
		
		$query_user = "SELECT ID FROM user_login where username = '".$username."'";
		$result_user = $conn->query($query_user);
		$row_user = $result_user->fetch_assoc();
		$user_id = $row_user["ID"];
		
		$query_view = "SELECT DISTINCT ISBN,Price,Name FROM books,view_history,user_login
					   WHERE view_history.Book_ID = books.ISBN
					   and view_history.User_ID = user_login.ID
					   and view_history.User_ID IN (Select DISTINCT User_ID FROM view_history,user_login
					   where Book_ID = '".$book_id."'
					    )
					   and view_history.Book_ID != '".$book_id."'
					   order by books.View_num DESC
					   LIMIT 4
					   ";
		
 
		$result_view = $conn->query($query_view);
				
					
			while($row_view = $result_view->fetch_assoc()) {
					
					$book_id = $row_view["ISBN"];
					$user_id = $row_user["ID"];
					$price = $row_view["Price"];
					$book_name = $row_view["Name"];
					
			?>
			<div class="col-md-3 col-sm-6 hero-feature" > 
                
				
				 <div class="thumbnail">
                   
                    
               
				
					
						
					 <img class = "home_page_book" src ="books_pic\<?php echo $book_id ?>.jpg" >
					<div class="caption">
                      
                       
                        <p>
                        
							<a href="item_info_before.php?ISBN_past=<?php echo $row_view["ISBN"]?> "class="btn btn-default">More Info</a>
                        </p>
                    </div>
				
				
				 </div>
            </div>
			<?php
			}
		?>
        </div>
     

    </div>
	
    <!-- /.container -->

	
	
	
	
	
	
    <div class="container">

        <hr>


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
<?php include 'footer.php';?>
</html>
