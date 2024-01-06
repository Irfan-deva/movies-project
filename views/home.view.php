<div class="wrapper">
  <?php
  loadPartial('header'); ?>
  <div class="content">
    <div class="movies">
      <div class="title py">
        <div class="latest">Latest</div>
        <div class="view-all">View All &gt;&gt;</div>
      </div>

      <div class="movie-cards">
        <?php
        $count = -1;
        $count_title = ['one', 'two', 'three', 'four', 'five'];
        foreach ($data as $movie) {
          $count++;
          echo "
          <div class='card $count_title[$count]'>
        <div class=card-header>
        <div class='card-cover'>
        <img src='http://127.0.0.1/MOVIESPROJ/images/spiderman.jpeg'/>
        </div>
        <div class=card-footer>
        $movie[_name]
        </div>
        </div>
        </div>
        ";
        }
        ?>
      </div>
    </div>
    <div class="latest">
      <div class="movies">
        <div class="title">
          <div class="latest">Latest</div>
          <div class="view-all">View All &gt;&gt;</div>
        </div>

        <div class="movie-cards">
          <?php
          $count = -1;
          $count_title = ['one', 'two', 'three', 'four', 'five'];
          foreach ($data as $movie) {
            $count++;
            echo "
          <div class='card $count_title[$count]'>
        <div class=card-header>
        <div class='card-cover'>
        <img src='http://127.0.0.1/MOVIESPROJ/images/spiderman.jpeg'/>
        </div>
        <div class=card-footer>
        $movie[_name]
        </div>
        </div>
        </div>
        ";
          }
          ?>
        </div>
      </div>
    </div>
    <div class="popular">
      <div class="movies">
        <div class="title">
          <div class="latest">Latest</div>
          <div class="view-all">View All &gt;&gt;</div>
        </div>

        <div class="movie-cards">
          <?php
          $count = -1;
          $count_title = ['one', 'two', 'three', 'four', 'five'];
          foreach ($data as $movie) {
            $count++;
            echo "
          <div class='card $count_title[$count]'>
        <div class=card-header>
        <div class='card-cover'>
        <img src='http://127.0.0.1/MOVIESPROJ/images/spiderman.jpeg'/>
        </div>
        <div class=card-footer>
        $movie[_name]
        </div>
        </div>
        </div>
        ";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <?php
  loadPartial('footer'); ?>
</div>