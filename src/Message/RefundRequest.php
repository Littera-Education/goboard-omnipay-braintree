<?php
namespace Sproutstudioinc\Braintree\Message;

use Braintree;

class RefundRequest extends AbstractRequest
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
        $response = \Braintree_Transaction::refund($data['transactionId'], isset($data['amount']) ? $data['amount'] : null);
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
