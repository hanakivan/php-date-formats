Human readable constants ready to be used instead of guessing what date parameter to use.

## Installation

### With composer
```
$ composer require nesbot/carbon
```

```json
{
    "require": {
        "hanakivan/dateformats": "^2.0"
    }
}
```

## Usage
```php
use hanakivan\DateFormats;

$now = new \DateTime();

//prints current date, e.g. 20. 8. 2020
echo $now->format(DateFormats::DATE_FORMAT);

```

## Available formats 
- `DATETIME_FORMAT` // => "j. n. Y G:i" or "23. 12. 2020 19:00"
- `DATETIME_FORMAT_US` // => "m/d/y g:ia" or "12/23/20 7:00pm"
- `TIME_FORMAT` // => "G:i" or "19:00"
- `TIME_FORMAT_US` // => "g:ia" or "7:00pm"
- `DATE_FORMAT` // => "j. n. Y" or  "23. 12. 2020
- `DATE_FORMAT_US` // => "m/d/y" or "12/23/20"
- `MONTH_FULL_NAME` // => "F" or e.g. January, March, December
- `MONTH_NUMBER` // => "n" or e.g. 1, 2, 12
- `FULL_YEAR` // => "Y" or e.g. 2020...
- `DAY_NUMBER` // => "j";  day number without leading zero, e.g. 1, 4, 10, 31...