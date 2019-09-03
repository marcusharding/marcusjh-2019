<?php
namespace marcusjh\lib\Extras;

/** 
	 * trims text to a space then adds ellipses if desired
	 * @param string $input text to trim
	 * @param int $length in characters to trim to
	 * @param bool $ellipses if ellipses (...) are to be added
	 * @param bool $strip_html if html tags are to be stripped
	 * @return string 
	 */
	function trim_text($input, $length, $ellipses = true, $strip_html = true) {
		//strip tags, if desired
		if ($strip_html) {
			$input = strip_tags($input);
		}

		//no need to trim, already shorter than trim length
		if (strlen($input) <= $length) {
			return $input;
		}

		//find last space within length
		$last_space = strrpos(substr($input, 0, $length), ' ');
		$trimmed_text = substr($input, 0, $last_space);

		//add ellipses (...)
		if ($ellipses) {
			$trimmed_text .= '...';
		}

		return $trimmed_text;
	}
	

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