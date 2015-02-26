<?php
mysql_connect("10.0.69.21",'admin','admin');
mysql_select_db('mysql');
$res = mysql_query("show variables like 'wsrep%'");
while($r=mysql_fetch_assoc($res)){
 var_dump($r);

}
