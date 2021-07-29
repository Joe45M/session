<?php

/**
 * Get the instance of session.
 *
 * @return \Joem\App\Session
 */
function session(): \Joem\App\Session {
	return \Joem\App\Session::get_instance();
}

?>
