<?php
    #destruye sesion y te manda a la principal
    session_start();
    session_destroy();
    header ('Location: login.php');