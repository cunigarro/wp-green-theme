const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const autoprefixer = require('autoprefixer');
const tailwindcss = require('tailwindcss');

module.exports = {
  entry: {
    'main': './src/js/main.js',
    'admin-home-slider': './src/js/admin-home-slider.js',
    'style': './src/scss/style.scss'
  },
  output: {
    filename: './dist/js/[name].min.js'
  },
  module: {
    rules: [
      {
        test: /\.scss$/,
        use: ExtractTextPlugin.extract({
          use: [
            {
              loader: 'css-loader', options: { importLoaders: 1 }
            },
            {
              loader: 'postcss-loader'
            },
            {
              loader: 'sass-loader',
              options: {
                plugins: () => [autoprefixer()]
              }
            }
          ],
          fallback: 'style-loader'
        })
      },
      {
        test: /\.(png|jp(e*)g|svg)$/,
        use: [{
          loader: 'file-loader',
          options: {
            name: '[name].[ext]',
            outputPath: 'dist/img/'
          }
        }]
      },
    ]
  },
  plugins: [
    new ExtractTextPlugin({
      filename: './dist/css/[name].css',
      allChunks: true
    })
  ]
}
