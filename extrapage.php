<section class="section-news section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">Latest News</h2>
          </div>
          <div class="title-link">
            <a href="newslist.php">All News
              <span class="ion-ios-arrow-forward"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="new-carousel" class="owl-carousel owl-theme">
      <!-- News items looped here (same as before) -->
      <?php
      // Include database connection
      require("config.php");

      // Query to fetch news data from the database
      $query = "SELECT id, title, short_content, full_article, image, source, article_name, date FROM news";
      $result = mysqli_query($con, $query);

      // Check if data exists
      if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $image_path = "admin/news/" . htmlspecialchars($row['image']); // Construct the image path
          ?>
          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box" style="min-height: 350px; display: flex; flex-direction: column; justify-content: space-between;">
              <div class="img-box-b" style="height: 200px; overflow: hidden;">
                <img src="<?php echo $image_path; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>"
                  class="img-fluid w-100" style="object-fit: cover; height: 100%;" />
              </div>
              <div class="card-overlay p-3 text-white" style="flex-grow: 1;">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b"><?php echo htmlspecialchars($row['article_name']); ?></a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2" style="height: 50px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                      <a href="news-single.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['title']); ?></a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b"><?php echo date("d M. Y", strtotime($row['date'])); ?></span>
                  </div>
                </div>
                <!-- <div class="card-description-b">
                  <p style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                    <?php echo htmlspecialchars($row['short_content']); ?>
                  </p>
                </div>
                <div class="card-source-b">
                  <span>Source: <?php echo htmlspecialchars($row['source']); ?></span>
                </div> -->
              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "<p>No news found.</p>";
      }
      ?>
    </div>
  </div>
  </section>