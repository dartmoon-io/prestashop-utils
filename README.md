# Prestashop Utils
A collection of useful utils.

## Installation

```bash
composer require dartmoon/prestashop-utils
```

## Multilang text
This util will get all the languages installed inside PrestaShop and generate the multitext of the input string. The index of the array will be the id of the language.

```php
use Dartmoon\Utils\Facades\MultiLangText;

$text = MultiLangText::generate('text'); // [0 => 'text', 3 => 'text', ...]
```

## License

This project is licensed under the MIT License - see the LICENSE.md file for details