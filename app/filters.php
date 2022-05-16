<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf('&hellip; <a href="%s" class="read-more md:float-right ml-[140px] md:mr-[120px] text-[#4696F2] hover:text-[#BF632C]">%s</a>', get_permalink(), __('Read more', 'sage'));
});
add_filter('excerpt_length', function() {
    return 3;
});
