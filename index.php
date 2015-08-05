<?php
include_once 'functions.php';
include_once 'show.php';
include_once 'config.php';
checkCookie($host,$userDB,$passwordDB);
parsingPages($host,$userDB,$passwordDB);
paginator($host,$userDB,$passwordDB);

