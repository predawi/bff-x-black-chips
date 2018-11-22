import { defaultUrl } from './config'

describe('data-seo', () => {
  let href = false
  beforeAll(async () => {
    await page.goto(`${defaultUrl}/dist/03-archive-default.php`)
    const links = await page.evaluate(() => document.querySelectorAll('[data-seo]').length)
    if (links === 0) {
      return
    }
    href = await page.$$eval('[data-seo]:first-child a', a => a[0].href)
    await page.click('[data-seo]:first-child')
    await page.waitForNavigation()
  });

  test('Link must be spread into parent', async () => {
    if (href) {
      await expect(page.url()).toMatch(href)
    } else {
      await expect(href).toBeFalsy()
    }
  })
})