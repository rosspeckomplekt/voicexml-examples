<?php

sleep(6);

echo '<?xml version="1.0" ?>';
echo ' <vxml version="2.0" xmlns="http://www.w3.org/2001/vxml">';
echo '  <form>';

echo '   <block>';
echo 'Page 3, Page 3.';
echo '    <submit next="end.php" method="post"/>';
echo '   </block>';

echo '  </form>';
echo ' </vxml>';

?>