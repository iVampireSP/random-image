<?php
$urls = [
  'http://xxx.com/bangumi/index.php',
  'http://api.ivampire.firadio.net/tianshijianglindaowoshenbian/index.php',
  'http://api.ivampire.firadio.net/dzyzcml/index.php',
];
header('Location: '.$urls[mt_rand(0, count($urls)-1)]);