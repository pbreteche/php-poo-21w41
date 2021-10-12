<?php

namespace Dawan;

use Dawan\http\RequestInterface;

class ContactForm
{
    private RequestInterface $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public function isSubmited()
    {
        return 'post' === $this->request->getMethod();
    }

    public function getContact()
    {
        return (object)$this->request->getFormData();
    }
}
