var mix = require("laravel-mix"),
        webpack = require("webpack");
mix.webpackConfig({
    stats: {
        children: !0,
        warnings: !0
    },
    resolve: {
        extensions: "* .wasm .mjs .js .jsx .json".split(" ")
    }
});
mix.minify(
        [
            "public/assets/plugins/global/plugins.bundle.js",
            "public/assets/js/scripts.bundle.js",
            "public/assets/js/custom/widgets.js"
        ],
        "public/js/admin.js");
mix.styles(
        [
            "public/assets/plugins/global/plugins.bundle.css",
            "public/assets/css/style.bundle.css"
        ],
        "public/css/admin.css");