<?php

class Customer {
    private $id = 1;
    private $name;
    protected $email;
    private $balance;

    public function __construct($id, $name, $email, $balance) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }

}


class Subscriber extends Customer {
    public $plan;

    public function __construct($id, $name, $email, $balance, $plan) {
        parent::__construct($id, $name, $email, $balance);
        $this->plan = $plan;
    }

    public function getEmail() {
        return $this->email;
    }
}

$subscriber = new Subscriber(1, 'Sullivan', 'sully@cat.com', 0, 'pro');

echo $subscriber->$getEmail();

?>