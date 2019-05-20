<?php
/**
 * 全体の名前空間 MyApp
 * controller, model -> サブ名前空間
 * index.php controller --> MyApp\Controller\Index
 *      lib/Controller/Index.php(lib/サブ名前空間/クラス名.php)
 */

 spl_autoload_register(function($class) {
   $prefix = 'MyApp\\';
   if (strpos($class, $prefix) === 0) {
    $className = substr($class, strlen($prefix)); 
    $classFilePath = __DIR__ . '/../lib/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($classFilePath)) {
      require $classFilePath;
    }
   }
 });