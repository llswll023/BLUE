<?php

namespace Controllers;

// use Models\user;

class Users
{
    public function __construct()
    {
        $this->userModel = new user();
    }

    // Render View
    public function users()
    {
        view('TestDb/users', $this->getUsers());
    }

    public function hello()
    {
        return "hello";
    }

    // CREATE new task
    public function addUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->userModel->createUser($_POST['id'], $_POST[`nickname`], $_POST[`pw`], $_POST[`name`], $_POST['phone'], $_POST[`email`])) {
            header('location: ' . URLROOT . '/test/users', true, 303);
        } else {
            die(USER_NOT_CREATED);
        }
    }

    // // READ my data CHECK login
    // private function getUsers($nickname, $pw): array
    // {
    //     $tmp = $this->userModel->selectMydata($_POST['nickname'], $_POST['pw']);
    //     if($tmp==0) {
    //         $save=$nickname."//".$pw;
    //         setcookie("COOKIES", $save, time()+60*60*24, "/"); //24시간동안 유효
    //         $this->view = "main.php";//로그인 성공
    //     } else {
    //         //$this->data = "로그인에 실패하였습니다.";
    //         $this->view = "login.php";
    //     }

    // }

    // // // UPDATE task
    // // public function markDone($params)
    // // {
    // //   if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->taskModel->changeTaskStatus($params['id']))
    // //     header('location: ' . URLROOT . '/test/tasks', true, 303);
    // //   else
    // //     die(TASK_NOT_UPDATED);
    // // }

    // // DELETE task
    // public function delete($params)
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->taskModel->deleteTask($params['id'])) {
    //         header('location: ' . URLROOT . '/test/tasks', true, 303);
    //     } else {
    //         die(TASK_NOT_DELETED);
    //     }
    // }
}
