<?php

namespace ImagesBundle\Api\Response;
use ImagesBundle\Api\Abstract\Response;

class ErrorResponse extends Response {
    public readonly bool $exactMatch;
    public readonly mixed $result;
    public readonly bool $success;
    public readonly bool $empty;

    function __construct(
        public readonly mixed $error = null,
    ) {
        $this->exactMatch = false;
        $this->result = null;
        $this->success = false;
        $this->empty = true;
    }
}