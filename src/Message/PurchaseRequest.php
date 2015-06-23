<?php
namespace Sproutstudioinc\Braintree\Message;

use Braintree;

class PurchaseRequest extends AbstractRequest
{

    public function getData()
    {
        $this->validate('amount');
        $data['amount'] = $this->getAmount();

        $token = $this->getCardReference();
        if($token) {
            $data['paymentMethodToken'] = $token;
        }else {
            $card = $this->getCardData();
            if ($card) {
                $data['creditCard'] = $card;
            }
        }

        $data['options'] = array(
            'submitForSettlement' => true,
        );

        return $data;
    }

    public function sendData($data)
    {
        $response = \Braintree_Transaction::sale($data);
        return $this->response = new Response($this, $response);
    }
}
