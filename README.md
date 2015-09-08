# Shizukesa
Основанно на STIBS (Super Tiny Image Board Software)<br \>
Чтобы работало сообщение о бане, перенесите banned.html в корень.<br \>
# Установка
Откройте config.php в gedit или другом текстовом редакторе.<br \>
define(SQLLOG, 'b') - Уникальный идентификатор доски<br \>
define(SQLHOST, 'localhost'); - Адрес до сервера MySQL<br \>
define(SQLUSER, 'root');	- Имя пользователя MySQL<br \>
define(SQLPASS, 'password'); - Пароль<br \>
define(SQLDB, 'database'); - Навание Базы данных<br \>
define(PANEL_PASS, 'CHANGEME'); - Пароль от админки<br \>
define(TITLE, '/b/ - Random'); - Думаю, тут все понятно<br \>
define("ADMIN_PASS", 'faggot');  - Пароль админа, юзается как трипкод.<br \>
define("MOD_PASS", 'CHANGEMEPLZ'); - Мочератора.<br \>
define(S_BOARDLIST, '[a / b / c] [d / e / f] [g / h / i] [j / k / l]'); - Тут должен быть полноценный список вида [&lt;a href="/a/"&gt;a&lt;/a&gt; / &lt;a href="/b/&gt;b&lt;/a&gt;]<br \>
define(S_DESCR, 'An imageboard powered by Shizukesa'); - Мета-описание<br \>
После натройки запустите  `imgboard.php`.
# chmod
/b/ - 777<br \>
/b/* - 777<br \>
/b/config.php - 755<br \>
# Разметка
WakabaMark:<br \>
`__pod4erknutoe__`<br \>
`%%spoiler%%`<br \>
`**}|{up**`<br \>
`*kosoe govno*`<br \>
`&&yt link&&`<br \>
Еще там есть bbcode..
