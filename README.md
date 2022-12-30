###### Clone the repo

```sh
git clone https://github.com/Pijushgupta/php-password-generator.git
```

```php
include_once 'Location of password.php'
```

###### OR

###### Use Composer

```sh
composer require pijush_gupta/password-generator:dev-main
```

###### Using in the project

```php
use pgrandom\password;

$createObject = new password();
echo $createObject;

```

###### OR

```php
$createObject = new password(
	16 /*length*/,
	true /* add numbers */,
	true /* add symbols */
	);
echo $createObject;
```
