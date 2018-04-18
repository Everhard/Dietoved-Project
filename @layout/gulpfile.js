var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    clean = require('gulp-clean'),
    uglify = require('gulp-uglify'),
    cleanCSS = require('gulp-clean-css'),
    imagemin = require('gulp-imagemin'),
    autoprefixer = require('gulp-autoprefixer'),
    livereload = require('gulp-livereload');

gulp.task('sass', function() {
    return gulp.src(['./sass/style.scss', './sass/media.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('style.css'))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('../web/css/'))
        .pipe(livereload());
});

gulp.task('libs-css', function() {
    return gulp.src('./libs/*.css')
        .pipe(concat('libs.css'))
        .pipe(gulp.dest('../web/css/'));
});

gulp.task('libs-js', function() {
    return gulp.src(['./libs/jquery-3.2.1.min.js', './libs/jquery.mCustomScrollbar.js', './libs/smoothscrolling.js', './libs/popper.js', './libs/bootstrap.min.js', './libs/jquery.fancybox.min.js', './libs/summernote.js', './libs/bootstrap-datepicker.min.js', './libs/bootstrap-datepicker.ru.min.js', './libs/slick.js', './libs/jquery.canvasjs.min.js', './libs/jquery.timepicker.min.js', './libs/jquery.Jcrop.min.js', './libs/jssocials.js'])
        .pipe(concat('libs.js'))
        .pipe(uglify())
        .pipe(gulp.dest('../web/js/'));
});

gulp.task('clean', function() {
    return gulp.src(['css', 'js', 'img.min'], {read: false})
        .pipe(clean());
});

gulp.task('scripts', function() {
    return gulp.src('vendor/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('../web/js/'))
});
gulp.task('hint', function () {
    var cached  = require('gulp-cached'),
        jshint  = require('gulp-jshint'),
        stylish = require('jshint-stylish');
    return gulp.src('../web/js/*.js')
        .pipe(cached('hinting'))
        .pipe(jshint())
        .pipe(jshint.reporter(stylish));
});

// gulp.task('images', function() {
//     return gulp.src('img/*')
//         .pipe(imagemin([
//             imagemin.gifsicle({interlaced: true}),
//             imagemin.jpegtran({progressive: true}),
//             imagemin.optipng({optimizationLevel: 5})
//         ]))
//         .pipe(gulp.dest('img.min'))
// });

//Watch task
gulp.task('watch', function() {
    gulp.watch('vendor/*.js', ['scripts']);
    gulp.watch('sass/**/*.scss',['sass']);
    gulp.watch('../web/js/*.js', ['hint']);
    livereload.listen();
    // gulp.watch('img/*', ['images']);
});

gulp.task('default', ['clean'], function() {
    gulp.start('sass', 'libs-css', 'libs-js', 'scripts');
    gulp.watch('sass/**/*.scss',['sass']);
    gulp.watch('vendor/*.js', ['scripts']);
});

// gulp.task('default',function() {
//     gulp.watch('sass/**/*.scss',['sass']);
// });