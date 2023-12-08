<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM category WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Категория успешно удалена';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Выберите категорию для удаления';
	}

	header('location: category.php');
	
?>