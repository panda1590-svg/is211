<?php 
session_start();
$_SESSION['basket'] = [];
header('Location: https://localhost/orders');