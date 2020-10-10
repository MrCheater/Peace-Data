function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

const randomKey = function(len) {
  const buf = []
  const chars = 'abcdefghijklmnopqrstuvwxyz0123456789'
  const charlen = chars.length;

  for (let i = 0; i < len; ++i) {
    buf.push(chars[getRandomInt(0, charlen - 1)]);
  }

  return buf.join('');
};

export default { randomKey }
