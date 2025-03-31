<?php
/**
 * Connect to MySQL server
 * @param bool $close Use true to connect, false to close
 */
function dbConnect($close = true) {
    global $conn;
    if (!$close) {
        mysqli_close($conn);
        return true;
    }
}

/**
 * Gravatar image function
 * @see http://en.gravatar.com/site/implement/images/
 */
function avatar($mail, $size = 60) {
    $url = "http://www.gravatar.com/avatar/";
    $url .= md5(strtolower(trim($mail)));
    $url .= "?s=" . $size;
    return $url;
}
?>
