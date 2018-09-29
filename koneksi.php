<?php
// mengkoneksikan ke database
$server = "https://muasstepa.github.io/portofolio/";
$server_username = "muasstepa7@gmail.com";
$server_password = "muas212223";
$database_name =  "db_portal_berita";

$conn = new Mysqli($server, $server_username, $server_password, $database_name);
