<?php
namespace Sproutstudioinc\Braintree\Message;

use Braintree;

class ReleaseFromEscrowRequest extends AbstractRequest
{

    public function getData()
    {
       /* $data = $this->getParameters();

        unset ($data["card"]);
        unset ($data["merchantId"]);
        unset ($data["privateKey"]);
        unset ($data["publicKey"]);
        unset ($data["testMode"]);*/

        return $this->getTransactionId();
    }

    public function sendData($data)
    {
        $response = \Braintree_Transaction::releaseFromEscrow($data);
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
