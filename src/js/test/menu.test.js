import { defaultUrl } from './config'

describe('menu', () => {
  let menu = false
  beforeAll(async () => {
    await page.goto(`${defaultUrl}/dist/01-home.php`)
    menu = await page.evaluate(() => document.querySelectorAll('.js-menu').length)
  });

  test('Menu must have init class', async () => {
    await expect(menu).toBeTruthy()
  })
})