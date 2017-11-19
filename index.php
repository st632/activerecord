<?php
/*class Manage{
  public static function autoload($class){
    include $class.'.php';
  }
}

spl_autoload_register(array('Manage','autoload'));
*/
include 'accounts.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

$obl=new main();

class main{

  public function __construct(){
     echo 'Existing Accounts Records.<br>';
     accounts::findAll();
     echo '<br>';
	 }
	 
	 }
	 ?>
	 
	 
	 
	 