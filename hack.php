<?php

require 'funcs.php';

$login = trim(file_get_contents('login.txt'));

hack('instagram', $login);
