const mix = require('laravel-mix');

mix/*.js('resources/js/app.js', 'public/assets/js')
   .js('resources/js/argon-dashboard.js', 'public/assets/js')
   .js('resources/js/office/login.js', 'public/assets/js/office')*/
   .sass('resources/sass/assay.scss', 'public/assets/css')
   .sass('resources/sass/globals.scss', 'public/assets/css')
   .sass('resources/sass/login.scss', 'public/assets/css')
   .sourceMaps();

  mix.webpackConfig({
    devServer:{
      proxy:{
        '*':'http://scadae.test'
      }
    }
  })

  const domain = 'scadae.test';

  if(mix.inProduction()){

  }else{
    let options = mix.options({

    });

    let hmr = options.hmr;
    mix.webpackConfig({
      output: {
          publicPath: hmr ? ('https://localhost:8080/') : '/'
      }
    });

    mix.browserSync({
      proxy:'http://'+domain,
      host:domain,
      open:'external',
      files: [
        'app/**/*',
        'public/assets/css/**/*',
        'public/assets/js/**/*',
        'resources/view/**/*',
        'resources/lang/**/*',
        'routes/**/*'
      ]
    });
  }