<?php
class Book{
	public $db;
	// constructor for database connection purposes
	public function __construct(){
        // creating 'db' as mysqli connection object
		$this->db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
		if(mysqli_connect_errno()){
			echo "Database Could Not Connect.";
			exit;
		}
	}
    // Retrieve all records from the database table books
    public function get_book_list(){
		$sql = "SELECT * FROM tbl_books";
		$result = mysqli_query($this->db,$sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
        }
        $this->db->close();
		return $list;
    }
    // Adding a new record to the database
	public function add_book($title,$author,$year){
		$sql = "INSERT into tbl_books(bk_title,bk_author,bk_year)
				VALUES('$title','$author','$year')";
        $result=mysqli_query($this->db,$sql) or 
		die(mysqli_error()."Error Saving...");
		$bk_id = $this->db->insert_id; // retrieve create record id 
        $this->db->close();
		return $bk_id;
	}
	 // Retrieve a single record from the database table books
	 public function get_book_title($id){
		$sql = "SELECT bk_title FROM tbl_books WHERE bk_id = '$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			extract($row);
			$title = $bk_title;
		}
		return $title;
	}
	public function get_book_author($id){
		$sql = "SELECT bk_author FROM tbl_books WHERE bk_id = '$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			extract($row);
			$author = $bk_author;
		}
		return $author;
	}
	public function get_book_year($id){
		$sql = "SELECT bk_year FROM tbl_books WHERE bk_id = '$id'";
		$result=mysqli_query($this->db,$sql);
		while($row=mysqli_fetch_assoc($result)){
			extract($row);
			$year = $bk_year;
		}
		return $year;
	}
	// Updating a record to the database
	public function update_book($id,$title,$author,$year){
		$sql="UPDATE tbl_books SET bk_title='$title', 
			bk_author='$author', bk_year='$year' WHERE bk_id = '$id'";
			$result=mysqli_query($this->db,$sql) or 
			die(mysqli_error()."Error Saving...");
			$this->db->close();
		return $result;
	}
	// Deleting a record to the database
	public function delete_book($id){
		$sql="DELETE FROM tbl_books WHERE bk_id = '$id'";
			$result=mysqli_query($this->db,$sql) or 
			die(mysqli_error()."Error Deleting...");
			$this->db->close();
		return $result;
	}
}