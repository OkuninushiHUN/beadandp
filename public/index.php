<?php

const APP_PATH = __DIR__.DIRECTORY_SEPARATOR. "..".DIRECTORY_SEPARATOR.'App'.DIRECTORY_SEPARATOR;
const STORAGE_PATH = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."resources".DIRECTORY_SEPARATOR."storage".DIRECTORY_SEPARATOR;
const VIEW_PATH=__DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."resources".DIRECTORY_SEPARATOR."view";

require_once APP_PATH."Router.php";
require_once APP_PATH."DB.php";
require_once APP_PATH."Session.php";
require_once APP_PATH."View.php";

use APP\Router;
use APP\View;
