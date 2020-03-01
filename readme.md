<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Weather Service (laravel 5.5)

## Uses: 

<code>
curl --location --request GET 'http://host:port/api/v1/wind/917615'
</code>

```json
{
    "zipCode": [
        "The zip code must be a Valid Zip Code."
    ]
}
```
<code>
curl --location --request GET 'http://weatherservice:8888/api/v1/wind/91761'
</code>

```json
{
    "wind": {
        "speed": 4.6,
        "deg": 270
    }
}
```
## Unit Test
<code># vendor/bin/phpunit</code>

## Packages Used 

-- axlon/laravel-postal-code-validation : Zip Code Validation 