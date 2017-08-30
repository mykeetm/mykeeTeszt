<?php
/**
 * Created by PhpStorm.
 * User: mykee
 * Date: 2017. 03. 02.
 * Time: 17:16
 */


$config['user'] = "Username";
$config['passwrod'] = "Password";
$config['remoteHost'] = '192.168.10.1';


if ($config['user'] == "Username" || $config['passwrod'] == 'Password') {
    echo "please edit default config";die;
} else {
    echo "good boy!";
}
