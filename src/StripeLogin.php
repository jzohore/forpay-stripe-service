<?php


use Stripe\StripeClient;
class StripeLogin
{
    private StripeClient $private_key_stripe_key;

    public function __construct(string $apiKey)
    {
        $this->private_key_stripe_key = new StripeClient($apiKey);
    }
    public function getPrivateKeyStripe(): StripeClient
    {
        return $this->private_key_stripe_key;
    }
}