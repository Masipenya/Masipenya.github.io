<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$code = $_POST['code'];
		$title = $_POST['title'];
		
		$sql = "INSERT INTO course (code, title) VALUES ('$code', '$title')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Курс успешно добавлен';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Заполните форму';
	}

	header('location: course.php');

?>