
const path = require('path');
const webpack = require('webpack');

module.exports = {
    context: path.resolve(__dirname + '/site/web/app/themes/marcusjh/assets/src/js'),
    entry: {
      app: './app.js',   
    },
    output: {
      filename: '[name].bundle.js',
      path: path.resolve(__dirname + '/site/web/app/themes/marcusjh/assets/dist/js'),                        
    },
  };
