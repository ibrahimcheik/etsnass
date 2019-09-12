<?php
    
    $connect = mysql_connect("localhost","root","","etsnass");

    $query = "SELECT PageName FROM tbl_pages ";

    $result = mysqli_query($connect, $query);

    $base_url = "http://localhost/etsnass/";

    header("Content-type: application/xml; charset="utf-8");

    echo '<?xml version="1.0" encoding="UTF-8" standalone="no"?>'.PHP_EOL;

    echo '<urlset xmlns="https://www.sitemaps.org/shemas/sitemap/0.9 " ''


 ?>