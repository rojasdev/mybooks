<div class="w3-container">
  <h3>Update Book Record</h3>
  <form method="POST" action="process/process.book.php?action=update">
  <table class="w3-table w3-striped w3-border">
    <tr>
      <td>
      <label for="title">Title: </label>
      <input type="hidden" name="bk_id" value="<?php echo $id;?>"/>
      <input type="text" id="title" name="bk_title" placeholder="Book Title" value="<?php echo $bookobj->get_book_title($id);?>" required/></td>
    </tr>
    <tr>
      <td><label for="author">Author: </label>
      <input type="text" id="author" name="bk_author" placeholder="Author" value="<?php echo $bookobj->get_book_author($id);?>" required/></td>
    </tr>
    <tr>
      <td>
      <label for="year">Year Published :</label>
      <input type="number" id="year" name="bk_year" placeholder="YYYY" min="1980" max="<?php echo date("Y");?>" value="<?php echo $bookobj->get_book_year($id);?>">
      </td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="Update"/></td>
    </tr>
  </table>
  </form>
</div>