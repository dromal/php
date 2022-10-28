<?php

    require_once '69link.php';
    echo (new Link())->setText('Первая ссылка<br>')->setAttr('href', '1.php')->show();
    echo (new Link())->setText('Вторая ссылка<br>')->setAttr('href', '2.php')->show();
    echo (new Link())->setText('Третья ссылка<br>')->setAttr('href', '3.php')->show();
    echo (new Link())->setText('Четвертая ссылка<br>')->setAttr('href', '4.php')->show();
    echo (new Link())->setText('Пятая ссылка<br>')->setAttr('href', '5.php')->show();
?>