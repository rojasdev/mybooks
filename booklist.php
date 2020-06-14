<div class="w3-container">
<a href="index.php?page=manage&subpage=create">Add New Book</a>
<table class="w3-table w3-striped w3-border">
    <tr>
      <th>Book Title</th>
      <th>Author</th>
      <th>Year Published</th>
    </tr>
    <?php
    // utilize the object created from the index file to access the class function
    // get_book_list()
    $list = $bookobj->get_book_list();
    foreach($list as $value){
    ?>
    <tr>
      <td><a href="index.php?page=manage&subpage=detail&id=<?php echo $value['bk_id'];?>"><?php echo $value['bk_title'];?></a></td>
      <td><?php echo $value['bk_author'];?></td>
      <td><?php echo $value['bk_year'];?></td>
    </tr>
    <?php
     }
    ?>
</table>
</div>