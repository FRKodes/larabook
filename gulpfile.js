// Gulpfile.js
// Require the needed packages
var gulp = require('gulp');
var stylus = require('gulp-stylus');
var autoprefixer = require('gulp-autoprefixer');

// Get one .styl file and render
// gulp.task('one', function () {
//   gulp.src('app/assets/css/one.styl')
//     .pipe(stylus())
//     .pipe(gulp.dest('./css'));
// });

// Get and render all .styl files recursively
gulp.task('stylus', function () {
  gulp.src('app/assets/css/*.styl')
    .pipe(stylus())
    .pipe(autoprefixer())
    .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function(){
  gulp.watch('app/assets/css/*.styl', ['stylus']);
});

// Use nib
// Require nib
// var nib = require('nib');
// either a String or an Array
// gulp.task('nib', function () {
//   gulp.src('/css/nib.styl')
//     .pipe(stylus({use: [nib()]}))
//     .pipe(gulp.dest('./css/nib'));
// });

// Show errors if encountered
gulp.task('errors', function () {
  gulp.src('app/assets/css/errors.styl')
    .pipe(stylus({errors: true}))
    .pipe(gulp.dest('public/css'));
});


// Default gulp task to run
gulp.task('default', ['watch']);