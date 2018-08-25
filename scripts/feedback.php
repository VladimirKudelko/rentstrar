<?php 

$errors = [];

	if( isset($_POST['name']) ) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

    $myemail = $config['adminEmail'];

    if($_POST["name"] == ''){
      $errors['name'] = "Введите имя!";
    }
    if($_POST["message"] == ''){
      $errors['mess'] = "Введите сообщение!";
    }
    if($_POST["email"] == ''){
      $errors['email'] = "Введите e-mail! ";
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] .= "Введите корректно e-mail!";
    }
    if(empty($errors)){
      clean($name);
      clean($email);
      clean($message);
      
      $headers = "От: $name\r\nПочта: $email\r\nСообщение: $message\r\n";
      mail($myemail, $message, $headers);
      $success = "Ваше сообщение успешно отправлено!";
      ?>
      <script type="text/javascript">
        alert("Ваше сообщение успешно отправлено!");
      </script>
      <?php
    } 
	}

  function clean($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
}
 ?>