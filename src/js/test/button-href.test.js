import { defaultUrl } from './config'

describe('data-href', () => {
  let href = false
  beforeAll(async () => {
    await page.goto(`${defaultUrl}/dist/03-archive-default.php`)
    const links = await page.evaluate(() => document.querySelectorAll('[data-href]').length)
    if (links === 0) {
      return
    }
    href = await page.$$eval('[data-href]:first-child', a => a[0].dataset.href)
    if (href === '#') {
      href = page.url() + href
      await page.click('[data-href]:first-child')
      return
    }
    await page.click('[data-href]:first-child')
    await page.waitForNavigation()
  });

  test('Button must redirect to given data-href', async () => {
    if (href) {
      await expect(page.url()).toMatch(href)
    } else {
      await expect(href).toBeFalsy()
    }
  })
})