<?php
session_start();
if(!isset($_SESSION['ussername'])){
    header("Location: ../index.php");
}