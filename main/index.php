<?php
$page = $_GET['page'] ?? 'view'; // default is 'view'
$pageToEdit = $_GET['pageToEdit'] ?? '';

if ($page === 'edit') {
    include 'edit.php';
} elseif ($page === 'view' && $pageToEdit) {
    include 'view.php';
} else {
    echo "Welcome to the wiki!";
}
?>
