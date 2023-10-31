const express = require('express');
const app = express();
const port = 3000;

app.use(express.static('public')); // Assuming HTML files are in a "public" directory

app.get('/', (req, res) => {
  res.sendFile(__dirname + '/public/index.html'); // Replace "public" with your directory structure
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
