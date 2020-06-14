<div id="page-title">
    <h1> Latest Available Books</h1>
</div>
<section class="breweries">
    <ul>
        <?php
        // utilize the object created from the index file to access the class function
        // get_book_list()
        $list = $bookobj->get_book_list();
        foreach($list as $value){
        ?>
      <li>
        <figure>
          <!-- Photo by Quentin Dr on Unsplash -->
          <img src="https://images.unsplash.com/photo-1471421298428-1513ab720a8e" alt="">
            <figcaption>
              <h3><?php echo $value['bk_title'];?></h3>
            </figcaption>
        </figure>
        <p>Author: <?php echo $value['bk_author'];?>, <?php echo $value['bk_year'];?></p>
      </li>
      <?php
        }
      ?>
    </ul>
</section>