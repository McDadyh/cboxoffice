<?php

$admin = '/' . $_ENV['ADMIN_FOLDER'];

$router->addMatchTypes(['uuid' => '[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}']);

// Users
$router->map('GET|POST', $admin . '/connexion', 'users/login', 'login'); // 3
$router->map('GET', $admin . '/deconnexion', 'users/admin_deconnect', 'deconnect'); // 4
$router->map('GET', $admin . '/mot-de-passe-oublie', '', 'lostPassword'); // 7
$router->map('GET', $admin . '/utilisateurs', 'users/admin_index', 'users'); // 1
$router->map('GET|POST', $admin . '/utilisateurs/editer/[uuid:id]', 'users/admin_edit', 'editUser'); // 2 / 5
$router->map('GET|POST', $admin . '/utilisateurs/editer', 'users/admin_edit', 'addUser'); // 2 / 5
$router->map('GET|POST', $admin . '/utilisateurs/supprimer/[uuid:id]', 'users/admin_delete', 'deleteUser'); // 6

//Movies
$router->map('GET|POST', $admin . '/films/editer', 'movies/admin_moviesEdit', 'moviesEdit');
$router->map('GET|POST', $admin . '/films/editer/[i:id]', 'movies/admin_moviesEdit', '');
$router->map('GET|POST', $admin . '/films/bibliotheque', 'movies/admin_moviesRead', 'library');
$router->map('GET|POST', $admin . '/films/supprimer/[i:id]', 'movies/admin_moviesDelete', 'moviesDelete');


//Categories
$router->map('GET|POST', $admin . '/categories', 'categories/admin_categoryRead', 'categories');
$router->map('GET|POST', $admin . '/categories/editer', 'categories/admin_categoryEdit', 'categoryEdit');
$router->map('GET', $admin . '/categories/supprimer[i:id]', 'categories/admin_categoryDelete', 'categoryDelete');
