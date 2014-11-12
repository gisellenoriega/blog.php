<?php
// calls config.php out of model folder
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
	<!-- this is for title -->
	<!-- label=text thats displayed in front of the text box -->
	<!-- label is for title -->
<form>
	<div>
		<label for="title">Title: </label>
		<input type="text" name="title" />
	</div>
	<!-- holds our info for our posts -->
	<div>
	<!-- spans up more than one line -->
	<!-- for our posts -->
	<!-- textarea allows us to type as many sentences as we can -->
			<label for="post">Post: </label>
		<textarea name="post"></textarea>
		<!-- submit button submits it somewhere else -->
		<button type="submit">Submit</button>
	</div>
</form>