<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);


echo $twig->render('index.html.twig', array(
    'gurl' => 'Guuurl 💁🏾',
    'feeling' => 'S.A.S.S.Y✨',

    'beautyProducts' => array(
    array('id' => 1, 'prod' => 'nail polish'),
    array('id' => 2, 'prod' => 'strass'),
    array('id' => 3, 'prod' => 'high heels'),
    array('id' => 4, 'prod' => 'purse'),
    array('id' => 5, 'prod' => 'fake hair')
    )
));




