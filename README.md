# PagosPyme SDK for PHP

This library provides developers with a simple set of bindings to the Mercado Pago API.

### PHP Versions Supported:

The SDK supports PHP 5.6 or major

### Installation 

#### Using Composer

1. Download [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) if not already installed
2. Go to your project directory and run `composer require "cobroinmediato/pagospyme-sdk-public-api-php"` on the command line.
3. This how your directory structure would look like.
4. Thats all, you have Mercado Pago SDK installed.


### Quick Start 

1. You have to require the library from your Composer vendor folder.

  ```php
  require __DIR__  . '/vendor/autoload.php';
  ```

2. Setup your credentials

  You have two types of credentials:

  * **For API or custom checkout:**
    ```php
    PagosPyme\SDK::setAccessToken("YOUR_ACCESS_TOKEN");      // On Production
    PagosPyme\SDK::setAccessToken("YOUR_TEST_ACCESS_TOKEN"); // On Sandbox
    ```
  * **For Web-checkout:**
    ```php
    PagosPyme\SDK::setClientId("YOUR_CLIENT_ID");
    PagosPyme\SDK::setClientSecret("YOUR_CLIENT_SECRET");
    ```

3. Using resource objects.

  You can interact with all the resources available in the public API, to this each resource is represented by classes according to the following diagram:
  
  
  **Sample**
  
```php
  <?php
  
    require __DIR__  . '/vendor/autoload.php';

    PagosPyme\SDK::setAccessToken("YOUR_ACCESS_TOKEN");

    $payment = new PagosPyme\Payment();

    $payment->transaction_amount = 141;
    $payment->token = "YOUR_CARD_TOKEN";
    $payment->description = "Ergonomic Silk Shirt";
    $payment->installments = 1;
    $payment->payment_method_id = "visa";
    $payment->payer = array(
      "email" => "larue.nienow@hotmail.com"
    );
 
    echo $payment->status;
    
  ?>
```
  
### Support 

