import { defaultUrl } from './config'

describe('iframe', () => {
  let toWrap = false
  let wrapped = false
  beforeAll(async () => {
    await page.goto(`${defaultUrl}/dist/03-archive-default.php`)
    const iframe = await page.evaluate(() => document.querySelectorAll('.wysiwyg iframe').length)
    const table = await page.evaluate(() => document.querySelectorAll('.wysiwyg table').length)
    const iframeWrapper = await page.evaluate(() => document.querySelectorAll('.wysiwyg .iframe__wrapper').length)
    const tableWrapper = await page.evaluate(() => document.querySelectorAll('.wysiwyg .table__wrapper').length)
    toWrap = iframe + table
    wrapped = iframeWrapper + tableWrapper
  });

  test('WYSIWYG table and iframe must be wrapped', async () => {
    await expect(toWrap).toEqual(wrapped)
  })
})