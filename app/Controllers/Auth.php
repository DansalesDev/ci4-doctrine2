<?php


namespace App\Controllers;


class Auth  extends BaseController {

    public function login() {
       $this->customView('auth/loginForm');
    }

    public function signin(){
        die('tete');
    }

}