<?php

if (!defined("DTK_AUTOLOADER_PATH"))
{
    define("DTK_AUTOLOADER_PATH", dirname(__FILE__));
}

/**
 * 注册autoLoader
 * 不要删除，除非你自己加载文件。
 **/
require(DTK_AUTOLOADER_PATH."/Autoloader.php");
