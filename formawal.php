<?php 
	if (isset($_POST['submit'])) {

		include "hobi.php";
		
	}
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST">
		
		<label for="username">Username : </label>
		<input type="text" name="username"><br><br>
		
		<label for="password">Password : </label>
		<input type="password" name="password"><br><br>

		<input type="submit" name="submit" value="LOGIN">
	</form>

?>
