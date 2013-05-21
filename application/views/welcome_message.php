
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<h4><?php if(isset($summary) && $summary != "") echo $summary; ?></h4>
		<div> <a href='http://localhost/ci/index.php/create/index'>Create Record</a>
		<table class='table'> 
			<tr>
	
				<td>Date</td>
				<td>Name</td>
				<td>Contact</td>
				<td>Message</td>
				<td>Action</td>
			</tr>
			<?php foreach($messages as $m){ ?>
				<tr>
				
					<td> <?php echo date("M-d-Y g:i", strtotime($m->date)); ?> </td>
					<td> <?php echo $m->name; ?> </td>
					<td> <?php echo $m->contact; ?> </td>
					<td> <?php echo $m->message; ?> </td>
					<td>
						 <a href='<?php echo "http://localhost/ci/index.php/edit/index/" . $m->id; ?>'>Edit</a>
						 <a href='<?php echo "http://localhost/ci/index.php/edit/delete/" . $m->id; ?>'>Delete</a>
				    </td>
				</tr>
			<?php } ?>
		</table>
	</div>
