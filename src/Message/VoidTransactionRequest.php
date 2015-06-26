<?php
namespace Sproutstudioinc\Braintree\Message;

use Braintree;

class VoidTransactionRequest extends AbstractRequest
{

    public function getData()
    {
        return $this->getTransactionId();
    }

    public function sendData($data)
    {
        $response = \Braintree_Transaction::void($data);
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
