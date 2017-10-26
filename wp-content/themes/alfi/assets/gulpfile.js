// -------------------
// Required
// -------------------
var gulp        = require('gulp'),
    uglify      = require('gulp-uglify'),
    rename      = require('gulp-rename'),
    plumber     = require('gulp-plumber'),
    sass        = require('gulp-sass');
    // browserSync = require('browser-sync'),
    // reload      = browserSync.reload;

// -------------------
// Scripts Task
// -------------------
gulp.task('scripts', function(){
  gulp.src('js/modules/*.js')
  .pipe(plumber())
  .pipe(rename('bundle.js'))
  .pipe(uglify())
  .pipe(gulp.dest('js'));
});

// -------------------
// Sass Task
// -------------------
gulp.task('sass', function() {
  gulp.src('sass/base.sass')
  .pipe(plumber())
  .pipe(sass())
  .pipe(rename('site.css'))
  .pipe(gulp.dest('css'));
  // .pipe(reload({stream:true}));
});

// -------------------
// Browser-Sync Task
// -------------------
// gulp.task('browser-sync', function() {
//   browserSync({
//     bsFiles: {
//       src: ['css/site.css']
//     },
//     options:{
//       baseDir: "./alfi/wp-content/themes/alfi/assets/",
//       watchtask: true,
//       proxy: "alfi.dev"
//     }
//   });
// });


// -------------------
// Watch Task
// -------------------
gulp.task('watch', function(){
  gulp.watch('js/modules/*.js', ['scripts']);
  gulp.watch('sass/**/*.sass', ['sass']);
});

// -------------------
// Default Task
// -------------------'browser-sync'
gulp.task('default', ['scripts', 'sass', 'watch']);
