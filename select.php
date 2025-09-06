
<html>

<head>
	<link rel="stylesheet" href="assets/css/bootstrap-5.0.5-alpha.min.css">
	<link rel="stylesheet" href="assets/css/newstyle.css">

</head>

<?php
include('common/connection.php');

$sql = "select * from user_tbl";
$result = mysqli_query($con, $sql);


?>

<a href='user_registration.php'>Add User</a>

<select>
	
</select>
<div class= table >

<table style="margin-top: 20px;">
	<thead>
		<th>ID</th>
		<th>NAME</th>
		<th>Dob</th>
		<th>GENDER</th>
		<th>CONTACT</th>
     	<th>EMAIL</th>
		<th>ADDRESS</th>
		<th>CITY</th>
		<th>STATE</th>
		<th>PINCODE</th>
		<th>ADDRESS_PROOF</th>
		<th>IDENTITY_PROOF</th>
		<th>Option</th>
	</thead>
	<tbody>

	<?php	
	while($row = mysqli_fetch_assoc($result))
	{
	echo "<tr>
				<td>".$row['user_id']."</td>
				<td>".$row['user_name']."</td>
				<td>".$row['user_dob']."</td>
				<td>".$row['user_gender']."</td>
				<td>".$row['user_phonenumber']."</td>
				<td>".$row['user_email']."</td>
				<td>".$row['user_address']."</td>
				<td>".$row['user_city']."</td>
				<td>".$row['user_state']."</td>
				<td>".$row['user_pincode']."</td>
				<td>".$row['user_addressproof']."</td>
				<td>".$row['user_identityproof']."</td>
				<td><a href ='edit.php'>Edit</a>|<a href ='delete.php'>Delete</a></td>
		  </tr>";
		}	
	?>

	</tbody>
</table>	
</div>