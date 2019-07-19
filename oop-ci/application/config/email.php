<?php defined('BASEPATH') OR exit('No direct script access allowed');

// create email using Ethereal Email, 
$data = array('requestor' => 'nodemailer', 'version' => '6.3.0');
$hasilAPI = CallAPI('POST', 'https://api.nodemailer.com/user', $data);
$objAPI = json_decode($hasilAPI);
$mail = $objAPI->user;
$pass = $objAPI->pass;


$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => $objAPI->smtp->host,
    'smtp_port' => $objAPI->smtp->port,
    'smtp_user' => $mail,
    'smtp_pass' => $pass,
    'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
);