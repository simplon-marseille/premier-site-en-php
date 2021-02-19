<?php require './components/header.php' ?>



<?php require './components/footer.php' ?>

<?php
 //constante prédéfinie __DIR__
// DIRECTORY_SEPARATOR
require '../vendor/autoload.php';

echo __DIR__;
 $router = new AltoRouter();

 $router->map('GET', '/home', function(){
	 require __DIR__ . 'views/home.php';
 });

$router->map('GET', '/blog', function () {
	require __DIR__ . 'views/blog.php';
});

$router->map('GET', '/contact', function () {
	require __DIR__ . 'views/contact.php';
});
?>

























<?php

// if (isset($_SERVER['REQUEST_URI'])) {
// $page = $_SERVER['REQUEST_URI'];
// } else {
// $page = '/home';
// }

// if ($page === '/home') {
// require './views/home.php';
// }

// if ($page === '/blog') {
// require './views/blog.php';
// }

// if ($page === '/contact') {
// require './views/contact.php';
// }

// if ($page !== '/home' && $page !== '/blog' && $page !== '/contact') {
// require './views/error404.php';
// }

?>