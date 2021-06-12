<?php
declare(strict_types=1);

namespace Golly\Elastic\Queries\TermLevel;

use Golly\Elastic\Queries\Query;

/**
 * Class ExistsQuery
 * @package Golly\Elastic\Queries\TermLevel
 */
class ExistsQuery extends Query
{

    /**
     * ExistsQuery constructor.
     * @param string $field
     */
    public function __construct(string $field)
    {
        $this->field = $field;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'exists';
    }

    /**
     * @return array
     */
    public function getTypeValue(): array
    {
        return [$this->field];
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            $this->getType() => (string)$this->getTypeValue()
        ];
    }
}
