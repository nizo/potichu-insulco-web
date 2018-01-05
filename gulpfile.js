var push = require('git-push');
var gulp = require('gulp');
var git = require('gulp-git');
 
gulp.task('default', function(){
	push('./', 'https://github.com/nizo/potichu-insulco-web', function() {
	  console.log('Done!');
	});
});

gulp.task('status', function(){
  var statusResult = git.status({}, function (err, stdout) {
    if (err) throw err;	
  });
  
  console.log(statusResult);
});