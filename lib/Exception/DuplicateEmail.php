<?php
namespace MyApp\Exception;

class DuplicateEmail extends \Exception {
  // メッセージを上書き
  protected $message = 'Duplicate Email!';  
}