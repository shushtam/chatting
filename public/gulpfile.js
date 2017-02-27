var gulp=require('gulp'),
		uglify=require('gulp-uglify'),
		sass=require('gulp-ruby-sass'),
		plumber=require('gulp-plumber'),
		livereload=require('gulp-livereload')
		imagemin=require('gulp-imagemin'),
		concat = require('gulp-concat'),
		minifyCSS = require('gulp-minify-css'),
		cleanCSS = require('gulp-clean-css'),
		rename = require("gulp-rename")
		csslint = require('gulp-csslint')
;


//Scripts uglify

gulp.task('scripts',function(){
	gulp.src('js/controllers/*.js')
	//.pipe(plumber())
	.pipe(uglify())
	.on('error',console.error.bind(console))
	.pipe(concat('app.js'))
	.pipe(gulp.dest('gulp'))
	.pipe(livereload());
});

//Styles clean

gulp.task('styles',function(){
 return gulp.src('**/*.css')
    //.pipe(cleanCSS())
    .pipe(minifyCSS())
    .pipe(rename('style.min.css'))
    .pipe(csslint())
    .pipe(csslint.formatter())
    .pipe(gulp.dest('gulp'))
    .pipe(livereload());
});
gulp.task('styles2',function(){
 	gulp.src('scss/**/*.scss')
    .pipe(plumber())
    //.on('error',console.error.bind(console))
    .pipe(sass({
    style:'compressed'
    }))
    .pipe(gulp.dest('gulp'));
});

//Image

gulp.task('image',function(){
	gulp.src('images/*')
	.pipe(imagemin())
	.pipe(gulp.dest('gulp/image'));

});

//Watch js

gulp.task('watch',function(){
	var server=livereload();
	gulp.watch('js/controllers/*.js',['scripts']);
	gulp.watch('**/*.css',['styles']);
	gulp.watch('scss/**/*.scss',['styles2']);

});


gulp.task('default',['scripts','styles','watch']);