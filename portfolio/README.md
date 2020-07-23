![gulp4](http://tpverstak.ru/wp-content/uploads/2018/09/7fb34ea5d33344da61d80-2.jpg)

# Сборка Gulp4

## Установка:
1. Скачать файлы с репозитория.
	`git clone adress`
2. Установить необходимые зависимости
	`npm i`

## Сборка включает в себя плагины:
1. browser-sync ("2.26.7");
2. gulp ("4.0.2");
3. gulp-autoprefixer ("7.0.1");
4. gulp-csso ("4.0.1");
5. gulp-imagemin ("6.2.0");
6. gulp-js-minify ("0.0.3");
7. gulp-less ("4.0.1");
8. gulp-load-plugins ("2.0.1");
9. gulp-notify ("3.2.0");
10. gulp-rename ("2.0.0");
11. gulp-sourcemaps ("2.6.5");
12. gulp-tinypng ("1.0.2");

## Запуск сборки:
1. `gulp`:
	* Удаление папки **build**, если существует.
	* Создание папки **build**.
	* Копирование папки _img_ и _fonts_ в папку **build**.
	* Запуск задач по компиляции и минификации _less_, копировании и минификации _script_ и копирование _html_ в папку **build**.
	* Запуск _watch_ и _browser-sync_.
2. `gulp build`:
	* Минификация изображений из папки _build/img_
