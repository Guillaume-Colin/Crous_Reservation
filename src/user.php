<?php
    require_once ('./../inc/config.php');
    require_once ('./../inc/functions.php');
    require_once('./../inc/config.php');

    init_php_session();
    ensure_user_is_authentificated();


view('user');
?>