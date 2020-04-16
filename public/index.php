<?php

require '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);



echo $twig->render('index.html.twig', array(
    'gurl' => 'Guuurl 💁🏾',
    'feeling' => 'S.A.S.S.Y✨',

    'beautyProducts' => array(
    array('id' => 1, 'prod' => 'nail polish', 'img' => 'https://media.giphy.com/media/26tnfiHGP3qkN7pu0/giphy.gif'),
    array('id' => 2, 'prod' => 'strass', 'img' => 'https://media.giphy.com/media/lbXoHqVmsveXS/giphy.gif'),
    array('id' => 3, 'prod' => 'high heels', 'img' => 'https://media.giphy.com/media/l0HlCibtOju85TO2A/giphy.gif'),
    array('id' => 4, 'prod' => 'purse', 'img' => 'https://media.giphy.com/media/xT39D5HxsfdX7yHRx6/giphy.gif'),
    array('id' => 5, 'prod' => 'fake hair', 'img' => 'https://media.giphy.com/media/l378rBeg0lh4hmrZK/giphy.gif')
    )
));




