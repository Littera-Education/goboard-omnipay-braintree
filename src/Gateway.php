<?php
namespace Sproutstudioinc\Braintree;

use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{

    public function getName()
    {
        return 'Braintree';
    }
    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'publicKey' => '',
            'privateKey' => '',
            'testMode' => 'production',
        );
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getPublicKey()
    {
        return $this->getParameter('publicKey');
    }

    public function setPublicKey($value)
    {
        return $this->setParameter('publicKey', $value);
    }

    public function getPrivateKey()
    {
        return $this->getParameter('privateKey');
    }

    public function setPrivateKey($value)
    {
        return $this->setParameter('privateKey', $value);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\AuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\AuthorizeRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\CaptureRequest
     */
    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\CaptureRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\PurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\PurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\RefundRequest
     */
    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\RefundRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\VoidRequest
     */
    public function void(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\VoidRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\CreateCustomerRequest
     */
    public function createCustomer(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\CreateCustomerRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\GenerateClientTokenRequest
     */
    public function generateClientToken(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\GenerateClientTokenRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\CreateMerchantRequest
     */
    public function createMerchant(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\CreateMerchantRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\FindMerchantRequest
     */
    public function findMerchant(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\FindMerchantRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\ReleaseFromEscrowRequest
     */
    public function releaseFromEscrow(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\ReleaseFromEscrowRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\FindTransactionRequest
     */
    public function findTransaction(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\FindTransactionRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\VoidTransactionRequest
     */
    public function voidTransaction(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\VoidTransactionRequest', $parameters);
    }


    /**
     * @param array $parameters
     * @return \Sproutstudioinc\Braintree\Message\RefundTransactionRequest
     */
    public function refundTransaction(array $parameters = array())
    {
        return $this->createRequest('\Sproutstudioinc\Braintree\Message\RefundTransactionRequest', $parameters);
    }
}
