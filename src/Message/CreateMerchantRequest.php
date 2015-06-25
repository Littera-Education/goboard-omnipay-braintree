<?php
namespace Sproutstudioinc\Braintree\Message;

class CreateMerchantRequest extends AbstractRequest
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
        $response = \Braintree_MerchantAccount::create($data);
        return $this->response = new Response($this, $response);
    }

    public function getIndividual()
    {
        return $this->getParameter('individual');
    }

    public function setIndividual($value)
    {
        return $this->setParameter('individual', $value);
    }

    public function getBusiness()
    {
        return $this->getParameter('business');
    }

    public function setBusiness($value)
    {
        return $this->setParameter('business', $value);
    }

    public function getFunding()
    {
        return $this->getParameter('funding');
    }

    public function setFunding($value)
    {
        return $this->setParameter('funding', $value);
    }

    public function getTosAccepted()
    {
        return $this->getParameter('tosAccepted');
    }

    public function setTosAccepted($value)
    {
        return $this->setParameter('tosAccepted', $value);
    }

    public function getMasterMerchantAccountId()
    {
        return $this->getParameter('masterMerchantAccountId');
    }

    public function setMasterMerchantAccountId($value)
    {
        return $this->setParameter('masterMerchantAccountId', $value);
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
