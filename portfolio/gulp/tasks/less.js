module.exports = function () {

	$.gulp.task('less', function () {
		return $.gulp.src('src/less/style.less')
		.pipe($.gp.sourcemaps.init())
		.pipe($.gp.less({}))
		.pipe($.gp.autoprefixer({
			browsers: ['last 10 versions']
		}))
		.on("error", $.gp.notify.onError({
			message: "Error: <%= error.message %>",
			title: "Less"
		}))
		.pipe($.gp.sourcemaps.write())
		.pipe($.gulp.dest('build/css/')) //куда скомпилируются файлы
		.pipe($.gp.csso())
		.pipe($.gp.rename("style-min.css"))
		.pipe($.gulp.dest('build/css/'))
		.pipe($.bs.reload({
			stream: true
		}))
	})

}