<?php

/**
 *
 */

namespace App\Controllers;
use App\Core\App;

class PagesController
{

  public function home()
  {
    $users = App::get('database')->selectAll('Users');

    require 'views/index.view.php';
  }

  public function about()
  {
    require 'views/about.view.php';
  }

  public function contact()
  {
    require 'views/contact.view.php';
  }
}


 ?>
