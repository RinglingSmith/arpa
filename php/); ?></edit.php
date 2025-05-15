<?php
$pageName = $_GET['pageToEdit'] ?? '';
$content = '';
$file = "pages/$pageName.txt";

if (file_exists($file)) {
    $content = file_get_contents($file);
}
?>

<h2>Editing: <?php echo htmlspecialchars($pageName); ?></h2>

<form method="post" action="save.php">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($pageName); ?>">
    <textarea name="content" rows="20" cols="80"><?php echo htmlspecialchars($content); ?></textarea>
    <br>
    <button type="submit">Save</button>
</form>
