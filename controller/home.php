<?php

namespace Controller;

require_once './vendor/autoload.php';

class Home
{
  public function __construct()
  {
    $loader = new \Twig\Loader\FilesystemLoader('./view');
    $twig = new \Twig_Environment($loader);

    echo $twig->render('main.twig');
  }
}
