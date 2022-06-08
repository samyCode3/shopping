<?php  


require_once "../core/core.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password= $_POST['password'];

   $error = ['email' => '', 'password' => '' , 'null' => ' '];
    if (empty($email) || empty($password)) {
        $error['null'] = "Invaild Login Detail";
    } else
    {
        $query = $conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $query->bindParam(':email', $email);
        $query->execute();

        $query_login_detail_checked = $query->fetch(PDO::FETCH_ASSOC);
        if ($query_login_detail_checked < 1) {
            $error['email'] = "Can't find this email please try again";
        } else
        {
            $verify_password = password_verify($password, $query_login_detail_checked['password']);
            if ($verify_password == false) {
                $error['password'] = "Password is incorrect please try again";
            } else 
            {
                 $_SESSION['id'] = $query_login_detail_checked['id'];
                 $_SESSION['fname'] = $query_login_detail_checked['fname'];
                 $_SESSION['username'] = $query_login_detail_checked['username'];
                 $_SESSION['email'] = $query_login_detail_checked['email'];
                 $_SESSION['profile'] = $query_login_detail_checked['profile'];
                 $_SESSION['vkeys'] = $query_login_detail_checked['vkeys'];
                 header("Location: ../views/home.php");
                 exit();
            }
        }

    }
}