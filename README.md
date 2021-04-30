# Laravel-клиент для API Тинькофф Бизнес

Основан на [PHP-клиенте для API Тинькофф Бизнес](https://github.com/kiriunin/tinkoff-business-api)

Позволяет делать запросы к [OpenAPI](https://business.tinkoff.ru/openapi/docs) сервиса Тинькофф Бизнес на языке PHP.
Формат данных, получаемых по REST API, полностью соответствует схеме, указанной в документации для REST API.

В REST-клиенте реализованы следующие методы:

* [Выставление счета](https://business.tinkoff.ru/openapi/docs#operation/postApiV1InvoiceSend)
* [Получить информацию по компании](https://business.tinkoff.ru/openapi/docs#operation/getApiV1Company)
* [Получить счета](https://business.tinkoff.ru/openapi/docs#operation/getApiV3Bank-accounts)
* [Получить выписку по счету клиента за определенный период](https://business.tinkoff.ru/openapi/docs#operation/getApiV1Bank-statement)

## Требования

- PHP 8.0+
- Composer
- Laravel 8.0+

## Установка

1. Установить клиент:
```bash
composer require kiriunin/laravel-tinkoff-business-api
```

2. Создать токен в личном кабиненте Тинькофф Бизнес
