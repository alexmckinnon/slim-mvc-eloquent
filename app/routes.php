<?php

// Home
$app->get('/', '\Controller\HomeController:index');

// 404 Not Found
$app->notFound(function () use ($app) {
    $app->render('404.tpl.php');
});

// Error Page
$app->error(function (\Exception $e) use ($app) {
    $app->render('error.tpl.php', array(
        'error'  => $e)
    );
});
