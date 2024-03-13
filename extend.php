<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/public/custom/common.css')
        ->css(__DIR__.'/public/custom/forum.css'),

    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/public/custom/common.css')
        ->css(__DIR__.'/public/custom/admin.css')
];