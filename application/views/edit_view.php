
	<h1>Edit Page</h1>
 
	<div id="body">
		<h4><?php if(isset($summary) && $summary != "") echo $summary; ?></h4>

		<form method="POST" action="http://localhost/ci/index.php/edit/input">
			<input type="hidden" name="id" value="<?php echo $entry->id; ?>"/>
			Name: <input type="text" name="name" value="<?php echo $entry->name; ?>"/><br/>
			Contact: <input type="text" name="contact" value="<?php echo $entry->contact; ?>"/> <br/>
			Message: <textarea rows="4" cols="20" name="message"><?php echo $entry->message; ?></textarea><br/>
			<input type="submit" value="Update" />
		</form>
	</div>
