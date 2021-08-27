<?php
$address="127.0.0.1";
$port="8000";
$msg="new user available";

$sock=socket_create(AF_INET,SOCK_STREAM,0) or die("Cannot create a socket");

socket_connect($sock,$address,$port) or die("Could not connect to the socket");
$result = socket_write($sock,$msg);

socket_close($sock);
