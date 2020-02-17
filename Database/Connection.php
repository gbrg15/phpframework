<?php

/**
 *
 */
class Connection
{

  public static function make($config)
  {
    try {
  //return new PDO('mysql:host=127.0.0.1;dbname=testframework','root','sslmnf.0');

  return new PDO($config['connection'].';dbname='.$config['dbname'],
  $config['username'],$config['password'],$config['options']);


    } catch (\Exception $e) {
    die('Could not connect');
    }
  }
}
 ?>
