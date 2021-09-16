<?php

require_once "bootstrap.php";

$new_discount = new DiscountItems;

$new_discount->set_active_state("activated")
            ->set_discount_ratue("100")
            ->set_iat(time())
            ->set_nbf(time());

$entityManager->persist($new_discount);

$entityManager->flush();