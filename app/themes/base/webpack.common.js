const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const CleanWebpackPlugin = require('clean-webpack-plugin');
const FriendlyErrorsWebpackPlugin = require('friendly-errors-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const StyleLintPlugin = require("stylelint-webpack-plugin");
const devMode = process.env.NODE_ENV !== "production";
const path = require("path");
const webpack = require("webpack");

module.exports = {
  entry: {
    main: "./src/js/index.js"
  },
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: devMode ? "[name].js" : "[name].[hash].js"
  },
  plugins: [
    new BrowserSyncPlugin(
      {
        host: "localhost",
        port: 3000,
        proxy: "http://wordpress",
        files: ["**/*.php"],
        open: false,
        minify: false
      },
      {
        injectCss: true,
      }
    ),
    new MiniCssExtractPlugin({
      filename: devMode ? "[name].css" : "[name].[hash].css",
      chunkFilename: devMode ? "[id].css" : "[id].[hash].css"
    }),
    new StyleLintPlugin({}),
    new CleanWebpackPlugin(['dist']),
    new FriendlyErrorsWebpackPlugin(),
    new ImageminPlugin({
      disable: process.env.NODE_ENV !== 'production'
    })
  ],
  module: {
    rules: [
      {
        test: /\.m?js$/,
        exclude: /(node_modules)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"]
          }
        }
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          devMode
            ? "style-loader"
            : {
                loader: MiniCssExtractPlugin.loader,
                options: {
                  publicPath: "./"
                }
              },
          "css-loader",
          "postcss-loader",
          "sass-loader"
        ]
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: ["file-loader"]
      },
      {
        test: /\.(eot|svg|ttf|woff|woff2|otf)$/,
        use: ["url-loader?limit=100000"]
      }
    ]
  }
};
