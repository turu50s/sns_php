<?php
namespace MyApp\Exception;

class InvalidPassword extends \Exception {
  // メッセージを上書き
  protected $message = 'Invalid Password!';  
}