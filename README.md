# Laravel CLI File Tree Menu (w/ navigation)

[![Build Status](https://travis-ci.org/aliozinan/cli-file-tree.svg?branch=v1.0.0)](https://travis-ci.org/aliozinan/cli-file-tree)
[![Total Downloads](https://poser.pugx.org/alio/cli-file-tree/downloads.png)](https://packagist.org/packages/alio/cli-file-tree)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/aliozinan/cli-file-tree/issues)
[![HitCount](http://hits.dwyl.io/aliozinan/cli-file-tree.svg)](http://hits.dwyl.io/aliozinan/cli-file-tree)
[![License](https://poser.pugx.org/alio/cli-file-tree/license)](https://github.com/aliozinan/cli-file-tree/blob/master/LICENSE.md)

Laravel CLI utility for file selection with a menu interface using [PHP School / CliMenu](https://github.com/php-school/cli-menu)

## Installation

You can install the package via composer:

```bash
composer require alio/cli-file-tree
```

## Usage

This Laravel CLI utility basically allows you to select a folder or a file on your system using a menu interface with navigation feature and return the selected file's path.

You can also filter the files by (multiple) file extensions using the --filter option.

```bash

php artisan clifiletree [--filter=?] [--fg=?] [--bg=?]

--filter : (optional) display only folders or certain file types by extensions. Use 'folder' to display folders only. Supports multiple file extension filters by seperating with comma (Ex: csv,xls)
  --fg : (optional) foreground color (def. green)
  --bg : (optional) background color (def. black)

(possible color values : black, red, green, yellow, blue, magenta, cyan, white)

```

Below is an example to use the library in your project (the best use case is calling it from your custom command)

``` php

use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Output\BufferedOutput;

...

$output = new BufferedOutput;
Artisan::call('clifiletree', ['--filter' => 'csv'], $output);

$file = $output->fetch();

// do whatever you want with the $file

...

```

## Screenshot

<img src="https://raw.githubusercontent.com/aliozinan/cli-file-tree/stable/cli-file-tree-screenshot.jpg" />

### Testing

``` bash
composer test
```

## Additional Notes

This package requires PHP posix extension enabled, it may not work in Windows Wamp/Xampp environments.
Compatibility with the new Windows Terminal is being investigated.

### Changelog

10/25/2019 - v1.0.0 released.

### Issues

If you discover any problems please report in the issues section.

## Contributors

- [Ali Ozinan](https://github.com/aliozinan)

Contributions and PRs are welcome!

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
