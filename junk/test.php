<?php 

echo "asdfsdaf";

$conn = mysql_connect('localhost','root','abc123');
$db = mysql_select_db('db_sdlc');

if($db){
    echo "select db";
    
    
}
else {
    echo "sadf";
    
}
?>