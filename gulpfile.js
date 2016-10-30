var projectname 	= "pwr",
	template_path	= "site/templates/",
	gulp 			= require('gulp'),
	uglify 			= require('gulp-uglify'),
	sass        	= require('gulp-ruby-sass'),
	watch 			= require('gulp-watch'),
	autoprefixer	= require('gulp-autoprefixer'),
	jshint 			= require('gulp-jshint'),
	concat 			= require('gulp-concat');

gulp.task('js', function () {
	return gulp.src([
			template_path + 'js/lib/jquery-2.1.1.min.js',
			template_path + 'js/lib/highlight.js',
			template_path + 'js/app/main.js'
		])
		.pipe(uglify())
		.pipe(concat(projectname + '.js'))
		.pipe(gulp.dest(template_path + 'build/js'));
});

gulp.task('sass', function() {
	return gulp.src(template_path + 'sass/*.scss')
		.pipe(sass({
			style: 'compressed',
			lineNumbers: false
		}))
		.pipe(concat(projectname + '.css'))
		.pipe(gulp.dest(template_path + 'build/css'));
});

gulp.task('watch', ['sass', 'js'], function() {
	gulp.watch(template_path + 'sass/**/*.scss', ['sass']);
	gulp.watch(template_path + 'js/**/*.js', ['js']);
});

gulp.task('default', ['watch']);
gulp.task('build', ['sass', 'js']);