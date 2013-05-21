
	<h1>Create Page</h1>

	<div id="body">
		<h4><?php if(isset($summary) && $summary != "") echo $summary; ?></h4>
		<form method="POST" action="http://localhost/ci/index.php/create/input/">
			Name:<input type="text" name="name" size="50"/><br/>
			Contact:<input type="text" name="contact" size="50"/><br/>
			Message: <textarea rows="4" cols="20" name="message"></textarea><br/>
			<input type="submit" value="Submit" />
		</form>
	</div>
