const webpack = require('webpack');
const path = require('path');
const glob = require("glob");
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
//const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const CleanWebpackPlugin = require("clean-webpack-plugin");
const StyleLintPlugin = require("stylelint-webpack-plugin");
const ImageminPlugin = require("imagemin-webpack-plugin").default;
const CopyPlugin = require("copy-webpack-plugin");
const merge = require('webpack-merge').merge;

const devMode = process.env.NODE_ENV !== 'production';
const isDevMode = !!devMode;

let config = {
  mode: devMode ? 'development' : 'production',
  devtool: isDevMode ? 'source-map' : false,
  stats: 'minimal',
  entry: {
    global: path.resolve(__dirname, './assets/js/index.js'),
    /** for default page ex. page.php **/
    default_page: path.resolve(__dirname, './assets/js/page.js'),
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name].js'
  },
  module: {
    rules: [
      /* Disabled eslint loader because there is a bug with popperjs that's causing error during prod */
      // {
      //     enforce: "pre",
      //     test: /\.js$/,
      //     exclude: /node-modules/,
      //     loader: "eslint-loader"
      // },
      {
        test: /\.js$/,
        use: {
          loader: 'babel-loader',
        },
        exclude: /node_modules/
      },
      {
        test: /\.css$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              importLoaders: 1,
              modules: true
            }
          },
          'postcss-loader'
        ]
      },
      {
        test: /\.scss$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
          // {
          //   loader: "sass-resources-loader",
          //   options: {
          //       resources: [
          //         "node_modules/bootstrap/scss/_functions.scss",
          //         "node_modules/bootstrap/scss/_variables.scss",
          //         "node_modules/bootstrap/scss/_mixins.scss"
          //       ],
          //   },
          // },
        ]
      },
      {
        test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[name].[ext]',
              outputPath: 'fonts/'
            }
          }
        ]
      },
      {
        test: /\.(png|jpg|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[path][name].[ext]',
              context: path.resolve(__dirname, "src/"),
              // outputPath: 'dist/',
              // publicPath: '../',
              useRelativePaths: true
            }
          }
        ]
      }

    ]
  },
  plugins: [
    new CleanWebpackPlugin('dist'),
    new MiniCssExtractPlugin(),
    // new StyleLintPlugin({
    //   context: 'assets',
    //   syntax: 'scss'
    // }),
    new ImageminPlugin({
      disable: isDevMode ? true : false,
      externalImages: {
        context: 'assets', // Important! This tells the plugin where to "base" the paths at
        sources: glob.sync('assets/img/*.*'),
        destination: 'dist',
        fileName: '[path][name].[ext]' // (filePath) => filePath.replace('jpg', 'webp') is also possible
      }
    }),
    new BrowserSyncPlugin(
      {
        // BrowserSync Configuration
        host: "localhost",
        port: 3000,
        proxy: "http://localhost/EHRLICH/threaded",
        files: [
          {
            match: ["**/*.php", "assets/**/*.js", "assets/**/*.{sass,scss}"],
            fn: (event, file) => {
              if (event === "change") {
                // eslint-disable-next-line global-require
                const bs = require("browser-sync").get("bs-webpack-plugin");
                if (
                  file.split(".").pop() === "js" ||
                  file.split(".").pop() === "php"
                ) {
                  bs.reload();
                } else {
                  bs.reload("*.css");
                }
              }
            },
          }
        ],
        injectCss: true,
        notify: false,
      },
      {
        reload: false,
        name: "bs-webpack-plugin",
      }
    )
  ],
  optimization: {
    runtimeChunk: 'single',
    splitChunks: {
      cacheGroups: {
        vendor: {
          test: /[\\/]node_modules[\\/]/,
          name: 'vendor',
          chunks: 'all',
          enforce: true
        }
      }
    }
  }
};

if (isDevMode) {
  config = merge(config, {
    plugins: [
      new CopyPlugin({
        patterns: [
          { from: "assets/img", to: "img" },
          { from: "assets/fonts", to: "fonts " }
        ],
      })
    ]
  })
} else {
  config = merge(config, {
    plugins: [
      new CopyPlugin({
        patterns: [
          { from: "assets/img", to: "img" },
          { from: "assets/fonts", to: "fonts " }
        ],
      })
    ]
  })
}

module.exports = config;