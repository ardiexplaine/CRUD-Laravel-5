## CRUD Laravel 5 PHP Framework

Setting UP
1. First require it in :  composer require "illuminate/html":"5.0.*"
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
3. And do initials dependency manager ~# composer install
4. Happy Coding :) 


