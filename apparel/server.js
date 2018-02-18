const express = require('express');
const database = require('./database');

const HOST = '0.0.0.0';
const PORT = 80;
const app = express();

// the root route
app.get('/', (req, res) => {
  database.query('SELECT * FROM apparel', (error, response) => {
    if (error) {
      res.status(500);
      return res.json(error);
    }
    res.status(200);
    return res.json(response.rows);
  });
});

// listen to the host
app.listen(PORT, HOST);
console.log(`Server running : ${HOST}:${PORT}`);
