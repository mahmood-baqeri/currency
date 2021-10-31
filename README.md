Laravel Currency Package

This Package is for Laravel 5+ .

Composer Install (for Laravel 5+)

composer require arsinex/currency


'providers' => [
	...
	\Arsinex\Currency\CurrencyServiceProvider::class,
],



Usage
use Arsinex\Currency\Money;

Money::all();
Money::convert($moneyName);


	
Credits

Mahmood Bagheri - mail.mahmood.bagheri@gmail.com
