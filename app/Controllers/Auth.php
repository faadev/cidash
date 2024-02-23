<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Codeigniter\HTTP\RequestInterface;

class Auth extends BaseController
{
  public function login()
  {
    return view('auth/login_frm');
  }
}
