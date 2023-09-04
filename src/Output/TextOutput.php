<?php

namespace Tomaj\NetteApi\Output;

use Tomaj\NetteApi\Response\ResponseInterface;
use Tomaj\NetteApi\Response\TextApiResponse;
use Tomaj\NetteApi\ValidationResult\ValidationResult;
use Tomaj\NetteApi\ValidationResult\ValidationResultInterface;

class TextOutput extends AbstractOutput
{
    public function __construct(int $code, string $description = '', string $contentType = 'text/plain; charset=utf-8')
    {
        parent::__construct($code, $description, $contentType);
    }

    public function validate(ResponseInterface $response): ValidationResultInterface
    {
        if (!$response instanceof TextApiResponse) {
            return new ValidationResult(ValidationResult::STATUS_ERROR);
        }
        if ($this->code !== $response->getCode()) {
            return new ValidationResult(ValidationResult::STATUS_ERROR, ['Response code doesn\'t match']);
        }
        return new ValidationResult(ValidationResult::STATUS_OK);
    }

    public function getSchema(): string
    {
        return json_encode([
            'type' => 'string',
        ]);
    }
}
