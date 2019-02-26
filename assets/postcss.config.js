const postcssPresetEnv = require('postcss-preset-env');
const postcssNested = require('postcss-nested');
const hexrgba = require('postcss-hexrgba');
const colorFunction = require('postcss-color-function');

module.exports = {
  plugins: [
    hexrgba(),
    postcssPresetEnv({
      stage: 0,
      importFrom: 'src/assets/css/styles.css',
      autoprefixer: {},
      features: {
        'nesting-rules': true,
      },
      insertBefore: {
        'all-property': colorFunction,
        postcssNested,
      },
    }),
  ],
};
