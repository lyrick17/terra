<?php // based on PHP manual about session_destroy();
include("sql-connection/mysqli_connect.php");

session_start();

if (!isset($_SESSION['user_id'])) {
	header("location: index.php");
	exit();
} else {
	// three safeguards para sure walang session
	
	// 1 unset all session variables
	$_SESSION = array();

	// 2 session destroyed
	session_destroy();
	
	// 3 set cookie without laman and buburahin agad
	setcookie('PHPSESSID', '', time() - 3600, '/', '', 0, 0);
	header("location: index.php");
	exit();
}


?>
// will destroy the session, not just the session data.
/*if(ini_get("session.use_cookies"))  {
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	);
}*/
