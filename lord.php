<?

if (!isset($daemon) || $iteration >= 1000)
{echo $_SERVER['DOCUMENT_ROOT'];
	shell_exec('php -f '.$_SERVER['DOCUMENT_ROOT'].'/.daemon/daemon.php > /dev/null 2>&1 &');
	echo 'Демон запущен, Повелитель.';
	die();
}

$daemonLife = false;

?>