<?php

function tropical_init() {

    //Register our theme for deyan shell
 	deyan_register_theme('tropical');

}

elgg_register_event_handler('init', 'system', 'tropical_init');

?>
