"use strict";

import gulp from "gulp";
import sourcemaps from "gulp-sourcemaps";
import concat from "gulp-concat";
import sass from "gulp-sass";
import rename from "gulp-rename";
import cleanCSS from "gulp-clean-css";
import uglify from "gulp-uglify";
import importCSS from "gulp-import-css";

const paths = {
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
}

const buildCSS = () => {
  return gulp.src( paths.scss )
    .pipe( concat( "core.scss" ) )
    .pipe( sass() )
    .pipe( rename( "core.css" ) )
    .pipe( gulp.dest( "./src" ) )
    .pipe( cleanCSS( { compatibility: "*" } ) )
    .pipe( rename( "core.min.css" ) )
    .pipe( gulp.dest( "./dist" ) );
}

const buildCSSGrid = () => {
  return gulp.src( paths.cssGRID )
    .pipe( importCSS() )
    .pipe( rename( "grid.scss" ) )
    .pipe( gulp.dest( "./src" ) )
}

const jsHead = () => {
  return gulp.src( paths.jsHead )
    .pipe( concat( "core-head.js") )
    .pipe( gulp.dest( "./src" ) )
    .pipe( uglify() )
    .pipe( rename( "core-head.min.js" ) )
    .pipe( gulp.dest( "./dist") )
}

const jsFooter = () => {
  return gulp.src( paths.jsFooter )
    .pipe( concat( "core-footer.js" ) )
    .pipe( gulp.dest( "./src" ) )
    .pipe( rename( "core-footer.min.js" ) )
    .pipe( gulp.dest( "./dist" ) )
}

exports.default = gulp.series(buildCSS, buildCSSGrid, /*jsHead*/ jsFooter );