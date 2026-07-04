<?php

/* Output Buffering functions temporarily store output (HTML, echo statements, warnings, etc.) in memory instead of sending it directly to the browser. */

ob_start();

echo "Hello";
echo " world.";

// ob_get_contents();
// $content = ob_get_contents();
// ob_clean();
// $content =  ob_get_clean();
// ob_end_clean();
ob_flush();
echo " -x";
$content = ob_get_flush();
// ob_end_flush();
echo $content, "\n------------------\n";



/*
ob_start(): Start output buffering
ob_get_contents(): Get/return current buffer without clearing it (also prints inner buffer content)
ob_get_clean(): Get buffer and clear/end it 
ob_clean(): Clear buffer but keep buffering active
ob_end_clean(): Deletes the buffer completely
ob_flush(): Flushes current buffer to browser but keeps buffering active (Send current buffer to the browser but continue buffering)
ob_end_flush(): Flushes buffer and turns buffering off (Send buffer and end buffering)
ob_get_flush(): Returns buffer and flushes it (Get buffer, send it, and end buffering)
*/




// Using Callback with ob_start()

function convert_to_upper($bufferContent)
{
    return strtoupper($bufferContent);
}


ob_start('convert_to_upper');

echo "hello, universe.";

ob_end_flush();

