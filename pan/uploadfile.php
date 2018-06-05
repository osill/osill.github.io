<?php
	if(isset($_FILES['userfile']) && isset($_POST['userID'])) {
		$uploaddir = './uploads/';
		$uploadfile = $uploaddir . $_POST['userID'] . "/" . basename($_FILES['userfile']['name']);
		if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
			echo "succeeded";
		} else {
			echo "failed";
		}
	} else {
		echo '
			<form action = "index.php" method = "post" enctype = "multipart/form-data">
			<lable for = "file">Filename: </lable>
			<input type = "file" name = "userfile" />
			<input type = "submit" value = "Send File" />
			</form>
		';
		
	}
?>