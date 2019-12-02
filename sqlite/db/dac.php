<?php
class dac {
    function select($table = '', $field = '', $where = '') {
        if ($table == '') {
            $table = $this->table;
        }
        if ($field == '') {
            $field = '*';
        }
        $where = ' ' . $where;
        $sql = 'SELECT ' . $field . ' FROM ' . $table  . $where;
        
        $result = $this->db->query($sql);
        return $result;
    }
    
    function getRowCount() {
        $sql = 'SELECT COUNT(*) FROM ' . $this->table;
        return $this->db->querySingle($sql);
    }
}

?>