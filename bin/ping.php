<?php

function ping($host){	
    exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
    return $rval === 0;
}

?>