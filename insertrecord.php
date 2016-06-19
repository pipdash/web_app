<html>
<head>

  <title>Insert Record</title>
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
						<div id="section5" data-role="page" data-theme="a">
        <div data-role="header" data-theme="a">
            <h1>Create Account</h1>
            <a href="#home" data-icon="home" data-transition="fade">Home</a></div>
            <article data-role="content">
<?php

                // Connect to MySQL
 				$mysqli = new mysqli( 'localhost', 'root','n8jMSFtUVKxL2q8c', 'Roundtown' );



               $fname = (isset($_POST['fname'])    ? $_POST['fname']   : '');
               $lname = (isset($_POST['lname'])    ? $_POST['lname']   : '');
               $email = (isset($_POST['address'])    ? $_POST['email']   : '');
               $comments = (isset($_POST['comments'])    ? $_POST['comments']   : '');



			  // Insert our data
			  $sql = "INSERT INTO users ( fname, lname, email, comments) 	VALUES ( '{$mysqli->real_escape_string(isset($_POST['fname'])    ? $_POST['fname']   : '')}' , '{$mysqli->real_escape_string(isset($_POST['lname'])    ? $_POST['lname']   : '')}'	, '{$mysqli->real_escape_string(isset($_POST['email'])    ? $_POST['email']   : '')}' 	, '{$mysqli->real_escape_string(isset($_POST['comments'])    ? $_POST['comments']   : '')}'	)";


			  $insert = $mysqli->query($sql);

			  // Print response from MySQL
			  if ( $insert ) {
				echo "Success! Your account has successfully been added to our system. Row ID: {$mysqli->insert_id}";
			  } else {
				die("Error: {$mysqli->errno} : {$mysqli->error}");
			  }


            ?>
							</article>
						<footer>
                <div data-role="footer" data-postiton="fixed" data-theme="a">
	               <h6>'Round Town &copy; 2016</h6>
	            </div>
               </footer>
		</div>
	</body>
</html>