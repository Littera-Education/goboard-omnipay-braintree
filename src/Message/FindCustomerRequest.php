<?php
namespace Sproutstudioinc\Braintree\Message;

class FindCustomerRequest extends AbstractRequest
{

    public function getData()
    {
       $data = $this->getParameters();

       return $data;
    }

    public function sendData($data)
    {
        $response = \Braintree_Customer::find($this->getCustomerId());
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

}
