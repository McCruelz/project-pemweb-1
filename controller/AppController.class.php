<?php

class AppController extends Controller {
    
    function login() {
        $this -> loadView('login.php');
    }

    function kategori() {
        $this->loadView('kategori.php');
    }

    function list() {
        $this->loadView('list.php');
    }

    function detail() {
        $this->loadView('detail.php');
    }

    function edit() {
        $this->loadView('edit.php');
    }

}