<div class="w3-container">
  <h1>Book Details</h1>
  <table class="w3-table w3-striped w3-border">
  <tr>
      <th>Book Details</th>
      <td>
        <a href="index.php?page=manage&subpage=update&id=<?php echo $id;?>">Update</a> |
        <a href="index.php?page=manage&subpage=delete&id=<?php echo $id;?>">Remove</a>
      </td>
    </tr>
    <tr>
      <th>Book Title</th>
      <td><?php echo $bookobj->get_book_title($id);?></td>
    </tr>
    <tr>
      <th>Author</th>
      <td><?php echo $bookobj->get_book_author($id);?></td>
    </tr>
    <tr>
      <th>Year Published</th>
      <td><?php echo $bookobj->get_book_year($id);?></td>
    </tr>
  </table>
</div>