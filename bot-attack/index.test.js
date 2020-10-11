import testcafe from 'testcafe';

fixture `Bot Attack`
  .page `http://vtb.metacron.ru/auth`;

test('Login', async t => {
  // Input Login
  await t.typeText('#input_1', 'Mister Robot')
  // Input Password
  await t.typeText('#input_2', 'Mister Robot')
  // Click to recaptcha
  await t.click('#recaptcha-anchor')
  // Enter
  await t.click('body > div.auth_content > div.half_block.auth_container > div > form > input')
});
