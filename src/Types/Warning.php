<?php

namespace RA7\Framework\System\Exception\Types;

use RA7\Framework\System\Exception\Exception;
use RA7\Framework\System\Exception\ExceptionDetailsInterface;
use Throwable;
use RA7\Framework\System\Exception\ExceptionDetails;
use RA7\Framework\System\Enums\TypesEventsEnum;

/**
 * Попередження фреймворку про важливі але некритичні проблеми в його роботі.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */
class Warning extends Exception {

    /**
     * Створити попередження.
     *
     * @param string $message опис попередження
     * @param ExceptionDetailsInterface $details деталі винятку
     * @param int $code код попередження
     * @param null|Throwable $previous попередній виняток/помилка/попередження (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(
        string $message,
        ExceptionDetailsInterface $details = new ExceptionDetails(type: TypesEventsEnum::Warning),
        int $code = 0,
        ?Throwable $previous = null
    ) {
        $this->details = $details;

        parent::__construct($message, $this->details, $code, $previous);
    }

}