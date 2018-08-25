<?php session_start(); ?>
<?php require_once '../controllers/admin.class.php'; ?>
<?php require_once '../config/config.php'; ?>
<?php

if ( $_GET ['a'] === 'f' ) {
	setcookie ('sUser', '', - 1, '/');
	header ("Location: admin.php");
	exit ();
}

if ( isset ($_GET ['c']) && $_GET ['c'] === 't' ) {
	if ( $_SESSION ['token'] === $_POST ['token'] ) {
		$a = new Admin ();
		if ( $a->Auth ($_POST ['login'], $_POST ['pass'], $_POST ['token']) ) {
			setcookie ('sUser', password_hash($_SERVER ['REMOTE_ADDR'], PASSWORD_DEFAULT), time () + 1600, '/');
			header ("Location: admin.php?a=t");
		} else {
			header ("Location: admin.php");
		}
	} else {
		header ("Location: admin.php");
	}
	session_destroy();
}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

<?php

if ( isset ($_GET ['a']) && $_GET ['a'] === 't' ) {
	if ( isset ($_COOKIE ['sUser']) ) {
		if ( password_verify ($_SERVER ['REMOTE_ADDR'], $_COOKIE ['sUser']) ) {
			require_once 'parts/style/style.css';
			?>
.auth { display: none; }
			<?php
		}
	}
}

?>
	</style>

	<title>Admin page!</title>
	<link rel="icon" href="../favicon.png" type="images/x-icon">
</head>
<body>
<?php

// if there is get param 'a' and this param equal 't' ('true')
if ( isset ($_GET ['a']) && $_GET ['a'] === 't' ) {
	// if there is cookie 'sUser'
	if ( isset ($_COOKIE ['sUser']) ) {
		// if cookie contains crypt ip addres
		if ( password_verify ($_SERVER ['REMOTE_ADDR'], $_COOKIE ['sUser']) ) {
			require_once 'parts/blocks/header.php';
			require_once 'parts/blocks/menu.php';
?>
<div class="mainBlock">
<?php
			// if there is get param 'np' ('NewPost') and this param equal 't' ('true')
			if ( isset ($_GET ['np']) && $_GET ['np'] === 't' ) {
				require_once 'parts/blocks/newPost.php';
			}
		}
	}
}

?></div>
	<form class="auth" action="admin.php?c=t" method="post" name="authForm">
		<?php
			$rnd = rand(999, 9999);
			$token = hash('md5', $rnd);
			$_SESSION['token'] = $token;
		?>
		<input type="text" name="login" placeholder="Введите логин">
		<input type="hidden" name="token" value="<?php echo $token; ?>">
		<input type="password" name="pass" placeholder="Введите пароль">
		<input type="submit" value="Войти">
	</form>

	<script type="text/javascript">
<?php

if ( isset ($_GET ['a']) && $_GET ['a'] === 't' ) {
	if ( isset ($_COOKIE ['sUser']) ) {
		if ( password_verify ($_SERVER ['REMOTE_ADDR'], $_COOKIE ['sUser']) ) {
			require_once 'parts/js/menu.js';
		}
	}
}

?>
	</script>

</body>
</html>
