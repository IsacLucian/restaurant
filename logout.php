<?php

session_start();

unset($_SESSION['logged_user_name']);
header('Location: /');
