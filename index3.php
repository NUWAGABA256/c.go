<?php
$errors=[];

if(!empty($_POST)){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $subject = $_POST["subject"];
  if(empty($name)){$errors[] = "Name is empty";
  }
  if(empty($email)){$errors[] = "email is empty";
  }else if (!filter_var($email,
  FILTER_VALIDATE_EMAIL)){$errors[] = "Email is invalid"
  }
  if(empty($phone)){$errors[] = "phone is empty";
  }
  if(empty($subject)){$errors[] = "subject is empty";
  }
  if(empty($errors)) {$recipient = " cpwebtechnologies@gmail.com";
    $headers = "From: $name <$email>";
    if(mail($recipient, $subject, $headers)){
      echo "Email sent success"
    }
  }
}