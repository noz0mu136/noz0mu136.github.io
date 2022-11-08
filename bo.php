<?php
require_once 'E:\授業など\github\noz0mu136.github.io\GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

// 秘密鍵の生成と表示
$secret = $ga->createSecret();
echo "秘密鍵：{$secret}\n\n";
require_once 'E:\授業など\github\noz0mu136.github.io\GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();

// 秘密鍵の生成
$secret = $ga->createSecret();

// サービス名
$title = 'TEST';

// ユーザー名
$name = 'foo';

// QRコードURLの生成と表示
$qrCodeUrl = $ga->getQRCodeGoogleUrl($name, $secret, $title);
echo "秘密鍵のQRコードURL：{$qrCodeUrl}\n\n";
?>
