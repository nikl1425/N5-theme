const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const path = require('path');

//CONFIGURATION
const CSS_FILE_OUT_PATH = "../../style.css";
const BUNDLE_FILE_OUT_PATH = __dirname + "/dist"

//MODE
const devMode = (argv) => argv.mode === 'development';

console.log("DEVMODE", devMode)

module.exports = (env, argv) => {
    return {
        entry: './index.js',
        output: {
            path:  BUNDLE_FILE_OUT_PATH,
            filename: 'bundle.js', // Your output JavaScript file (optional)
        },
        plugins: [
            new MiniCssExtractPlugin({
                filename: CSS_FILE_OUT_PATH
            }),
        ],
        module: {
            rules: [
                {
                    test: /\.s[ac]ss$/i,
                    use: [
                        // Creates `style` nodes from JS strings
                        "style-loader",
                        // Translates CSS into CommonJS
                        "css-loader",
                        // Compiles Sass to CSS
                        "sass-loader",
                    ],
                },
                {
                    // If you enable `experiments.css` or `experiments.futureDefaults`, please uncomment line below
                    // type: "javascript/auto",
                    test: /\.(sa|sc|c)ss$/,
                    use: [
                        MiniCssExtractPlugin.loader,
                        "css-loader",
                        "postcss-loader",
                        "sass-loader",
                    ],
                },
            ],
        },
    }
    
};