<?php
require 'top.php'; // Include header or necessary files

// Fetch the blog ID from the URL
$blogId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch data from the JSON file
$jsonData = file_get_contents('blogs.json');
$blogs = json_decode($jsonData, true); // Decode JSON to associative array

// Find the blog with the matching ID
$blogDetails = null;
foreach ($blogs as $blog) {
    if ($blog['id'] === $blogId) {
        $blogDetails = $blog;
        break;
    }
}

// Function to format content using regex
function formatContent($content) {
    // Apply formatting for headings (generalize to match any bold text followed by a colon)
    $content = preg_replace('/\*\*(.+?):\*\*/', '<h5>$1</h5>', $content);

    // Highlight bullet points
    $content = preg_replace('/-\s(.*?)(?=\n|$)/', '<li>$1</li>', $content);

    // Wrap lists with <ul>
    $content = preg_replace_callback('/(<li>.*?<\/li>)/s', function ($matches) {
        return '<ul>' . $matches[1] . '</ul>';
    }, $content);

    // Format numbered steps
    $content = preg_replace('/(\d+\.\s)(.*?)(?=\n|$)/', '<li>$2</li>', $content);
    
    // Wrap numbered steps with <ol>
    $content = preg_replace_callback('/(<li>.*?<\/li>)/s', function ($matches) {
        return '<ol>' . $matches[1] . '</ol>';
    }, $content);

    // Add paragraph tags for other text
    $content = preg_replace('/(?<!<h2>|<li>)\n/', '<br>', $content); // Add line breaks for standalone text
    $content = '<p>' . preg_replace('/\n+/', '</p><p>', trim($content)) . '</p>'; // Wrap in <p> tags

    return $content;
}

?>

<div class="container py-5">
    <?php if ($blogDetails): ?>
        <h1 class="display-4 mb-4"><?php echo htmlspecialchars($blogDetails['title']); ?></h1>
        <img src="<?php echo htmlspecialchars($blogDetails['image']); ?>" class="img-fluid mb-4" alt="Blog Image">
        <div class="blog-content container">
            <?php echo formatContent(htmlspecialchars($blogDetails['content'])); ?>
        </div>
    <?php else: ?>
        <p class="text-danger">Blog not found!</p>
    <?php endif; ?>
</div>

<?php require 'footer.php'; ?>
