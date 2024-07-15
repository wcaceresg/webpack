const webpack=require("webpack");
const path = require("path");
const common = require("./webpack.common");
const {merge} = require("webpack-merge");
const {CleanWebpackPlugin} = require("clean-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
//const OptimizeCssAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");
var HtmlWebpackPlugin = require("html-webpack-plugin");

module.exports = merge(common, {
  mode: "production",
  output: {
    filename: "js/[name].[fullhash].bundle.js",
    path: path.resolve(__dirname, "public")
  },
  optimization: {
    minimizer: [
      new CssMinimizerPlugin(),
      new TerserPlugin(),
      new HtmlWebpackPlugin({
        title: 'Custom template',
        filename: './index.php',
        template: "./resources/view/template.php",
        minify: {
          removeAttributeQuotes: true,
          collapseWhitespace: true,
          removeComments: true
        },
        chunks: ['main','vendor']
      }),

      new HtmlWebpackPlugin({
        title: 'Custom template',
        filename: './index2.php',
        template: "./resources/view/template2.php",
        minify: {
          removeAttributeQuotes: true,
          collapseWhitespace: true,
          removeComments: true
        },
        chunks: ['pagina2']
      }),



    ]
  },
  plugins: [
    new MiniCssExtractPlugin({ filename: "css/[name].[fullhash].css" }),
    new CleanWebpackPlugin(),
    /*new webpack.ProvidePlugin({
           $: "jquery",
           jQuery: "jquery"
       })
    */       

  ],
  module: {
  }
});