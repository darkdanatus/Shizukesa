<?php
    // WakabaMark
    $com = preg_replace("/\_\_(.*)\_\_/Usi", "<u>\\1</u>", $com);
    $com = preg_replace("/\*\*(.*)\*\*/Usi", "<b>\\1</b>", $com);
    $com = preg_replace("/\*(.*)\*/Usi", "<i>\\1</i>", $com);
    $com = preg_replace("/\%\%(.*)\%\%/Usi", "<span title=\"spoiler\" style=\"color: #000000; background-color: #000000;\" class=\"spoiler\" onmouseover=\"this.style.color='#FFFFFF';\" onmouseout=\"this.style.color=this.style.backgroundColor='#000000'\">\\1</span>", $com); 
    $com = preg_replace("/\&\&(.*)\&\&/Usi", "<iframe width=\"425\" height=\"344\" src=\"https://www.youtube.com/embed/\\1\" frameborder=\"0\" allowfullscreen></iframe>", $com);
    // BBcode
    $com = preg_replace("/\[b\](.*)\[\/b\]/Usi", "<b>\\1</b>", $com);
    $com = preg_replace("/\[u\](.*)\[\/u\]/Usi", "<u>\\1</u>", $com);
    $com = preg_replace("/\[i\](.*)\[\/i\]/Usi", "<i>\\1</i>", $com);
    $com = preg_replace("/\[spoiler\](.*)\[\/spoiler\]/Usi", "<span title=\"spoiler\" style=\"color: #000000; background-color: #000000;\" class=\"spoiler\" onmouseover=\"this.style.color='#FFFFFF';\" onmouseout=\"this.style.color=this.style.backgroundColor='#000000'\">\\1</span>", $com); 
    $com = preg_replace("/\[youtube\](.*)youtube.com\/watch\?v=(.*)\[\/youtube\]/Usi", "<iframe width=\"425\" height=\"344\" src=\"https://www.youtube.com/embed/\\1\" frameborder=\"0\" allowfullscreen></iframe>", $com);
    $com = preg_replace("/\[s\](.*)\[\/s\]/Usi", "<span style=\"text-decoration: line-through\">\\1</span>", $com);
    $com = preg_replace("/\[size=(.*)\](.*)\[\/size\]/Usi", "<span style=\"font-size:\\1ex\">\\2</span>", $com);
    $com = preg_replace("/\[quote](.*)\[\/quote\]/Usi", "<div>Quote:</div><div style=\"border:solid 1px;\">\\1</div>", $com);
    /* Auto Linker */
    $com = ereg_replace("(https?|ftp|news|http)(://[[:alnum:]\+\$\;\?\.%,!#~*/:@&=_-]+)","<a href=\"\\1\\2\">\\1\\2</a>",$com);	
?>
