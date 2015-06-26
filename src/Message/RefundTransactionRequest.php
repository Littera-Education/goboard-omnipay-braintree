<?php
namespace Sproutstudioinc\Braintree\Message;

use Braintree;

class RefundTransactionRequest extends AbstractRequest
{

    public function getData()
    {
        $data = $this->getParameters();

        unset ($data["card"]);
        unset ($data["merchantId"]);
        unset ($data["privateKey"]);
        unset ($data["publicKey"]);
        unset ($data["testMode"]);

        return $data;
    }

    public function sendData($data)
    {
        $response = \Braintree_Transaction::refund($data);
        return $this->response = new Response($this, $response);
    }


    public function getTransactionId()
    {
        return $this->getParameter('transactionId');
    }

    public function setDescriptor($value)
    {
        return $this->setTransactionId('transactionId', $value);
    }
}
