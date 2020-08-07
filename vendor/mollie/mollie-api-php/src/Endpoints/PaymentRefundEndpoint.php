<?php

namespace _PhpScoper5eddef0da618a\Mollie\Api\Endpoints;

use _PhpScoper5eddef0da618a\Mollie\Api\Resources\Payment;
use _PhpScoper5eddef0da618a\Mollie\Api\Resources\Refund;
use _PhpScoper5eddef0da618a\Mollie\Api\Resources\RefundCollection;
class PaymentRefundEndpoint extends \_PhpScoper5eddef0da618a\Mollie\Api\Endpoints\CollectionEndpointAbstract
{
    protected $resourcePath = "payments_refunds";
    /**
     * Get the object that is used by this API endpoint. Every API endpoint uses one type of object.
     *
     * @return Refund
     */
    protected function getResourceObject()
    {
        return new \_PhpScoper5eddef0da618a\Mollie\Api\Resources\Refund($this->client);
    }
    /**
     * Get the collection object that is used by this API endpoint. Every API endpoint uses one type of collection object.
     *
     * @param int $count
     * @param \stdClass $_links
     *
     * @return RefundCollection
     */
    protected function getResourceCollectionObject($count, $_links)
    {
        return new \_PhpScoper5eddef0da618a\Mollie\Api\Resources\RefundCollection($this->client, $count, $_links);
    }
    /**
     * @param Payment $payment
     * @param string $refundId
     * @param array $parameters
     *
     * @return Refund
     * @throws \Mollie\Api\Exceptions\ApiException
     */
    public function getFor(\_PhpScoper5eddef0da618a\Mollie\Api\Resources\Payment $payment, $refundId, array $parameters = [])
    {
        return $this->getForId($payment->id, $refundId, $parameters);
    }
    /**
     * @param string $paymentId
     * @param string $refundId
     * @param array $parameters
     *
     * @return \Mollie\Api\Resources\BaseResource|\Mollie\Api\Resources\Refund
     * @throws \Mollie\Api\Exceptions\ApiException
     */
    public function getForId($paymentId, $refundId, array $parameters = [])
    {
        $this->parentId = $paymentId;
        return parent::rest_read($refundId, $parameters);
    }
}