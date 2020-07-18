<?php

/*
 * (c) Ivan Hanak <packagist@ivanhanak.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace hanakivan;

class DateFormats {

    // => 23. 12. 2020 19:00
    const DATETIME_FORMAT = "j. n. Y G:i";

    // => 12/23/20 7:00pm
    const DATETIME_FORMAT_US = "m/d/y g:ia";

    // => 19:00
    const TIME_FORMAT = "G:i";

    // => 7:00pm
    const TIME_FORMAT_US = "g:ia";

    // => 23. 12. 2020
    const DATE_FORMAT = "j. n. Y";

    // => 12/23/20
    const DATE_FORMAT_US = "m/d/y";
}