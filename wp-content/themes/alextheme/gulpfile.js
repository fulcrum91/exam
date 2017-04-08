var gulp = require('gulp');
var browserSync = require('browser-sync');
var autoprefixer = require('gulp-autoprefixer');
// подключаем gulp-sass
var sass = require('gulp-sass');
gulp.task('browserSync', function() {
    browserSync({
        server: {
            baseDir: ''
        }
    })
});
gulp.task('sass', function(){
    return gulp.src('./sass/style.scss')
        .pipe(sass()) // Конвертируем Sass в CSS с помощью gulp-sass
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});
gulp.task('watch', ['browserSync', 'sass'], function(){
    gulp.watch('./sass/*.scss', ['sass']);
    // другие ресурсы
});