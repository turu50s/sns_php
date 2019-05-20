<?php
namespace MyApp\Exception;

class InvalidEmail extends \Exception {
  // メッセージを上書き
  protected $message = 'Invalid Email!';  
}