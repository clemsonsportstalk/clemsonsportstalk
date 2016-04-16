'use strict'

// Deps
const ozymandias = require('ozymandias')

// The App!
const app = module.exports = ozymandias()

// Home
app.get('/', (req, res) => res.render('index'))
