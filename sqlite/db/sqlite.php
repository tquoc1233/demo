<?php
class sqlite extends SQLite3 {
    function __construct() {
        $this->open('chinook.db');
    }
}

?>