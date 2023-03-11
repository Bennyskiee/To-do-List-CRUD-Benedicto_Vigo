<?php
	require('config/config.php');
	require('config/db.php');

	// Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
    $id = mysqli_real_escape_string($conn,$_POST['id']);
		$task_name = mysqli_real_escape_string($conn,$_POST['task_name']);
		$task_description = mysqli_real_escape_string($conn,$_POST['task_description']);
		$task_due_date = mysqli_real_escape_string($conn,$_POST['task_due_date']);
    $task_status = mysqli_real_escape_string($conn,$_POST['task_status']);
    

		$query = "INSERT INTO tasks(task_name, task_description, task_due_date, task_status) VALUES('$id', '$task_name', '$task_description','$task_due_date','$task_status')";

		if(mysqli_query($conn, $query)){
      header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>


<table>
  <tr>
    <th>id<th> 
    <th>task_name</th>
    <th>task_description</th>
    <th>task_due_date</th>
    <th>task_status</th>
</tr>
<tr>
<td>hh</td>
<td>hh</td>
</tr>
</table>
           

                <button onclick="edit();">Edit</button>
<button onclick="edit();">Delete</button>