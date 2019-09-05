<?php

namespace marcusjh\lib\Utils;

/**
 * OUTPUT BUFFERED LOAD TEMPLATE PART
 *
 * loads a given template part using output buffering
 * optionally including $data to be passed into template
 *
 * @param  string $template_name name of the template to be located
 * @param  array  $data          data to be passed into the template to be included
 */
function ob_load_template_part( $template_name, $data=array() ) {

    if ( !strpos($template_name, '.php') ) {
            $template_name = $template_name . '.php';
    }

    // Optionally provided an assoc array of data to pass to tempalte
    // and it will be extracted into variables
    if ( is_array( $data ) ) {
            extract($data);
    }

    ob_start();
    include( locate_template( $template_name ) );
    $var = ob_get_contents();
    ob_end_clean();

    return $var;
}
