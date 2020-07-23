module.exports = function () {

	$.gulp.task("copy", function () {
		return $.gulp.src([
			"src/img/**",
			"src/fonts/**/*.{woff,woff2}"
			], {
				base: "src"
			})
		.pipe($.gulp.dest("build"))
	});
}