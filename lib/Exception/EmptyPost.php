<?php
namespace MyApp\Exception;

class EmptyPost extends \Exception {
  // メッセージを上書き
  protected $message = 'Please enter email/password!';  
}