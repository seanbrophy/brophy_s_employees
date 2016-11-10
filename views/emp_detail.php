<div id="content">
	<div id="employee">
		<?php

		$emp = mysqli_fetch_array($employees);

		echo '<img src="images/'.$emp['emp_image'].'" alt="'.$emp['emp_fname'].' '.$emp['emp_lname'].' Thumbnail">';
		echo '<h2>'.$emp['emp_fname'].' '.$emp['emp_lname'].'</h2>';
		echo '<h3>Job Title: '.$emp['emp_job'].'</h3>';

		?>
	</div>
</div>