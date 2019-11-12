<!DOCTYPE html>

<!--Connect to database-->
<?php include 'db.php'; 

$id = (int)$_GET['taskid'];

$sql = "select * from tasks where id='$id'";

$rows = $db->query($sql);

$row = $rows->fetch_assoc();

//var_dump($row);

if (isset($_POST['add'])){

  $task = htmlspecialchars($_POST['task']); 

/*UPDATE TABLE(name) SET name task where id=id*/
  $sql2 ="update tasks set name= '$task' where id ='$id' ";

  $db->query($sql2);

  header('location: index.php');
}
?>
<html>

<!--Code for the Jquery and Boostrap APIs-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<head>
	<title>CRUD Application</title>
</head>
<body>

<div class="container">
	<div class="row" style="margin-top: 70px">
		<center><h1>Update Todo List</h1></center>

		<!--Setting the column width-->
		<div class="col-md-10 col-md-offset-1">
			<table class="table">
				<!--<button type="button" data-target="#myModal"  data-toggle="modal" class="btn-success">Update Task</button>
				<button type="button" class="btn-default pull-right">Print</button>-->

				<hr>
              	<form method="post" >
									<div class="form-group">
										<label>Task name</label>
										<input type="text" required name="task" value="<?php echo $row['name'];?>" class="form-control">
									</div>
									<input type="submit" name="add" value="Update task" class="btn btn-success"> &nbsp; 
                  <a href="index.php" class="btn btn-warning">Back</a>
                 
								</form>
			</table>
		</div>
	</div>

</div>

</body>
</html>