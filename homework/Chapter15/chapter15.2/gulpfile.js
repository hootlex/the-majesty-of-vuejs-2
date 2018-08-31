const gulp = require('gulp');
const babel = require('gulp-babel');

gulp.task('default', ['watch']);

// основная задача Babel
gulp.task('babel', function () {
    return gulp.src('src/*.js')
        .pipe(babel({
            presets: ['@babel/preset-env']
        }))
        .pipe(gulp.dest('assets/js/'))
})

// задача отслеживания
gulp.task('watch', function () {
    gulp.watch('src/*.js', ['babel']);
})
