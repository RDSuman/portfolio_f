<?php
ob_start();

// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
// dirname() returns the path to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("INCLUDE_PATH_PUB", PRIVATE_PATH . '/includes/public');
define("INCLUDE_PATH_ADM", PRIVATE_PATH . '/includes/admin');

// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
// define("WWW_ROOT", '');
// * Can dynamically find everything in URL up to "/public"

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('functions.php');
require_once('db_credentials.php');
require_once('database_functions.php');
require_once('validation_functions.php');
require_once('file_functions.php');

foreach(glob('classes/*.class.php') as $file) {
  require_once($file);
}

// Autoload class definitions
function my_autoload($class) {
  if(preg_match('/\A\w+\Z/', $class)) {
    include('classes/' . $class . '.class.php');
  }
}
spl_autoload_register('my_autoload');

$details_mast=[];
$details_mast['img']=url_for('img/avatars.svg');
$details_mast['head']='Suman Das';
$details_mast['sub_head']='Web developer - Web Designer  - Freelancer';



 ?>
