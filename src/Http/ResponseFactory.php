<?php
namespace Pinapi\Http;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ResponseFactory
{

    private $data;
    private $status;
    private $headers;
    private $options;

    /**
     * ResponseFactory constructor.
     * @param null|string|array $data
     * @param int               $status
     * @param array             $headers
     * @param int               $options
     */
    public function __construct($data = null, $status = 200, $headers = [], $options = 0)
    {
        $this->data = $data;
        $this->status = $status;
        $this->headers = $headers;
        $this->options = $options;
        return new Response($this->data, $this->status, $this->headers);
    }

    /**
     * Return a new JSON response from the application
     *
     * @see __construct
     *
     * @return JsonResponse
     */
    public function json()
    {
        return new JsonResponse($this->data, $this->status, $this->headers, $this->options);
    }

    public function download()
    {
        
    }
}