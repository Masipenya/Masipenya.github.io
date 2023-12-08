<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM course WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Курс успешно удален';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Выберите курс, который хотите удалить';
	}

	header('location: course.php');
	
?>