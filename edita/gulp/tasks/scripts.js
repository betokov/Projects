module.exports = function () {

	$.gulp.task('scripts:lib', function () {
		return $.gulp.src(['node_modules/jquery/dist/jquery.min.js', 'node_modules/owl.carousel/dist/owl.carousel.min.js'])
		.pipe($.gp.concat('libs-min.js'))
		.pipe($.gulp.dest('build/js/')) //куда скомпилируются файлы
	});

	$.gulp.task('scripts', function () {
		return $.gulp.src('src/js/main.js')
		.pipe($.gulp.dest('build/js/')) //куда скомпилируются файлы
		.pipe($.minifyjs()) //минификация файла
		.pipe($.gp.rename("main-min.js"))
		.pipe($.gulp.dest('build/js/'))
		.pipe($.bs.reload({
			stream: true
		}))
	});

}