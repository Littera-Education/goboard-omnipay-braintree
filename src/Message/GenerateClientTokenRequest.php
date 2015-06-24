<?php
namespace Sproutstudioinc\Braintree\Message;

class GenerateClientTokenRequest extends AbstractRequest
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
        $response = \Braintree_ClientToken::generate($data);
        return $this->response = new Response($this, $response);
    }

    public function getCustomerId()
    {
        return $this->getParameter('customerId');
    }

    public function setCustomerId($value)
    {
        return $this->setParameter('customerId', $value);
    }

    public function getOptions()
    {
        return $this->getParameter('options');
    }

    public function setOptions($value)
    {
        return $this->setParameter('options', $value);
    }
}
