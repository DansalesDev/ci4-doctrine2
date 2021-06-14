<?php

namespace App\Controllers;


use App\Models\Entities\Admin;
use App\Models\Repository\AdminRepository;

class Home extends BaseController{
	public function index() {

	    die(json_encode($this->request));
     $teste =  AdminRepository::findAll();
    }
}
