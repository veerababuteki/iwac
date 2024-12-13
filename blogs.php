<?php
require 'top.php'; // Include header or other necessary files

// Fetch data from the JSON file
$jsonData = file_get_contents('blogs.json');
$blogs = json_decode($jsonData, true); // Decode JSON to associative array
?>

<!-- =========== Hero Section Start =========== -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 order-2 order-lg-1 text-center text-lg-start">
                <h1 class="display-4 fw-bold mb-4" style="font-size:3rem;">Welcome to Our Blogs</h1>
                <p>Ready to dive into a world of fresh perspectives? Our blog is packed with insights, tips, and stories
                    that will spark your curiosity. Don’t miss out—start reading and fuel your journey of discovery
                    today!</p>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center">
                <img src="images/photos/blog-banner.jpg" alt="Blogs" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>
<!-- =========== Hero Section End =========== -->

<!-- =========== Blog Section Start =========== -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Latest Blog Posts</h2>
        <div class="row g-4">
            <?php
      if (!empty($blogs)) {
        foreach ($blogs as $blog) {
          $title = $blog['title'];
          $content = $blog['content'];
          $image = $blog['image'];
          $id = $blog['id'];
      ?>
            <!-- Blog Card Start -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="<?php echo $image; ?>" class="card-img-top" alt="Blog Post Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title; ?></h5>
                        <p class="card-text text-muted"><?php echo substr($content, 0, 100) . '...'; ?></p>
                        <a href="blog-detail.php?id=<?php echo $id; ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Blog Card End -->
            <?php
        }
      } else {
        echo "<p>No blog posts found.</p>";
      }
      ?>
        </div>
    </div>
</section>
<!-- =========== Blog Section End =========== -->

<?php require 'footer.php'; ?>