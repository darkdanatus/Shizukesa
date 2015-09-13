## Shizukesa
Основанно на STIBS (Super Tiny Image Board Software)<br \>
Чтобы работало сообщение о бане, перенесите banned.php в корень.<br \>
## Что в настройках написаных на яваскипте с использованием сочного жквери?
# Цитирование и ответ
Превью ответов<br \> 
Ответы (ссылки на них)<br \> 
Открытие ответов в посте (убого выглядит, но лучше чем ничего)<br \> 
Оставлять плавающую форму после постинга<br \> 
Автообновление по постингу<br \> 
# Мониторинг 
Автообновление по дефолту<br \> 
Отмотка к новым постам<br \> 
# Навигация
Бесконечная прокрутка<br \> 
Прочее <br \> 
Посты по размеру экрана
## Установка
Откройте config.php в gedit или другом текстовом редакторе.<br \>
`define(SQLLOG, 'b');` - Уникальный идентификатор доски<br \>
`define(SQLHOST, 'localhost');` - Адрес до сервера MySQL<br \>
`define(SQLUSER, 'root');`	- Имя пользователя MySQL<br \>
`define(SQLPASS, 'password');` - Пароль<br \>
`define(SQLDB, 'database');` - Навание Базы данных<br \>
`define(PANEL_PASS, 'CHANGEME');` - Пароль от админки<br \>
`define(TITLE, '/b/ - Random');` - Думаю, тут все понятно<br \>
`define("ADMIN_PASS", 'faggot');`  - Пароль админа, юзается как трипкод.<br \>
`define("MOD_PASS", 'CHANGEMEPLZ');` - Мочератора.<br \>
`define(S_BOARDLIST, '[a / b / c] [d / e / f] [g / h / i] [j / k / l]');` - Тут должен быть полноценный список вида `[<a href="/a/">a</a> / <a href="/b/>b</a>]`<br \>
define(S_DESCR, 'An imageboard powered by Shizukesa'); - Мета-описание<br \>
После настройки запустите  `imgboard.php`.
## chmod
/b/ - 777<br \>
/b/* - 777<br \>
/b/config.php - 755<br \>
## Разметка
# WakabaMark:
`__pod4erknutoe__`<br \>
`%%spoiler%%`<br \>
`**}|{up**`<br \>
`*kosoe govno*`<br \>
`&&B2JplQgMfis&&` - YouTube (Из ссылки `http://www.youtube.com/watch?v=B2JplQgMfis` берем код `B2JplQgMfis`)<br \>
Еще там есть bbcode..
