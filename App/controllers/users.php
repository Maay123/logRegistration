<?php
    $id = '';
    $username = '';
    $email = '';
    $password = ''; 
    $passwordConf = '';
    $errors = array();
    $table = 'users';
    
    function userLogin($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['message'] = "You are now logged in";
        $_SESSION['type'] = "Success";
        header('location: index.php');
    }
    if(isset($_POST['register-btn']) || isset($_POST['save-user'])){

        $errors = validateUser($_POST);

        if(count($errors)==0){
            unset($_POST['register-btn'], $_POST['passwordConf'], $_POST['save-user']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            
                $user_id = create($table, $_POST);
                $user = selectOne($table, ['id' => $user_id]);

                userLogin($user);
           
        }
        
    }
    
    if(isset($_POST['login-btn'])){
        $errors = validateLogin($_POST);
        if(count($errors)==0){
            $user = selectOne($table, ['username' => $_POST['username']]);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                userLogin($user);
            } else {
                array_push($errors, "Wrong credentials");
            }
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    
?>