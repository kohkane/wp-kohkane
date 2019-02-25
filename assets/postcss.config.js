const postcssPresetEnv = require('postcss-preset-env')
const postcssNested = require('postcss-nested')
const hexrgba = require('postcss-hexrgba')

module.exports = {
  plugins: [
    hexrgba(),
    postcssPresetEnv({
      stage: 0,
      importFrom: 'src/assets/css/styles.css',
      autoprefixer: {},
      features: {
        'nesting-rules': true
      },
      insertBefore: {
        'all-property': postcssNested
      }
    })
  ]
}
