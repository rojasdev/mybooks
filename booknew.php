<div class="w3-container">
  <h3>Add New Book</h3>
  <form method="POST" action="process/process.book.php?action=create">
  <table class="w3-table w3-striped w3-border">
    <tr>
        <td>
        <label for="title">Title: </label>
        <input type="text" id="title" name="bk_title" placeholder="Book Title" required/></td>
        </td>
    </tr>
    <tr>
      <td>
      <label for="author">Author: </label>
      <input type="text" id="author" name="bk_author" placeholder="Author" required/></td>
    </tr>
    <tr>
      <td><label for="year">Year Published: </label>
      <input type="number" id="year" name="bk_year" placeholder="YYYY" min="1980" max="<?php echo date("Y");?>">
      </td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="Add"/></td>
    </tr>
  </table>
  </form>
</div>