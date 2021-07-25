<?php
	if(isset($_GET['css'])) {
		$css = $_GET['css'];
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cascading Style Sheets</title>
	<?php if(isset($_GET['css'])) {
        ?>
		<link rel="stylesheet" href="<?php echo $css; ?>.css" type="text/css">
	<?php
    } ?>
</head>

<body>
	<div class="wrapper">

		<div id="top">
			<h1>Welcome to My Homepage</h1>
			<p>Use the menu to select different stylesheets.</p>
		</div>

		<div class="wrapper">

			<div id="menubar">
				<ul id="menulist">
					<li class="menuitem" onclick="window.open('?css=style1','_self');">Stylesheet 1</li>
					<li class="menuitem" onclick="window.open('?css=style2','_self');">Stylesheet 2</li>
					<li class="menuitem" onclick="window.open('?css=style3','_self');">Stylesheet 3</li>
					<li class="menuitem" onclick="window.open('?','_self');">No Stylesheet</li>
				</ul>
			</div>

			<div id="main">
				<h1>Same Page Different Stylesheets</h1>
				<p>
					This is a demonstrations of how different stylesheets can change the layout of the HTML page. You can change the layout of
					this page by selecting different stylesheets in the menu, or by selecting one of the following links:
					<br>

					<a href="?css=style1">Stylesheet 1</a>
					<a href="?css=style2">Stylesheet 2</a>
					<a href="?css=style3">Stylesheet 3</a>
				</p>

				<h2>No Styles</h2>
				<p>This page uses DIV elements to group different sections of the HTML pagge. Click
					<a href="?">here</a> to see how the page looks without stylesheets.</p>
			</div>

			<div id="sidebar">
				<h3>Side-Bar</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
				</p>
			</div>

		</div>

		<div id="bottom">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>

	</div>
</body>

</html>