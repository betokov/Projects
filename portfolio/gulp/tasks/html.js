module.exports = function () {

	$.gulp.task('html', function () {
		return $.gulp.src('src/*.html')
		.pipe($.gulp.dest('build/')) //куда скомпилируются файлы
		.pipe($.bs.reload({
			stream: true
		}))
	});

}