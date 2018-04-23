<?

$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__).'/../');

ini_set('log_errors', 'On');
error_reporting('E_ALL & ~E_NOTICE');
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'].'/.daemon/.php_errors.txt');

$daemon = true;

for ($iteration = 1; true; $iteration++)
{
	include ('lord.php');
	if (!$daemonLife) die();

	file_put_contents('daemon-log.txt', date('d.m.Y H:i:s')."\r\n");

	include ('daemon__mission.php');
}

?>