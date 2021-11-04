<?php

// start sessions
session_start();

// menghapus semua session yang telah didefinisikan
session_destroy();

// mengarahkan menuju halaman login/
header("Location: login.php");

?>