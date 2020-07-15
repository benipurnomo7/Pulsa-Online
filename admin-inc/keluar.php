<?php

defined('ADM_INC') or die('Akses Terlarang!');

session_destroy();
header("Location: " . ADM_URL . "?c=masuk");
exit();
