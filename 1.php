<?php
function shutdown() {
	echo 'end';
    if (defined('END_REACHED')){
        echo 'end';
    }
}

register_shutdown_function('shutdown');

while(1)
{
	
}
?>