<?php
define(S_DELETE, 'Удалить');
define(S_HOME, 'Главная');											//Forwards to home page
define(S_ADMIN, 'А');										//Forwards to Management Panel
define(S_RETURN, 'Назад');										//Returns to image board
define(S_POSTING, 'Режим постинга: Ответ');								//Prints message in red bar atop the reply screen
define(S_NOTAGS, 'HTML tags are allowed.');								//Prints message on Management Board
define(S_NAME, 'Имя');											//Describes name field
define(S_EMAIL, 'E-mail');										//Describes e-mail field
define(S_SUBJECT, 'Тема');										//Describes subject field
define(S_SUBMIT, 'Отправить');										//Describes submit button
define(S_COMMENT, 'Комментарий');										//Describes comment field
define(S_UPLOADFILE, 'Файл');										//Describes file field
define(S_NOFILE, 'Без Файла');										//Describes file/no file checkbox
define(S_DELPASS, 'Пароль');										//Describes password field
define(S_DELEXPL, '(Для удаления файла)');							//Prints explanation for password box (to the right)
define(S_RULES, '<ul><li>Поддерживаемые типы файлов: GIF, JPG, PNG</li>
<li>Maximum file size allowed is '.MAX_KB.' KB.</li>
<li>Images greater than '.MAX_W.'x'.MAX_H.' pixels will be thumbnailed.</li>
<li>Images smaller than '.MIN_W.'x'.MIN_H.' pixels will be refused.</li>
</ul>');				//Prints rules under posting section
define(S_REPORTERR, 'Ошибка: Cannot find reply.');							//Returns Ошибка when a reply (res) cannot be found
define(S_THUMB, 'Показана миниатюра. Нажмите на миниатюру чтобы развернуть.');					//Prints instructions for viewing real source
define(S_PICNAME, 'Файл: ');										//Prints text before upload name/link
define(S_REPLY, 'Ответ');										//Prints text for reply link
define(S_OLD, 'Marked for deletion (old).');								//Prints text to be displayed before post is marked for deletion, see: retention
define(S_RESU, '');											//Prints post?
define(S_ABBR, ' сообщений свернуто. Нажмите [Ответ].');						//Prints text to be shown when replies are hidden
define(S_REPDEL, 'Удалить пост ');									//Prints text next to S_DELPICONLY (left)
define(S_DELPICONLY, 'Только файл');									//Prints text next to checkbox for file deletion (right)
define(S_DELKEY, 'Пароль ');										//Prints text next to password field for deletion (left)
define(S_DELETE, 'Удалить');										//Defines deletion button's name
define(S_PREV, 'Назад');										//Defines previous button
define(S_FIRSTPG, 'Назад');										//Defines previous button
define(S_NEXT, 'Вперед');											//Defines next button
define(S_LASTPG, 'Вперед');										//Defines next button
define(S_FOOT, '- <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://1chan.net/futallaby/" target="_blank">futallaby</a> + <a href="http://github.com/malamut2014/Shizukesa" title="Based on STIBS r2">Shizukesa</a> -'); //Prints footer (leave these credits)
define(S_RELOAD, 'Назад');										//Reloads the image board (refresh)
define(S_UPFAIL, 'Ошибка: Upload failed.');								//Returns Ошибка for failed upload (reason: unknown?)
define(S_NOREC, 'Ошибка: Cannot find record.');								//Returns Ошибка when record cannot be found
define(S_SAMEPIC, 'Ошибка: Duplicate md5 checksum detected.');						//Returns Ошибка when a md5 checksum dupe is detected
define(S_TOOBIG, 'This image is too large!  Upload something smaller!');
define(S_TOOBIGORNONE, 'Image is too big or there is no image at all.');
define(S_UPGOOD, ' '.$upfile_name.' uploaded!<br><br>');					//Defines message to be displayed when file is successfully uploaded
define(S_STRREF, 'Ошибка: String refused.');								//Returns Ошибка when a string is refused
define(S_UNJUST, 'Ошибка: Unjust POST.');								//Returns Ошибка on an unjust POST - prevents floodbots or ways not using POST method?
define(S_NOPIC, 'Ошибка: No file selected.');								//Returns Ошибка for no file selected and override unchecked
define(S_NOTEXT, 'Ошибка: No text entered.');								//Returns Ошибка for no text entered in to subject/comment
define(S_MANAGEMENT, 'Manager : ');									//Defines prefix for Manager Post name
define(S_DELETION, 'Удаление');										//Prints deletion message with quotes?
define(S_TOOLONG, 'Ошибка: Field too long.');								//Returns Ошибка for too many characters in a given field
define(S_UNUSUAL, 'Ошибка: Abnormal reply.');								//Returns Ошибка for abnormal reply? (this is a mystery!)
define(S_BADHOST, 'Ошибка: Host is banned.');								//Returns Ошибка for banned host ($badip string)
define(S_PROXY80, 'Ошибка: Proxy detected on port 80.');							//Returns Ошибка for proxy detection on port 80
define(S_PROXY8080, 'Ошибка: Proxy detected on port 8080.');							//Returns Ошибка for proxy detection on port 8080
define(S_SUN, 'Вск');											//Defines abbreviation used for "Sunday"
define(S_MON, 'Пнд');											//Defines abbreviation used for "Monday"
define(S_TUE, 'Втр');											//Defines abbreviation used for "Tuesday"
define(S_WED, 'Срд');											//Defines abbreviation used for "Wednesday"
define(S_THU, 'Чтв');											//Defines abbreviation used for "Thursday"
define(S_FRI, 'Птн');											//Defines abbreviation used for "Friday"
define(S_SAT, 'Субкота');											//Defines abbreviation used for "Saturday"
define(S_ANONAME, 'Аноним');										//Defines what to print if there is no text entered in the name field
define(S_ANOTEXT, '');										//Defines what to print if there is no text entered in the comment field
define(S_ANOTITLE, '');									//Defines what to print if there is no text entered into subject field
define(S_RENZOKU, 'Ошибка: Flood detected, post discarded.');						//Returns Ошибка for $sec/post spam filter
define(S_RENZOKU2, 'Ошибка: Flood detected, file discarded.');						//Returns Ошибка for $sec/upload spam filter
define(S_RENZOKU3, 'Ошибка: Flood detected.');								//Returns Ошибка for flood? (don't know the specifics)
define(S_DUPE, 'Ошибка: Duplicate file entry detected.');						//Returns Ошибка for a duped file (same upload name or same tim/time)
define(S_NOTHREADERR, 'Ошибка: Thread specified does not exist.');					//Returns Ошибка when a non-existant thread is accessed
define(S_SCRCHANGE, 'Updating page.');									//Defines message to be displayed when post is successful	
define(S_TOODAMNSMALL, 'Ошибка: Image too small.');                //Ошибка for small images								//
define(S_BADDELPASS, 'Ошибка: Password incorrect.');							//Returns Ошибка for wrong password (when user tries to delete file)
define(S_WRONGPASS, 'Ошибка: Management password incorrect.');						//Returns Ошибка for wrong password (when trying to access Manager modes)
define(S_RETURNS, 'Return');										//Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
define(S_LOGUPD, 'Update');										//Updates the log/SQLDB by accessing the PHP file
define(S_MANAMODE, 'Manager Mode');									//Prints heading on top of Manager page
define(S_MANAREPDEL, 'Management Panel');								//Defines Management Panel radio button--allows the user to view the management panel (overview of all posts)
define(S_MANAPOST, 'Manager Post');									//Defines Manager Post radio button--allows the user to post using HTML code in the comment box
define(S_MANASUB, 'Submit');										//Defines name for submit button in Manager Mode
define(S_DELLIST, 'Management Panel');									//Prints sub-heading of Management Panel
define(S_ITDELETES, 'Delete');										//Defines for deletion button in Management Panel
define(S_MDRESET, 'Reset');										//Defines name for field reset button in Management Panel
define(S_MDONLYPIC, 'File Only');									//Sets whether or not to delete only file, or entire post/thread
define(S_MDTABLE1, '<th>Delete?</th><th>Post No.</th><th>Time</th><th>Subject</th>');			//Explains field names for Management Panel (Delete?->Subject)
define(S_MDTABLE2, '<th>Name</th><th>Comment</th><th>Host</th><th>Size<br>(Bytes)</th><th>md5</th><th>Reply #</th><th>Local filename</th><th>Age</th>');	//Explains names for Management Panel (Name->md5)
define(S_RESET, 'Reset');										//Sets name for field reset button (global)
define(S_IMGSPACEUSAGE, 'Space used :');						//Prints space used KB by the board under Management Panel
define(S_CANNOTWRITE, 'Ошибка: Cannot write to directory.<br>');						//Returns Ошибка when the script cannot write to the directory, this is used on initial setup--check your chmod (777)
define(S_NOTWRITE, 'Ошибка: Cannot write to directory.<br>');						//Returns Ошибка when the script cannot write to the directory, the chmod (777) is wrong
define(S_NOTREAD, 'Ошибка: Cannot read from directory.<br>');						//Returns Ошибка when the script cannot read from the directory, the chmod (777) is wrong
define(S_NOTDIR, 'Ошибка: Directory does not exist.<br>');						//Returns Ошибка when the script cannot find/read from the directory (does not exist/isn't directory), the chmod (777) is wrong
define(S_SQLCONF, 'MySQL connection failure');		//MySQL connection failure
define(S_SQLDBSF, 'Database Ошибка, check SQL settings<br>');	//database select failure
define(S_TCREATE, 'Creating table!<br>\n');	//creating table
define(S_TCREATEF, 'Unable to create table!<br>');		//table creation failed
define(S_SQLFAIL, 'Critical SQL problem!<br>');		//SQL Failure
define(S_QUOTE, 'Цитата');
define(S_PERMALINK, 'Permalink thread');
define(S_RESNUM, 'Ответ в тред:');
define(S_BANS, 'Ban');
define(S_BANS_EXTRA, '');
define(S_CAPFAIL, 'You seem to have mistyped the verification.');
define(STIBS_VERSION, 'v1.1');
?>

