<?php
namespace Sproutstudioinc\Braintree\Message;

class UpdateCustomerRequest extends AbstractRequest
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
        $id = $data["customerId"];
        unset($data["customerId"]);

        $response = \Braintree_Customer::update($id,$data);
        return $this->response = new Response($this, $response);
    }

    public function getCompany()
    {
        return $this->getParameter('company');
    }

    public function setCompany($value)
    {
        return $this->setParameter('company', $value);
    }

    public function getCustomFields()
    {
        return $this->getParameter('customFields');
    }

    public function setCustomFields($value)
    {
        return $this->setParameter('customFields', $value);
    }

    public function getDeviceData()
    {
        return $this->getParameter('deviceData');
    }

    public function setDeviceData($value)
    {
        return $this->setParameter('deviceData', $value);
    }

    public function getEmail()
    {
        return $this->getParameter('email');
    }

    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    public function getFax()
    {
        return $this->getParameter('fax');
    }

    public function setFax($value)
    {
        return $this->setParameter('fax', $value);
    }

    public function getFirstName()
    {
        return $this->getParameter('firstName');
    }

    public function setFirstName($value)
    {
        return $this->setParameter('firstName', $value);
    }

    public function getLastName()
    {
        return $this->getParameter('lastName');
    }

    public function setLastName($value)
    {
        return $this->setParameter('lastName', $value);
    }

    public function getCustomerId()
    {
        return $this->getParameter('customerId');
    }

    public function setCustomerId($value)
    {
        return $this->setParameter('customerId', $value);
    }

    public function getId()
    {
        return $this->getParameter('id');
    }

    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    public function getPaymentMethodNonce()
    {
        return $this->getParameter('paymentMethodNonce');
    }

    public function setPaymentMethodNonce($value)
    {
        return $this->setParameter('paymentMethodNonce', $value);
    }


    public function getPhone()
    {
        return $this->getParameter('phone');
    }

    public function setPhone($value)
    {
        return $this->setParameter('phone', $value);
    }

    public function getWebSite()
    {
        return $this->getParameter('website');
    }

    public function setWebSite($value)
    {
        return $this->setParameter('website', $value);
    }

    public function getCreditCard()
    {
        return $this->getParameter('creditCard');
    }

    public function setCreditCard($value)
    {
        return $this->setParameter('creditCard', $value);
    }

}
