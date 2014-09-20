var gulp = require('gulp');
var less = require('gulp-less');
var minifiycss = require('gulp-minify-css');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var path = require('path');


gulp.task('styles', function() {
    gulp.src(
        [
        './css/*.css',
        './business-casual/css/*.css',
        './vendor/redactor/redactor/redactor.css',
        ]
        )
    .pipe(concat('styles.css'))
    //.pipe(less())
    //.pipe(minifiycss())
    .pipe(gulp.dest('dist/css'));

});


gulp.task('images', function() {
    gulp.src(['business-casual/img/*'])
    .pipe(gulp.dest('dist/img'));
});

gulp.task('fonts', function() {

    gulp.src(['business-casual/fonts/*'])
    .pipe(gulp.dest('dist/fonts'));
});

gulp.task('scripts', function() {

    gulp.src([
        'business-casual/js/jquery-1.11.0.js',
        'business-casual/js/bootstrap.min.js',
        './vendor/redactor/redactor/redactor.min.js',
        ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('dist/js'));
});

gulp.task('default', ['styles', 'images', 'scripts', 'fonts'], function() {

    gulp.watch([
        './business-casual/css/*.css',
        './css/*.css'
        ], ['styles', 'images', 'scripts']);
});

