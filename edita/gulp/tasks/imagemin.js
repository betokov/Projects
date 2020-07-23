module.exports = function () {
	$.gulp.task("images", function () {
		return $.gulp.src("build/img/**/*.{png,jpg,gif,svg}")
		.pipe($.gp.tinypng('NnzxvRTkY5PjcNKWyj3ZFNDtnKcc065S'))
		.pipe($.gp.imagemin([
				$.gp.imagemin.optipng({optimizationLevel: 3}),
				$.gp.imagemin.jpegtran({progressive: true}),
				$.gp.imagemin.svgo()
			]))
		.pipe($.gulp.dest("build/img"));
	})
}

