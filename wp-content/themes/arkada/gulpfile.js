const syntax        = 'css'; // Syntax: sass or scss;

const srcDir = './src/';
const destDir = './assets/';

const gulp        	= require('gulp'),
			sass          = require('gulp-sass'),
			browserSync   = require('browser-sync'),
			concat        = require('gulp-concat'),
			uglify        = require('gulp-uglify'),
			cleancss      = require('gulp-clean-css'),
			rename        = require('gulp-rename'),
			autoprefixer  = require('gulp-autoprefixer'),
			notify        = require('gulp-notify'),
			imagemin      = require('gulp-imagemin');

			sass.compiler = require('node-sass');


function sync(){
	browserSync({
		server: {
			baseDir: './'
		},
		notify: true,
		open: false,
		// online: false, // Work Offline Without Internet Connection
		// tunnel: true, tunnel: "projectname", // Demonstration page: http://projectname.localtunnel.me
	});
}

function styles(){
	return gulp.src([
		srcDir + syntax + '/**/*.' + syntax + '',

	])
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(concat('style.css'))
	.pipe(rename({ suffix: '', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('./'));
}

function scripts(){
	return gulp.src([
		srcDir + 'js/jquery-3.3.1.min.js', 
		srcDir + 'js/ie10-viewport-bug-workaround.js', 
		srcDir + 'js/jquery.maskedinput.min.js', 
		srcDir + 'js/jquery.slicknav.min.js',
		srcDir + 'js/slick.min.js', 
		srcDir + 'js/scripts.js', // Always at the end
	])
	.pipe(concat('scripts.min.js'))
	.pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest(destDir + 'js'));
}

function reload(done){
	browserSync.reload();
	return done();
}

function images(){
	return gulp.src('../../uploads/**')
	.pipe(imagemin())
	.pipe(gulp.dest('../../uploads/compressed'));
}


function html(){
	return gulp.src('./*.html');
}


function watcher(){
	gulp.watch(srcDir + syntax + '/**/*.' + syntax + '', gulp.parallel(styles, reload));
	gulp.watch(['libs/**/*.js', srcDir + 'js/common.js'], gulp.parallel(scripts, reload));
	gulp.watch('./*.html', gulp.parallel(html, reload));
}


exports.styles = gulp.parallel(styles);
exports.scripts = gulp.parallel(scripts);
exports.images = gulp.parallel(images);
exports.default = gulp.parallel(styles, scripts, sync, watcher);

