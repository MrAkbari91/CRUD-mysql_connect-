<?php 

include 'database.php';

	$result = mysql_query("SELECT * FROM stud", $con);
	$num_rows = mysql_num_rows($result);

  	if ($num_rows > 0) 
	{
?>
	<div id="printableArea">
   
		<table border="2">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>mob</th>
					<th>Action</th>
					<th>Action</th>
					<th>Action</th>
				</tr>
			</thead>
  		<tbody>
		<?php
   
    	while($row = mysql_fetch_assoc($result)) 
		{
			 echo "<tr>
			 <td>".$row["sid"]."</td>
			 <td>".$row["sname"]." </td>	
			 <td>".$row["mob"]."</td>
			 <td><a href=update.php?sid=".$row["sid"].">Edit</a></td>	 
			 <td><a href=delete.php?sid=".$row["sid"].">delete</a></td>
			 <td><a href=view.php?sid=".$row['sid'].">view</a></td>

			 </tr>";
    	}

    ?>
		<a href=insert.php>Add New Record</a>
		</br>
  		</tbody>
		</table>
	</div>
	<?php
			} 
	else 
	{
        ?>
		<a href=insert.php>Add New Record</a><br>

        <?php
   		 echo "0 results";
	}
?>
