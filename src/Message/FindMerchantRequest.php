<?php
namespace Sproutstudioinc\Braintree\Message;

class FindMerchantRequest extends AbstractRequest
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
        $response = \Braintree_MerchantAccount::find($data);
        return $this->response = new Response($this, $response);
    }

    public function getId()
    {
        return $this->getParameter('id');
    }

    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }
}
