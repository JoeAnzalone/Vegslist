Vegslist
========

A little PHP script that takes an array of Foursquare venue IDs and outputs a CSV suitable for importing into a custom [Google Map](https://www.google.com/maps/d/)

### Installation
1. Copy `.env.example` to `.env`
2. Add your [Foursquare API](https://foursquare.com/developers/apps) keys to that file
3. Install [Composer](https://getcomposer.org/)
4. Run `composer install` to install the dependencies (Just [jcroll/foursquare-api-client](https://github.com/jcroll/foursquare-api-client))
5. Add/edit the Foursquare venue IDs in `venues.php`
6. Run `php index.php` or just put this on a web server if you prefer


License
-------
Vegslist is open-sourced software licensed under the [BSD 3-Clause license.](https://opensource.org/licenses/BSD-3-Clause)
