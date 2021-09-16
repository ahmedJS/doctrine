<?php
/**
 * @Entity
 */
class DiscountItems {
    private $discount_ratue;
    private $id;
    private $iat;
    private $nbf;
    private $active_state;

    function set_discount_ratue($discount_ratue){
        $this->discount_ratue= $discount_ratue;
        return $this;
    }

    function set_id($id){
        $this->id = $id;
        return $this;
    }

    function set_iat($iat){
        $this->iat = $iat;
        return $this;
    }
    
    function set_nbf($nbf){
        $this->nbf = $nbf;
        return $this;
    }

    function set_active_state($active_state){
        $this->active_state = $active_state;
        return $this;
    }
}