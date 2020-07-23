module.exports = function () {

	$.gulp.task('watch', function () {
		$.gulp.watch('src/**/*.less', $.gulp.series('less'));
		$.gulp.watch('src/*.html', $.gulp.series('html'));
		$.gulp.watch('src/js/*.js', $.gulp.series('scripts'));
	});
}
