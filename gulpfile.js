const gulp = require("gulp");
const concat = require("gulp-concat");
const sass = require("gulp-sass");
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
const importCSS = require("gulp-import-css");

let paths = {
  scss: [
    "./src/scss/fonts.scss",
    "./src/scss/animations.scss",
    "./src/scss/base.scss",
    "./src/scss/layout.scss",
    "./src/grid.scss",
    "./src/scss/modules.scss",
    "./src/scss/theme.scss"
  ],
  cssGRID: [
    "./src/css/grid/_grid-core.css"
  ],
  jsHead: [
    "./src/js/prefixfree.js",
    "./src/js/conic-gradient.js"
  ],
  jsFooter: [
    "./src/js/scrollreveal.min.js",
    "./src/js/scripts.js"
  ]
};

gulp.task("css", ()=>{
  return gulp.src(paths.scss)
    .pipe(concat("core.scss"))
    .pipe(sass())
    .pipe(rename("core.css"))
    .pipe(gulp.dest("./src"))
    .pipe(cleanCSS({compatibility: "*"}))
    .pipe(rename("core.min.css"))
    .pipe(gulp.dest("./dist"));
});

gulp.task("cssGRID", ()=>{
  return gulp.src(paths.cssGRID)
    .pipe(importCSS())
    .pipe(rename("grid.scss"))
    .pipe(gulp.dest("./src"))
});

gulp.task("jsHead", ()=>{
  return gulp.src(paths.jsHead)
    .pipe(concat("core-head.js"))
    .pipe(gulp.dest("./src"))
    .pipe(uglify())
    .pipe(rename("core-head.min.js"))
    .pipe(gulp.dest("./dist"))
});

gulp.task("jsFooter", ()=>{
  return gulp.src(paths.jsFooter)
    .pipe(concat("core-footer.js"))
    .pipe(gulp.dest("./src"))
    .pipe(rename("core-footer.min.js"))
    .pipe(gulp.dest("./dist"))
});

gulp.task("watch", ()=>{
  gulp.watch(paths.scss, ["css"]);
  gulp.watch(paths.jsHead,["jsHead"]);
  gulp.watch(paths.jsFooter, ["jsFooter"]);
});

gulp.task("default", ["css", "jsHead", "jsFooter"]);
