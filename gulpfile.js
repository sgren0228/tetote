const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();

// scss
function compileSass() {
  return gulp.src('scss/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('css'))
    .pipe(browserSync.stream());
}

// BrowserSync
function server(done) {
  browserSync.init({
    server: {
      baseDir: './'
    }
  });
  done();
}

// Watch files
function watchFiles() {
  gulp.watch('scss/**/*.scss', compileSass);
  gulp.watch('./*.html').on('change', browserSync.reload);
}

exports.default = gulp.parallel(server, watchFiles, compileSass);
