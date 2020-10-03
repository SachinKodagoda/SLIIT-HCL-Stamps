// Importing specific gulp API functions lets us write them below as series() instead of gulp.series()
// const autoprefixer = require('gulp-autoprefixer');
const { src, dest, watch, series, parallel } = require('gulp'),
    browserSync = require('browser-sync').create(),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    images = require('gulp-imagemin'),
    cache = require('gulp-cache');

// FILE PATHS
const files = {
    // Input file paths
    sassPath: './css/**/*.sass',
    jsPath: './js/**/*.js',
    imgPath: './img/**/*',

    // Output file paths
    sassDest: '../public/css',
    jsDest: '../public/js',
    imgDest: '../public/img',
}

// --------------------------------------------------------------
// COMPILE SASS TO CSS
function sassTask() {
    return src(files.sassPath)
        .pipe(sourcemaps.init())
        .pipe(sass({
            style: 'compressed'
        }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('.'))
        .pipe(dest(files.sassDest))
        .pipe(browserSync.stream());
}

// COMPRESS IMAGES
function imgTask() {
    return src([files.imgPath])
        .pipe(images())
        .pipe(dest(files.imgDest));
}

// JS PAGES TASK
function jsTask() {
    return src([
            files.jsPath
        ])
        .pipe(dest(files.jsDest));
}

// RELOAD THE BROWSER
function reloadingTask(done) {
    browserSync.reload();
    done();
}

// RELOAD THE BROWSER
function clearCache() {
    cache.clearAll();
}

function watchTask() {
    browserSync.init({
        // server: {
        //   baseDir: outputBaseDir
        // }
        // watch: true,
        // files: ['../app'],
        injectChanges: true,
        proxy: '127.0.0.1/stamps',
        // watchOptions: {
        //     debounceDelay: 1000 // This introduces a small delay when watching for file change events to avoid triggering too many reloads
        // },
        notify: false
    });
    watch(files.sassPath, sassTask);
    watch(files.jsPath, series(jsTask, reloadingTask));
    watch('../app',reloadingTask);
}

exports.default = series(
    parallel(sassTask, jsTask, imgTask),
    watchTask
);