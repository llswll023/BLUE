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

    public function login()
    {
        echo 'Log me in';
        // echo addUser();
    }

    public function logout()
    {
        echo 'Do log out';
    }

    private function addUser()
    {
        return 1;
        // if ($_SERVER['REQUEST_METHOD'] === 'POST' && $this->userModel->createUser($_POST['id'], $_POST[`nickname`], $_POST[`pw`], $_POST[`name`], $_POST['phone'], $_POST[`email`])) {
        //     header('location: ' . URLROOT . '/test/users', true, 303);
        // } else {
        //     die(USER_NOT_CREATED);
        // }
    }

}
