# Обработка входящих данных

Удаляение тегов HTML и PHP а также пробелов из строки

## Требования

- PHP 4.0

## Установка

```bash
$ composer require s.gakhramanov/make-safe
```

## Использование

```php
<?php
$safeString = new SafeString();
$safeString->makeSafe('<script src="js/script.js"></script>');

```