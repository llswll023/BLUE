<?php

namespace Controllers\Users;

use Models\user;

/**
 * ModuleClass file
 * For example for large projects with many folders (modules)
 *
 * You can access this file through http://localhost/php-basic-mvc/api/class1/index
 */


class Users
{
    public function __construct()
    {
        $this->userModel = new user();
    }

    // CREATE new User
    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->userModel->createUser($_POST['id'], $_POST[`nickname`], $_POST[`pw`], $_POST[`name`], $_POST['phone'], $_POST[`email`])) {
            header('location: ' . URLROOT . '/test/users', true, 303);
        } else {
            die(USER_NOT_CREATED);
        }
    }

    // CHECK login
    private function getUsers($nickname, $pw): array
    {
        @session_start();
     
    // ACCOUNTとPASS
    $ok_account = "admin";
    $ok_pass = "kanri";
     
    // 로그인 체크
    $flg = false;
    $account = $_SESSION['account'];
    $pass = $_SESSION['pass'];
    if ($account == $ok_account and
            $pass == $ok_pass){
        $flg = true;
    }
    // 로그인이 되어 있지 않았을 때 처리
    if (!$flg){
        echo "<html><body><h1>NOT LOGIN!!!</h1>";
        echo '<a href="./index.php">back to login page.</a>';
        echo "</body></html>";
        exit;
    }

    
        $tmp = $this->userModel->selectMydata($_POST['nickname'], $_POST['pw']);
        if($tmp==0) {
            $save=$nickname."//".$pw;
            setcookie("COOKIES", $save, time()+60*60*24, "/"); //24시간동안 유효
            $this->view = "main.php";//로그인 성공
        } else {
            //$this->data = "로그인에 실패하였습니다.";
            $this->view = "login.php";
        }

    }

    // Render View
    // public function users()
    // {
    //     view('TestDb/users', $this->getUsers());
    // }
    
>