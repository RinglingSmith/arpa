const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const articles = {};

app.use(bodyParser.json());

app.post('/api/articles', (req, res) => {
  const { title, content } = req.body;
  articles[title] = { content, created: new Date() };
  res.status(200).json({ message: 'Saved' });
});

app.get('/articles/:title', (req, res) => {
  const article = articles[req.params.title];
  if (article) {
    res.send(`<h1>${req.params.title}</h1><p>${article.content}</p>`);
  } else {
    res.status(404).send('Article not found');
  }
});

app.listen(3000, () => console.log('Server running on port 3000'));
