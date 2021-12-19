<!-- exercise from Chapter 4 from pages 215-217. inc_header.html, inc_footer.php, inc_home.html, inc_contact.html and inc_buttonnav.html must be in the same directory in order for the site to run properly. Needs XAMPP HTTP server installed to run -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web Template</title>
</head>
<body style="background-color: paleturquoise;">
	<?php include("inc_header.html"); ?>
	<div style="width: 20%; text-align: center; float: left; padding-bottom: 4em;">
		<?php include("inc_buttonnav.html"); ?>
	</div>
	<!-- Start of Dynamic content Section -->
	<?php
	// Check if the submit buttons were clicked or if we just opened the page
	if(isset($_GET["content"])) {
			switch($_GET["content"]){
				case "About Me":
					include("inc_about.html");
					break;
				case "Contact Me";
					include("inc_contact.html");
					break;
				default:
					include("inc_home.html");
					break;	
			}// End of Switch Statement
		}
		else {
			// no button was clicked
			include("inc_home.html");
		}

	?>
	<!-- End of Dynamic content Section -->
<?php include("inc_footer.php"); ?>
</body>
</html>