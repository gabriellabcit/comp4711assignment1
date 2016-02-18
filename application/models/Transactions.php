<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Transactions extends CI_Model{
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    function all()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('transactions');
        return $query->result_array();
    }
    
    function getPlayerTransaction($stock)
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('transactions');
        
        foreach ($query as $record)
            if ($record['Player'] == $stock)
                    return $record;
            return null;
    }
}