<?php
session_abort();
if(empty($_SESSION['user_name'])){
    echo"<script>alert('请不要非法访问！'); window.location.href='login_html.php'</script>";
    exit;
}
?>