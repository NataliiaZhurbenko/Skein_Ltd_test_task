<?php

require 'vendor/autoload.php';
use Mailgun\Mailgun;

$mgClient = new Mailgun('key-92bec984dd978c5e3f4d5b8095ba19f4');

$domain = "sandboxbd335c9ec2df408d91ce24d922e9a195.mailgun.org";
$sname = 'Nataliia';
$html = file_get_contents('css_cools_inline.htm');

$result = $mgClient->sendMessage($domain, array(
	'from' => 'Nataliia Zhurbenko postmaster@sandboxbd335c9ec2df408d91ce24d922e9a195.mailgun.org',
	'to' => 'alexey.dziubyshyn@skeingroup.com',
	'cc' => 'admin@skeingroup.com',	
	'subject' => "Email sent from $sname using Mailgun",
	'html' => $html
	)
);
?>