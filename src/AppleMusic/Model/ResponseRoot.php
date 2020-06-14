<?php

declare(strict_types=1);

namespace AppleMusic\Model;

/**
 * Class ResponseRoot
 * @package AppleMusic\Model
 */
class ResponseRoot
{
    protected $data;
    protected $errors;
    protected $href;
    protected $next;
    protected $results;

    public function __construct()
    {
        $this
            ->setData(null)
            ->setErrors(null)
            ->setHref('')
            ->setNext('')
            ->setResults(null);
    }

    /**
     * @return array
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    public function setData(?array $data): ResponseRoot
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param array $errors
     */
    public function setErrors(?array $errors): ResponseRoot
    {
        $this->errors = $errors;

        return $this;
    }

    public function getHref(): string
    {
        return $this->href;
    }

    public function setHref(string $href): ResponseRoot
    {
        $this->href = $href;

        return $this;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    /**
     * @param string $next
     */
    public function setNext($next): ResponseRoot
    {
        $this->next = $next;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param mixed $results
     *
     * @return ResponseRoot
     */
    public function setResults($results): ResponseRoot
    {
        $this->results = $results;

        return $this;
    }
}
