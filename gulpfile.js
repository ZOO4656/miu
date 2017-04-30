// gulpモジュールを呼び出して代入
var gulp = require('gulp');
// gulp-sassモジュールを呼び出して代入
var sass = require('gulp-sass');

// SassとCssの保存先を指定
// sassコマンドを作成、 gulp sass コマンドを実行すると呼ばれる
// ./sass/**/ ディレクトリ内の *.scss ファイルを ./ に出力 ※1
gulp.task('sass', function() {
  gulp.src('./sass/**/*.scss')
  .pipe(sass({outputStyle: 'expanded'}))
  .pipe(gulp.dest('./css'));
});

//自動監視のタスクを作成、gulp watch コマンドを実行すると呼ばれる
// ./sass/**/*.scss の変更時に gulp sassコマンドを実行する
gulp.task('watch', ['sass'], function() {
  var watcher = gulp.watch('./sass/**/*.scss', ['sass']);
});

// gulp sass コマンドがgulpと入力しただけでdefaultで実行されるようにする
gulp.task('default', ['sass']);
