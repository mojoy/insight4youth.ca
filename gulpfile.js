import gulp from "gulp";
import { path } from "./gulp/config/path.js";
import { plugins } from "./gulp/config/plugins.js";

global.app = {
  isBuild: process.argv.includes('--build'),
  isDev: !process.argv.includes('--build'),
  path: path,
  gulp: gulp,
  plugins: plugins,
}

//импортируем задачи
import { copy } from "./gulp/tasks/copy.js";
import { reset } from "./gulp/tasks/reset.js";
import { html } from "./gulp/tasks/html.js";
import { server } from "./gulp/tasks/server.js";
import { scss } from "./gulp/tasks/sass.js";
import { js } from "./gulp/tasks/js.js";
import { images } from "./gulp/tasks/images.js";
import { videos } from "./gulp/tasks/videos.js";
import { otfToTtf, ttfToWoff, ttfToWoff2, fontsStyle } from "./gulp/tasks/fonts.js";
import { zip } from "./gulp/tasks/zip.js";
import { ftp } from "./gulp/tasks/ftp.js";

function watcher() {
  gulp.watch(path.watch.files, copy);
  gulp.watch(path.watch.html, html);
  gulp.watch(path.watch.scss, scss);
  gulp.watch(path.watch.js, js);
  gulp.watch(path.watch.images, images);
  gulp.watch(path.watch.videos, videos);
}

// последовательная обработка шрифтов
const fonts = gulp.series(otfToTtf, ttfToWoff, ttfToWoff2, fontsStyle, videos);

// основные задачи
const mainTasks = gulp.series(fonts, gulp.parallel(copy, html, scss, js, images));

const dev = gulp.series(reset, mainTasks, gulp.parallel(watcher, server));
const build = gulp.series(reset, mainTasks);
const deployZIP = gulp.series(reset, mainTasks, zip);
const deployFTP = gulp.series(reset, mainTasks, ftp);

// экспорт сценариев, что бы их было видно из вне
export {dev}
export {build}
export {deployZIP}
export {deployFTP}

// Задача по умолчанию, запускает сервер и отслеживание изменений
gulp.task('default', dev);