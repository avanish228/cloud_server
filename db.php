<?php
/*define('DB_SERVER', 'mysql.hostinger.in');
define('DB_USERNAME', 'u362615874_sco');
define('DB_PASSWORD', 'scolaire');
define('DB_DATABASE', 'u362615874_sco');*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Localhost@123');
define('DB_DATABASE', 'cloud');

$con=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE) or die( "Cannot Connect To Database");
if(!$con)
{
   echo "Cannot Connect To Database";
   die();
}
?>
