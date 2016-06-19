<html>
<head>

  <title>Find User</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="themes/roundtown.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<link href="styles/custom.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> 
    <script type="text/javascript" src="jqueryform.js"></script>

</head>
		<body>
        <div data-role="header" data-theme="a">
            <h1>Find User</h1>
            <a href="#home" data-icon="home" data-transition="fade">Home</a></div>
            <article data-role="content">
				<div data-role="content">
	<?php
$servername = "localhost";
$username = "root";
$password = "n8jMSFtUVKxL2q8c";
$dbname = "Roundtown";


               $fname = (isset($_POST['fname'])    ? $_POST['fname']   : '');
               $lname = (isset($_POST['lname'])    ? $_POST['lname']   : '');
               $email = (isset($_POST['email'])    ? $_POST['email']   : '');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql= "SELECT users.id, 
users.fname, 
users.lname, 
users.email, 
users.comments, 
Address.Address, 
Address.Zip 
FROM users 
inner join Address 
on users.id=Address.UserID 
where fname = '$fname' 
OR lname = '$lname' 
OR email = '$email' LIMIT 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<b>id: " . $row["id"]. "</b><br>";
        echo "<b>Name: " . $row["fname"]. " " . $row["lname"]. "</b><br>";
        echo "<b>Email: " . $row["email"]. "</b><br>";
			  echo "<b>Comments: " . $row["comments"]. "</b><br>";
				echo "<b>Address: " . $row["Address"]. "</b><br>";
				echo "<b>Zip Code: " . $row["Zip"]. "</b><br>";
    }
} else {
    echo "Sorry there are no matches! Please check your entry and try again.";
}

mysqli_close($conn);

?>
</div>
	</body>
			            <footer>
                <div data-role="footer" data-postiton="fixed" data-theme="a">
	               <h6>'Round Town &copy; 2016</h6>
	            </div>
                </footer>
</html>