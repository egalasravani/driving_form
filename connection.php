<?php
$conn = mysql_connect("localhost", "root", "");
if(!$con)
{
    die('could not connect:'. mysql_error());
}
s