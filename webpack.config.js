const path = require("path");
const webpack = require("webpack");

module.exports = {
  context: path.resolve(
    __dirname + "/site/web/app/themes/marcusjh/assets/src/js"
  ),
  entry: {
    app: "./app.js"
  },
  module: {
    rules: [
      {
        test: /\.(js)$/,
        exclude: /node_modules/,
        use: ["babel-loader", "eslint-loader"]
      }
    ]
  },
  resolve: {
    extensions: ["*", ".js"]
  },
  output: {
    path: path.resolve(
      __dirname + "/site/web/app/themes/marcusjh/assets/dist/js"
    ),
    filename: "[name].bundle.js"
  }
};
