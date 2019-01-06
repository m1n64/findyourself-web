# findyourself-web
create user in PMA
db:
> user: **fy_user**
> pass: **find_yourselfSPDB1265**

perms:
>> SELECT
>> INSERT
>> UPDATE
>> DELETE

Admin Panel:
>> login: fy_admin
>> pass: fy_admin1567


**[CHANGELOG](https://github.com/m1n64/findyourself-web/blob/v3_1/CHANGELOG.md "changelog")**

````
project/ #главная папка сайта
├───admin/ #админка
│   └───ajax/ #ajax для админки
├───ajax/ #ajax 
├───css/ #файлы стилей
│   └───fonts/ #шрифты 
├───errors/ #файлы с ошибками
├───files/ #файлы для скачивания с сайта
│   └───app/ #тут лежат apk приложения
├───images/ #картинки
├───includes/ #включения для php скриптов
├───js/ #js файлы
├───libs/ #библиотеки
│   ├───Chartjs/ #графики
│   ├───material/ #главная библиотека
│   │   ├───css/ #стили библиотеки
│   │   └───js/ #js библиотеки
│   └───Snif/ #сниффер
├───logs/ #логи
├───mobile/ #API для мобильного приложения
│   └───API/
├───modules/ #php классы
├───pictures/ #картинки для новостей
│   └───tmp/
└───scss/ #SASS
````
