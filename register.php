<?php

$conn = new PDO(
    "mysql:host=localhost;dbname=e_learning",
    'root',
    ''
);
//set the PDO error mode to exception
$conn->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);


$_first_name = $_POST['first_name'];
$_last_name = $_POST['last_name'];
$_user_name = $_POST['user_name'];
$_address = $_POST['address'];
$_position = $_POST['position'];
$_company = $_POST['company'];
$_course_name = $_POST['course_name'];
$_cost = $_POST['cost'];
$_phone = $_POST['phone'];
$_t_id = $_POST['t_id'];
$_email = $_POST['email'];

$query = "INSERT INTO `register` (`first_name`,
                                 `last_name`,
                                 `user_name`,
                                 `address`,
                                 `position`,
                                 `company`,
                                 `course_name`,
                                 `cost`,
                                 `phone`,
                                 `t_id`,
                                 `email`) 
                                 VALUES (
                                 :first_name,
                                 :last_name,
                                 :user_name,
                                 :address,
                                 :position,
                                 :company,
                                 :course_name,
                                 :cost,
                                 :phone,
                                 :t_id,
                                 :email);";

$stmt = $conn->prepare($query);

$result = $stmt->execute(array(
    ':first_name' => $_first_name,
    ':last_name' => $_last_name,
    ':user_name' => $_user_name,
    ':address' => $_address,
    ':position' => $_position,
    ':company' => $_company,
    ':course_name' => $_course_name,
    ':cost' => $_cost,
    ':phone' => $_phone,
    ':t_id' => $_t_id,
    ':email' => $_email
));


header("location:welcome.php");

return $result;

?>