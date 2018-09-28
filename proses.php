<?php
	
	if (isset($_POST['submit'])) {
		# code...
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = array('user' => 'reza' , 'pass' => 'acil' );

		if ($username == $user['user'] && $password == $user['pass']) {
			# code...
			echo "Login Success !!";
			?>

			<h2>List Hobby<h2>
			<form method="POST">
				
				Renang<input type="checkbox" name="hobi[]" value="Renang"><br><br>
				Gaming<input type="checkbox" name="hobi[]" value="Gaming"><br><br>
				Jogging<input type="checkbox" name="hobi[]" value="Jogging"><br><br>
				Bulutangkis<input type="checkbox" name="hobi[]" value="Bulutangkis"><br><br>
				Choose Photo<input type="file" name="foto"><br>

				<input type="submit" name="submit" value="Input">
			</form>

<?php

	error_reporting(0);

		if (isset($_POST['submit'])) {
			# code...
			$data = $_POST['hobi[]'];
				foreach ($data as $hobbi) {
					# code...
					echo $hobbi;
				}
		}

		?>
		<?php

		}else{
			echo "Login Failed";
		}
	}
 ?>
