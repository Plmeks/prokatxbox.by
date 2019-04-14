<?php

define("PROJECT", "prokatit/");
define("URL", "http://" .$_SERVER['SERVER_NAME'] ."/");
define("FULL_URL", "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
define("IMG_URL", URL .PROJECT ."content/images/");

include_once(PROJECT ."configs/main.php");
