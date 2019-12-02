<?php

require_once (dirname(__FILE__) . '\dac.php');

class tbl_invoices extends dac{
    public $table;
    public $db;
    
    function __construct($sqlite) {
        $this->db = $sqlite;
        $this->table = 'invoices';
    }
}













?>