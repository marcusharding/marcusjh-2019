require('@babel/polyfill')
const path = require('path')
const webpack = require('webpack')
const SpriteLoaderPlugin = require('svg-sprite-loader/plugin')

module.exports = {

  mode: 'none',

  // Paths
  // const rootDir = path.resolve(__dirname + '/site/web/app/themes/marcusjh/assets');
  // const outputDir = 'dist';

  context: path.join(__dirname, '/site/web/app/themes/marcusjh/assets/src/js'),
  entry: {
    app: './app.js',
  },
  output: {
    path: path.resolve(__dirname, '/site/web/app/themes/marcusjh/assets/dist'),
    filename: '[name].bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
      {
        test: /\.svg$/,
          use: [
            {
              loader: 'svg-sprite-loader',
              options: {
              extract: true,
              publicPath: '../svg/',
              symbolId: 'icon--[name]', // id attr to identify sprites
              spriteFilename: 'spritesheet.svg',
              runtimeCompat: true,
            },
          },
          {
            loader: 'svgo-loader',
            options: {
              plugins: [
                {
                    removeTitle: true,
                },
                {
                    cleanupIDs: true,
                },
                {
                    removeUselessStrokeAndFill: true,
                },
                {
                    removeDoctype: true,
                },
                {
                    removeUselessDefs: true,
                },
                {
                    useShortTags: false,
                },
            ],
            },
          },
        ],
      },
    ],
  },
  resolve: {
    extensions: ['*', '.js'],
  },
   plugins: [
    new SpriteLoaderPlugin({
      plainSprite: true,
    })
  ]
};
