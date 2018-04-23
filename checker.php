<?

$_SERVER['DOCUMENT_ROOT'] = realpath(dirname(__FILE__).'/../');

$time = strtotime(file_get_contents('daemon-log.txt'));
$time = time() - $time;

if ($time >= 60) include 'lord.php';

?>