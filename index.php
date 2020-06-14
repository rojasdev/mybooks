<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
/*
The include statement includes and evaluates the specified file.
When a file is included, the code it contains inherits the variable 
scope of the line on which the include occurs. 
Any variables available at that line in the calling file will be 
available within the called file, from that point forward. 
However, all functions and classes defined in the included file 
have the global scope.
*/
include 'system/config.php';
include 'classes/class.book.php';
include 'classes/class.user.php';
$user = new User();

// instantiate an object from class Book
$bookobj = new Book();
?>
<?php require_once("pages/header.php"); ?>
<div id="main-contents">
        <?php
            switch($page){
                case 'gallery':
                    require_once 'gallery.php';
                break; 
                case 'about':
                    require_once 'about.php';
                break; 
                case 'contact':
                    require_once 'contact.php';
                break; 
                case 'manage':
                    require_once 'manage.php';
                break; 
                default:
                    require_once 'main.php';
                break; 
            }
        ?>
</div>
<?php echo file_get_contents("pages/footer.php"); ?>