const purgecss = await new PurgeCSS().purge()

await new PurgeCSS().purge({
  content: [
    '**/*.js',
    '**/*.html', 
    '**/*.php'
  ],

  css: [
    'app.css'
  ]

})
