<?php

require_once (dirname(__FILE__) . '\db\sqlite.php');
$sqlite = new sqlite();

if(!$sqlite){
    echo $sqlite->lastErrorMsg();
    exit;
}

require_once (dirname(__FILE__) . '\db\tbl_invoices.php');
$tbl_invoices =  new tbl_invoices($sqlite);

$result_invoices = $tbl_invoices->select();

if ($tbl_invoices->getRowCount() > 0) {
    while ($row = $result_invoices->fetchArray(SQLITE3_ASSOC)) {
        var_dump($row);
    }
}


?>