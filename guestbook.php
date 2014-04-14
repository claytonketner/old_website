<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "head.php" ?>
</head>

<body>

<?php include "header.php" ?>

<div id="all-content-wrapper">
	<div id="content-wrapper" class="content-sized">
		<div id="content" class="sidebar-or-content">
			<h2 id="content-header">Template Header</h2> <a href="#results">Skip to result</a>

			<h3>Add yourself to the guest book:</h3>
			<form name="guest-info" action="submit.php" method="POST">
				<input type="text" name="name" placeholder="John Doe"><br>
				<textarea rows="4" cols="60" name="message"></textarea><br>
				<input type="submit" value="Submit">
			</form>

			<h3>See what other people have written:</h3>
			<table>
				<tr id="header-row"><td>Name</td><td>Date</td><td>Message</td></tr>
				<?php include "guestbook-contents.php" ?>
			</table>

		</div>
		<div class="after-float"></div>
	</div>
</div>

<?php include "footer.php" ?>

</body>
</html>