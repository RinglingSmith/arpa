<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to My Wiki">
    <title>My Wiki</title>
    <link rel="stylesheet" href="style.css">
</head>
<div class="content-warp">
<header>
    <h1>ARPA</h1>
     <form id="article-form">
  <input type="text" id="title" placeholder="Article Title" required />
  <textarea id="content" placeholder="Write your article here..." required></textarea>
  <button type="submit">Save</button>
</form>

<script>
document.getElementById('article-form').onsubmit = async function (e) {
  e.preventDefault();
  const title = document.getElementById('title').value;
  const content = document.getElementById('content').value;

  await fetch('/api/articles', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ title, content })
  });

  alert('Article saved!');
};
</script>
</header>
<div class="sidebar">
            <nav>
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                    <li><a href="index.php?page=edit&pageToEdit=<?php echo urlencode($page); ?>">Edit</a></li>
                </ul>
            </nav>
        </div>
<body>
    <div class="contaner">
    <div class="content">
    <div class="page-title"><h1>Main Page</h1></div>
        <h2>Anomalies Research Protocol Agency</h2>
        <p>Warning this is beta page of ARPA contain the classified informations. Those who enter this website will be eliminated. Know what your doing.</p>
    </div>
    </div>
    </div>
    <footer>
        <p>&copy; 2025 ARPA. All rights reserved.</p>
        <p> Powered by Github<p>
    </footer>
</body>
</html>