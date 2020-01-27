<?php

class Customer {
    public $id = 1;
    public $name;
    public $email;
    public $location;

    public function getCustomer($id) {
        $this->id = $id;
        return 'John Doe';
    }
}

$customer = new Customer;
echo $customer->id;

?>