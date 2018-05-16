const gulp = require("gulp");
const concat = require("gulp-concat");
const sass = require("gulp-sass");
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");

let paths = {
  scss: [
    "./src/base.scss",
    "./src/layout.scss",
    "./src/modules.scss",
    "./src/animations.scss",
    "./src/theme.scss"
  ]
};

gulp.task("css", ()=>{
  return gulp.src(paths.scss)
    .pipe(concat("core.css"))
    .pipe(sass())
    .pipe(gulp.dest("./src"))
    .pipe(cleanCSS({compatibility: "*"}))
    .pipe(rename("core-min.css"))
    .pipe(gulp.dest("./dist"));
});
gulp.task("watch", ()=>{
  gulp.watch(paths.scss, ["css"]);
});
