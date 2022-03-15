<?php 

include('./controllers/SAML2Generator.php');

$redirectUrl = SAML2Generator::getRequestUrl(
	'https://login.microsoftonline.com/239ab278-3bba-4c78-b41d-8508a541e025/saml2',
	'urn:murcreportingapp.marshall.edu',
	'https://dev.marshall.edu/murc-frs/test/ssovalidate.php'
);

header('Location: ' . $redirectUrl);
