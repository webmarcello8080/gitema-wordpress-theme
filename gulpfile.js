const gulp = require("gulp");
const sass = require("gulp-sass");
const browserSync = require("browser-sync").create();
const concat = require("gulp-concat");

function style() {
  return gulp
    .src("./assets/scss/**/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("./assets/css"))
    .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    // server: {},
    proxy: "http://localhost/wordpress.5.3.2/",
    notify: true,
  });
  gulp.watch("./assets/scss/**/*.scss", style);
  gulp.watch("./*.php").on("change", browserSync.reload);
  gulp.watch("./assets/js/**/*.js").on("change", browserSync.reload);
}

exports.style = style;
exports.watch = watch;

// // browser-sync task for starting the server.
// gulp.task("browser-sync", function () {
//   //watch files
//   var files = ["./assets/sass/*.scss", "./*.php"];

//   //initalize browsersync
//   browserSync.init(files, {
//     // browsersync with php server
//     proxy: "http://localhost:8888/marginateo/",
//     notify: true,
//   });
// });

// // Sass task, will run when any SCSS files change & BrowserSync will update browsers
// gulp.task("sass", function () {
//   return gulp
//     .src(["./assets/sass/main.scss", "sass/wp-core.scss", "sass/*.scss"])
//     .pipe(sass({ outputStyle: "compressed" }))
//     .pipe(concat("style.css"))
//     .pipe(gulp.dest("./assets/css"))
//     .pipe(reload({ stream: true }));
// });

// // Default task to be run with 'gulp'
// gulp.task("default", ["sass", "browser-sync"], function () {
//   gulp.watch("sass/**/*.scss", ["sass"]);
// });
