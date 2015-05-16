## CRUD Laravel 5 PHP Framework

![alt tag](http://i.imgur.com/shZE11V.png)

Setting UP

1. First require it in :  
	composer require "illuminate/html":"5.0.*"
	
    Next up add the service provider and aliases. Open /config/app.php and update as follows:
    
	'providers' => [
		... 
		'Illuminate\Html\HtmlServiceProvider',
	],
	 
	'aliases' => [
	 
		...
	 
		'Form'=> 'Illuminate\Html\FormFacade', 
		'HTML'=> 'Illuminate\Html\HtmlFacade',
	],

2. Setting your database connection on .env 
3. Import SQL File in your database
4. And do initials dependency manager ~# composer install
5. Happy Coding :)
