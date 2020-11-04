# Contact

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

``` bash
$ composer require ascodelab/contact
```

Publishing assets & config

``` bash
$ php artisan vendor:publish --provider="Ascodelab\Contact\ContactServiceProvider"
```

Roure for contact(test) page

``` bash
$ /contact
```

## Extending the Package

cd into your project root

``` bash 
$ mkdir ascodelab && cd ascodelab
```
Clone the package skelton

``` bash 
$ git clone https://github.com/ascodelab/contact.git
```
Now your project structure would look something like below screenshoot

![Screenshot](structure.png)

## Testing the project locally

1. Adding package to the composer.json 
![Screenshot](pkg.png)
2. Adding local development repository
![Screenshot](repo.png)
3. Installing the local package 
``` bash 
$ composer install/update
```
4. Hit /contact and check if it's working fine. 

## Note
Drop an email to anela.kumar@gmail.com for any quick technical support.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Anil Sharma](https://ascodelab.github.io/-/#)

## License

license. Please see the [license file](license.md) for more information.

