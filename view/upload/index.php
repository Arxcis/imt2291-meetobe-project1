<?php
$ROOT    = $_SERVER['DOCUMENT_ROOT'];
require_once "$ROOT/classes/Urge.php";

$userid = Urge::requireLoggedInUser();
$twig = Urge::requireTwig();
$db   = Urge::requireDatabase();
$user = User::get($db, $userid);

echo $twig->render('upload.html', array(
    'title' => 'home',
    'userid' => $userid,
    'user' => $user,
));
