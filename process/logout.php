<?php

include '../core/AppHelper.php';


session_unset();
session_destroy();

AppHelper::redirect('/index.php');