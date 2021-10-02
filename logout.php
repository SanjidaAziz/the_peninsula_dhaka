<?php
require('functions.php');
safely_start_session();
session_destroy();
redirect('login.php');



?>