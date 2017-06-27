# Bestsellers Plugin for Craft CMS

Display your best selling products.

## Installation

1. Upload the `Bestsellers` directory to `craft/plugins/` on your server
2. Enable the plugin under Craft Admin > Settings > Plugins
3. See your `Bestsellers` in the Control Panel

## Methods

### getBestSellingProducts

- Display your `Bestsellers` in your templates using `craft.bestsellers.getBestSellingProducts`
- Pass an integer to get the required number of results returned: `craft.bestsellers.getBestSellingProducts(25)` (Default = 10)

### getNewProducts

- Display all products added to Craft Commerce in the given number of days in your templates using `craft.bestsellers.getNewProducts`
- Pass an integer as the first argument to set the number of results returned: `craft.bestsellers.getBestSellingProducts(25)` (Default = 10)
- Pass an integer as the second argument to return products added in `n` number of days: `craft.bestsellers.getBestSellingProducts(25, 30)` (Default = 30)

## Coding Standards

All code follows the standard PHP [PSR-2 coding style guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md).
This is being adopted by a large number of PHP frameworks, to ensure consistency in the PHP community.
The coding style can easily be verified/fixed by running [php-cs-fixer](http://cs.sensiolabs.org/).

## License

This work is licenced under the MIT license.
