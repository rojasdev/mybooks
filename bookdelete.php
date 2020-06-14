<div class="w3-container">
  <h3>Confirm Deletion</h3>
  <table class="w3-table w3-striped w3-border">
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
  <form method="POST" action="process/process.book.php?action=delete">
  <table class="w3-table w3-striped w3-border">
    <tr>
      <td>
      <input type="hidden" name="bk_id" value="<?php echo $id;?>"/>
      <input type="submit" name="submit" value="Confirm"/></td>
    </tr>
  </table>
  </form>
</div>