const path = require('path')
const glob = require('glob')
const ExtractTextPlugin = require('extract-text-webpack-plugin')
const ManifestPlugin = require('webpack-manifest-plugin')
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const PurgecssPlugin = require('purgecss-webpack-plugin')
const UglifyJsPlugin = require('uglifyjs-webpack-plugin')
const webpackBase = require('./webpack.base')

const PATHS = {
  dist: path.join(__dirname, './../dist'),
}

webpackBase.plugins.push(
  new ExtractTextPlugin({
    filename: '[name].[contenthash:8].min.css',
    allChunks: true,
  }),
  new OptimizeCssAssetsPlugin({
    assetNameRegExp: /\.min\.css$/,
    cssProcessorOptions: {
      discardComments: {
        removeAll: true,
      },
    },
  }),
  new UglifyJsPlugin({
    sourceMap: true,
  }),
  new ManifestPlugin({
    fileName: 'assets.json',
  }),
  new PurgecssPlugin({
    paths: glob.sync(`${PATHS.dist}/*`),
  })
)

module.exports = webpackBase
