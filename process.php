<?php
if(isset($_POST['submit'])) 
{
	$target = "Upload/";
	$target = $target.basename($_FILES['uploaded']['name'];
	$ok = 1; 
	if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))
}
		?>
		<script>alert('File Successfully Saved!')</script>
	<?php
	{
	else
	{
		<script>alert('Something Went Wrong!')</script>
		<?php
	}
	}
?>