<?php
@session_start();
session_destroy();
header("Location: /php/tienda/index.html");
?>