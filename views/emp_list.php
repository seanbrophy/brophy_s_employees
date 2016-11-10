<div id="content">
<ul>
<?php
while($emp = mysqli_fetch_array($employees)) {
	echo '<li>
			<img src="images/'.$emp['emp_thumb'].'" alt="'.$emp['emp_fname'].' '.$emp['emp_lname'].' Thumbnail">
			<a href="index.php?id='.$emp['emp_id'].'">'.$emp['emp_fname'].' '.$emp['emp_lname'].'</a>
		  </li>';
}
?>
</ul>
</div>