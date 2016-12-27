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

### Example
If your `venues.php` file looks like this:
```
<?php

return [
    '4a2048e8f964a520687c1fe3',
    '43276800f964a520b7271fe3',
    '4c7f0887fb74236a7727f9b9',
];
```

Vegslist will output a CSV file that looks like this:
```
"Name","Foursquare URL","Address","Latitude","Longitude"
"Champs","https://foursquare.com/v/champs/4a2048e8f964a520687c1fe3","197 Meserole St (btwn Bushwick Ave & Humboldt St) Brooklyn, NY 11206 United States","40.7083621791","-73.940812722347"
"Erin McKenna's Bakery","https://foursquare.com/v/erin-mckennas-bakery/43276800f964a520b7271fe3","248 Broome St (at Ludlow St) New York, NY 10002 United States","40.717986886909","-73.989777876779"
"Samurai Mama","https://foursquare.com/v/samurai-mama/4c7f0887fb74236a7727f9b9","205 Grand St (btwn Bedford Ave & Driggs Ave) Brooklyn, NY 11211 United States","40.714137603392","-73.960105249264"
```

License
-------
Vegslist is open-sourced software licensed under the [BSD 3-Clause license.](https://opensource.org/licenses/BSD-3-Clause)
