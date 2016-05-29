<?php

namespace AppBundle\RequestHandler;

class Response
{
    private $statusCode;
    private $headers = [];
    private $body;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    public function getHeader($name)
    {
        return (isset($this->headers[$name]) ? $this->headers[$name][0] : null);
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }
}
