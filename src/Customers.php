<?php

use Stripe\Customer;
use Stripe\Exception\ApiErrorException;

class Customers extends StripeLogin
{
    /**
     * @throws ApiErrorException
     */
    public function createCustomer(array $data): Customer
    {
        return $this->getPrivateKeyStripe()->customers->create($data);
    }

    /**
     * @throws ApiErrorException
     */
    public function updateCustomer(?string $customerId, array $data): Customer
    {
        return $this->getPrivateKeyStripe()->customers->update($customerId, $data);
    }
}