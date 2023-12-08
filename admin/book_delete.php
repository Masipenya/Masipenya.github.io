<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];
		$sql = "DELETE FROM books WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Книга успешно удалена';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Выберите кингу уоторую хотите удалить';
	}

	header('location: book.php');
	
?>