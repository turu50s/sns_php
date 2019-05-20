<?php
namespace MyApp\Exception;

class UnmatchEmailOrPassword extends \Exception {
  // メッセージを上書き
  protected $message = 'Email/Password do not match!';  
}