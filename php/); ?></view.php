<?php
$pageName = $_GET['pageToEdit'] ?? '';
$file = "pages/$pageName.txt";

if (file_exists($file)) {
    $content = nl2br(htmlspecialchars(file_get_contents($file)));
    echo "<h2>" . htmlspecialchars($pageName) . "</h2>";
    echo "<div>$content</div>";
} else {
    echo "<p>Page not found. <a href='index.php?page=edit&pageToEdit=" . urlencode($pageName) . "'>Create it?</a></p>";
}
?>
