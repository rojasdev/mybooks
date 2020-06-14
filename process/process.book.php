<?php
include '../system/config.php';
include '../classes/class.book.php';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch($action){
    case 'create':
        create_book();
    break;
    case 'update':
        update_book();
    break;
    case 'delete':
        delete_book();
    break;
}

function create_book(){
	$title = ucwords($_POST['bk_title']); // ucwords() Upper Case per word
	$author = ucwords($_POST['bk_author']);
	$year = $_POST['bk_year'];
			
	$book = new Book();
	$result = $book->add_book($title,$author,$year);
		if($result){
			header("location: ../index.php?page=manage&subpage=detail&id=".$result);
		}else{
			header("location: ../index.php?page=manage");
		}
}
function update_book(){
    $id = $_POST['bk_id'];
    $title = ucwords($_POST['bk_title']); // ucwords() Upper Case per word
	$author = ucwords($_POST['bk_author']);
	$year = $_POST['bk_year'];
			
	$book = new Book();
	$result = $book->update_book($id,$title,$author,$year);
		if($result){
			header("location: ../index.php?page=manage&subpage=detail&id=".$id);
		}else{
			header("location: ../index.php?page=manage");
		}
}
function delete_book(){
    $id = $_POST['bk_id'];	
	$book = new Book();
	$result = $book->delete_book($id);
		if($result){
			header("location: ../index.php?page=manage");
		}else{
			header("location: ../index.php?page=manage");
		}
}
?>