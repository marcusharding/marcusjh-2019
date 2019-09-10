const path = require("path");
const webpack = require("webpack");
const SpriteLoaderPlugin = require('svg-sprite-loader/plugin');

module.exports = {

  // Paths
  const rootDir = path.resolve(__dirname + "/site/web/app/themes/marcusjh/assets");
  const outputDir = 'dist';

  context: path.resolve(
    __dirname + "/site/web/app/themes/marcusjh/assets/src/js"
  ),
  entry: {
    app: "./app.js"
  },
  output: {
    path: path.resolve(
      __dirname + "/site/web/app/themes/marcusjh/assets/dist/js"
    ),
    filename: "[name].bundle.js"
  },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: ["babel-loader", "eslint-loader"]
      },
      {
        test: /\.svg$/,
        use: [
            'svg-sprite-loader',
            'svgo-loader'
        ]
      },
    ],
  },
  resolve: {
    extensions: ["*", ".js"]
  },
   plugins: [
    new SpriteLoaderPlugin({
      plainSprite: true
    })
  ]
};
