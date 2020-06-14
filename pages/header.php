<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Dynamic Web Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" contents="Demo Page">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css/style.css?v=<?php echo (rand());?>" type="text/css">
    </head>
    <body> 
        <div id="header">
        <label for="show-menu" class="show-menu"><img src="icons/menu.svg"/></label>
        <input type="checkbox" id="show-menu" role="button">
        <h1>My Web Site</h1>
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=gallery">Gallery</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact Us</a></li>
                    <?php
                    if(isset($_SESSION['authuser']) && $_SESSION['authuser'] == true){
                    ?>
                    <li><a href="index.php?page=manage">Manage</a></li>
                    <?php
                    }
                    
                    if(isset($_SESSION['authuser']) && $_SESSION['authuser'] == true){
                    ?>
                    <li><a href="index.php?q=logout" type="button">Logout</a></li>
                    <?php
                    }else{
                    ?>
                    <li><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a></li>
                    <?php
                    }
                    ?>
                    </ul>
        
        </div>
<!--- LOGIN / LOGOUT -->
<?php
// login process
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $user->check_login($username,$password);
	if($login){
		header("location: index.php");
	}
}
// logout process
if(isset($_GET['q'])){
	$user->user_logout();
	header("location: index.php");
}
?>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>E-Mail</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="submit">Login</button>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>      