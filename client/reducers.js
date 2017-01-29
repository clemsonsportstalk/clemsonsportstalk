import {combineReducers} from 'redux'

import {
  busy,
  errors,
  message
} from 'ozymandias/client/reducers'

import currentUser from './reducers/current-user'
import {REPLACE} from './actions'

const pass = (state = null) => state

const reducer = combineReducers({
  admin: pass,
  bugsnag: pass,
  busy,
  currentUser,
  errors,
  message,
  more: pass,
  path: pass,
  statusCode: pass,
  token: pass,
  url: pass,
  version: pass
})

export default (state, action) => {
  if (action.type === REPLACE) state = action.state
  return reducer(state, action)
}
