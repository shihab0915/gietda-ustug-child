var gulp = require('gulp'),
watch = require('gulp-watch');

gulp.task('html', function() {
  console.log("HTML task is running!");
});

gulp.task('styles', function() {
  return gulp.src('./css/styles.css').pipe(gulp.dest('./temp/styles'));
});

gulp.task('watch', function() {

  watch('./front-page.php', function() {
    gulp.start('html');
  });

  watch('./css/**/*.css', function() {
    gulp.start('styles');
  });


});
