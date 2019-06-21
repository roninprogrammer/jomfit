<?php



/* URL PROJECT */

define ('SITE_URL', 'https://jomfit-backend-php.herokuapp.com/');

/* DATABASE CONFIGURATION */

$database = array(
'host' => '	u0zbt18wwjva9e0v.cbetxkdyhwsb.us-east-1.rds.amazonaws.com',
'db' => 'n85b86rgugw59m0p',
'user' => 'sicpjftag72a9649',
'pass' => 'lmbvqfp8v29yuui9'
);

$email_config = array(
'email_address' => 'EMAIL_ADDRESS_HERE',
'email_password' => 'PASSWORD_HERE',
'email_subject' => 'EMAIL_SUBJECT_HERE',
'email_name' => 'EMAIL_NAME_HERE',
'smtp_host' => 'EMAIL_HOST_HERE',
'smtp_port' => 'EMAIL_PORT_HERE',
'smtp_encrypt' => 'tls'
);

$items_config = array(
    
    'items_per_page' => '8',
    'images_folder' => 'images/'
);


?>