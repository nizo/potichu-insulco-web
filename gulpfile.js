var push = require('git-push');
var gulp = require('gulp');
 


gulp.task('default', function(){
	push('./', 'https://github.com/nizo/potichu-insulco-web', function() {
	  console.log('Done!');
	});
});