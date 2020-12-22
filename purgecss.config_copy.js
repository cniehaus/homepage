mix.sass('src/sass/site.scss', 'public/assets/css', {
    includePaths: ["node_modules/@slateengine/slatesass/", "node_modules/@slateengine/slatesasskits/"],
    precision: 5
  }).purgeCss({
    enabled: false,
  
    globs: [
      path.join(__dirname, 'public/site/snippets/**/*.php'),
      path.join(__dirname, 'public/site/templates/**/*.php'),
      path.join(__dirname, 'public/site/plugins/**/*.php'),
    ],
  
    extensions: ['php'],
  
    // Other options are passed through to Purgecss
    whitelistPatterns: [],
  });
module.exports = {
  plugins: [
    require("kgs-kirby"),
    require("autoprefixer"),
    require("purgecss")({
      content: ['path.join(__dirname, "public/site/snippets/**/*.php"), path.join(__dirname, "public/site/templates/**/*.php"), path.join(__dirname, "public/site/plugins/**/*.php")'],
      defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
    })
  ]
}