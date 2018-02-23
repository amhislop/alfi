// -------------------
// Required
// -------------------
var gulp        = require('gulp'),
    browserify  = require('browserify'),
    source      = require('vinyl-source-stream'),
    buffer      = require('vinyl-buffer'),
    uglify      = require('gulp-uglify'),
    rename      = require('gulp-rename'),
    plumber     = require('gulp-plumber'),
    sass        = require('gulp-sass'),
    browserSync = require('browser-sync').create(),
    reload      = browserSync.reload();

// -------------------
// Scripts Task
// -------------------

gulp.task('scripts', function(){
  return browserify('./js/app.js', { debug: true })
    .bundle()
    .pipe(source('bundle.js'))
    .pipe(buffer())
    .pipe(uglify())
    .pipe(gulp.dest('js'));

})


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
gulp.task('browser-sync', function() {
  browserSync.init({
    bsFiles: {
      src: ['css/site.css']
    },
    options:{
      baseDir: "./",
      watchtask: true,
      proxy: "alfi.test"
    }
  });
});


// -------------------
// Watch Task
// -------------------
gulp.task('watch', function(){
  gulp.watch('js/**/*', ['scripts']);
  gulp.watch('sass/**/*.sass', ['sass']);
});

// -------------------
// Default Task
// -------------------
gulp.task('default', ['scripts', 'sass', 'watch', 'browser-sync']);
