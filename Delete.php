
o
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr> 
                    <th scope="col">id</th>
                    <th scope="col">task_name</th>
                    <th scope="col">task_description</th>
                    <th scope="col">task_due_date</th>
                    <th scope="col">task_status</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($persons as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['Person_ID'];?></th>
                    <td><?php echo $person['task_name'];?></td>
                    <td><?php echo $person['task_description'];?></td>
                    <td><?php echo $person['address'];?></td>
                    <td><?php echo $person['logdt'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
