<?php
if ($_GET['randomId'] != "q_J6BCHNwcZ0II4BwGl9Njllqbjd_lYbimXOW9ep8f8QzD6aQMTqtfe8EVLInPkp") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
