module.exports = function () {

	gulp.task("sprite", function () {
		return $.gulp.src("src/img/icon-*.svg")
			.pipe($.gp.svgstore({
				inlineSvg: true
			}))
	})

	.pipe($.gulp.dest("build/img/sprite.svg"));

}