'use strict'

// The App!
const app = module.exports = require('ozymandias')()
const {get} = require('koa-route')

// Some settings.
Object.assign(app.context, {
  client: require('./client/component')
})

app.use(require('./layout'))

app.use(get('/', function *() { this.react() }))
