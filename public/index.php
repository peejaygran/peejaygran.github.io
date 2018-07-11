<?php
// error_reporting(-1);
// ini_set('display_errors', 'On');
// set_error_handler("var_dump");
ini_set('date.timezone', 'Asia/Singapore');

session_start();

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../vendor/swiftmailer/swiftmailer/lib/swift_required.php';
require '../vendor/PHPMailer/PHPMailerAutoload.php';



$transport = Swift_MailTransport::newInstance();
//$transport = Swift_SmtpTransport::newInstance('localhost', 25);
// $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'SSL')
  // ->setUsername('raymundmatol@gmail.com')
  // ->setPassword('password');
$mailer = Swift_Mailer::newInstance($transport);

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';


$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true,
		'addContentLengthHeader' => false,
		'determineRouteBeforeAppMiddleware' => true,
		'db' => [
			'driver' => 'mysql',
			'host' => 'localhost',
			'database' => 'm3q9w5z2_stax_1000',
			'username' => 'm3q9w5z2_secure',
 			'password' => '@H_g}f_74Kdf',
			'charset' => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix' => ''
		]
	],

]);

$container = $app->getContainer();

// $capsule['db'] = function ($container) {
//     $capsule = new \Illuminate\Database\Capsule\Manager;
//     $capsule->addConnection($container['settings']['db']);

//     $capsule->setAsGlobal();
//     $capsule->bootEloquent();

//     return $capsule;
// };

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($container) {
    return $capsule;
};


     
class data {
	public static $data = array();
}

$container = $app->getContainer();
$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig('../views', []);

    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));

    return $view;
};

$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

// ================================================================
// Index Page
// ================================================================

$app->get('/', function ($request, $response, $args)  use($app) {
    
	
	
	// echo "<pre>";
	// print_r($this->router);
	// die("url=>".$url);

    return $this->view->render($response, 'index/index.php', []);
})->setName('index');



$app->run();