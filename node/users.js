const users = [
  { id: 1, username: 'Anton', password: 'Anton', email: 'anton@peace.data' },
  { id: 2, username: 'Artem', password: 'Artem', email: 'artem@peace.data' },
  { id: 3, username: 'Stanislav', password: 'Stanislav', email: 'stanislav@peace.data' },
  { id: 4, username: 'Alexander', password: 'Alexander', email: 'alexander@peace.data' },
  { id: 5, username: 'Alexey', password: 'Alexey', email: 'alexey@peace.data' },
];

const keys = {}

function findById(id, fn) {
  const idx = id - 1;
  if (users[idx]) {
    fn(null, users[idx]);
  } else {
    fn(new Error('User ' + id + ' does not exist'));
  }
}

function findByUsername(username, fn) {
  for (let i = 0, len = users.length; i < len; i++) {
    const user = users[i];
    if (user.username === username) {
      return fn(null, user);
    }
  }
  return fn(null, null);
}

function findKeyForUserId(id, fn) {
  return fn(null, keys[id]);
}

function saveKeyForUserId(id, key, fn) {
  keys[id] = key;
  return fn(null);
}

export {
  findById,
  findByUsername,
  findKeyForUserId,
  saveKeyForUserId
}
