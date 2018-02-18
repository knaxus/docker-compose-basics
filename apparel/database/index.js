const { Pool } = require('pg');
const database = new Pool({ user: 'postgres', host: 'database' });
module.exports = database;
