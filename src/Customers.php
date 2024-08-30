<?php

use Stripe\Customer;

class Customers extends StripeLogin
{
    /**
     * @throws \Stripe\Exception\ApiErrorException
     */
    public function createCustomer(array $data): Customer
    {
        return $this->getPrivateKeyStripe()->customers->create($data);
    }
}