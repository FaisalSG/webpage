<!DOCTYPE html>
<html>
<head>
<title>Record Insertion Form</title>

</head>

<body>
	<h2>Part_1 Connect to the database</h2>
	<?php
	$mysqli = new mysqli("sql9.freesqldatabase.com", "sql9606060", "Fa2310719");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();}
	else {
		printf("The database Connected successfully.\n"); }
?>

<hr/>

<h2>Part_2 Create the table</h2>

<?php 
$sql = "CREATE TABLE student_grades
	(student_id int,student_name VARCHAR(30),
	task1 int,task2 int, task3 int)";
	$res = mysqli_query($mysqli, $sql);
	
	if ($res === TRUE) {
	echo "Table grades successfully created.";
	} else {
	printf("Could not create table: %s\n", mysqli_error($mysqli));
	}

?>
<hr/>
<h2>Part_3 Insert Record to the database</h2>

<form method="post">
            <p>
                <label for="id">Student ID:</label>
                <input type="text" name="id" id="id">
            </p>
  
            <p>
                <label for="sname">Student Name:</label>
                <input type="text" name="sname" id="sname">
            </p>
  
            <p>
                <label for="test1">Test_1 Mark:</label>
                <input type="number" name="test1" id="test1">
            </p>
  
            <p>
                <label for="test2">Test_2 Mark:</label>
                <input type="number" name="test2" id="test2">
            </p>
  
              <p>
                <label for="test3">Test_3 Mark:</label>
                <input type="number" name="test3" id="test3">
            </p>
              
  
              
            <input type="submit" name="submit" value="Insert Record">
        </form>
<hr/>
<?php
        if(isset($_POST['submit'])){

        $id =  $_REQUEST['id'];
        $name = $_REQUEST['sname'];
        $t1 =  $_REQUEST['test1'];
        $t2 = $_REQUEST['test2'];
        $t3 = $_REQUEST['test3'];
          
        
        $sql = "INSERT INTO student_grades  VALUES ('$id', 
            '$name','$t1','$t2','$t3')";
          
        if(mysqli_query($mysqli, $sql)){
            echo "<h3>data stored in a database successfully."; 
        } else{
            echo "ERROR: " . mysqli_error($mysqli);
        }
          
        
        mysqli_close($mysqli);
    }
        ?>



</body>
</html>
