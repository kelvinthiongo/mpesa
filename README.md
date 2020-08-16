# Safaricom Mpesa Daraja API Laravel Package

[![Issues](https://img.shields.io/github/issues/kelvinthiongo/mpesa?style=flat-square)](https://github.com/kelvinthiongo/mpesa/issues)
[![Stars](https://img.shields.io/github/stars/kelvinthiongo/mpesa?style=flat-square)](https://github.com/kelvinthiongo/mpesa/stargazers)

## This package will enable you to consume Safaricom Mpesa Daraja API with a lot of ease. It is meant for Laravel developers.


## Installing Laravel Mpesa Daraja API package

The recommended way to install the laravel package for Safaricom Mpesa Daraja API is through
[Composer](https://getcomposer.org/).

```bash
composer require tfs/mpesa
```

Run vendor:publish artisan command

```bash
php artisan vendor:publish --provider="TFS\Mpesa\MpesaServiceProvider"
```

After publishing you will find config/mpesa.php config file. You can now adjust the configurations appropriately. Additionally, add the configurations to your env for security purposes.

Add the following files to your .env
```env
MPESA_CONSUMER_KEY=
MPESA_CONSUMER_SECRET=
MPESA_PASSKEY=
MPESA_SHORTCODE=

MPESA_MODE=sandbox
```

## Usage

You can use the path constant to easily locate the binary in the PHP codebase: 

#### Mpesa Express

``` php
use TFS\Mpesa\Mpesa;

...
$response = Mpesa::mpesa_express($phone, $amount, $AccountReference, $TransactionDesc);
...

eg.

$response = Mpesa::mpesa_express("254723077827", 1, "AccountReference", "TransactionDesc");
```
