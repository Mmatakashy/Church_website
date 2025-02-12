<?php
/**................................................................
 * @package eblog v 1.0
 * Hillsofts Technology Ltd.            
 * ................................................................
 */
session_start();
session_destroy();
header("location: sign-in.php");
?>