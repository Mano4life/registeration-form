<?php
$success = "";
$error = "";
if (isset($_POST['btn'])) {
    $name = sanStr($_POST['name']);
    $username = sanStr($_POST['user-name']);
    $email = sanEmail($_POST['email']);
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $password_confirm = $_POST['pass-confirm'];
    $gender = $_POST['gender'];

    if (requiredInput($name) && requiredInput($username) && requiredInput($email) && requiredInput($phone) && requiredInput($password)) {
        if (minNo($name, 3) && minNo($username, 5) && maxNo($password, 16) && minNo($phone, 5)) {
            if (passConfirm($password, $password_confirm)) {
                $insert_sql = "INSERT INTO `users`(`name`, `user_name`, `email`, `phone_no`, `password`, `gender`) VALUES ('$name','$username','$email','$phone','$password ', '$gender')";
                $result = mysqli_query($connect_db, $insert_sql);
                if ($result) {
                    $success = "success";
                } else {
                    $error = "failed! probably a connection error..";
                }
            } else {
                $error = "passwords must match.";
            }
        } else {
            $error = "name & phone must be over 3 chars and password must be less than 16.";
        }
    } else {
        $error = "fill out all the fields.";
    }
}
?>

<?php if ($success) : ?>
    <span id="message" class="msg" style="display: block; color: green;"><?php echo $success ?></span>
<?php endif ?>
<?php if ($error) : ?>
    <span id="message" class="msg" style="display: block; color: crimson;"><?php echo $error ?></span>
<?php endif ?>