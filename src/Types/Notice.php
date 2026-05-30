<?php

namespace RA7\Framework\System\Exception\Types;

use RA7\Framework\System\Exception\Exception;
use Throwable;
use RA7\Framework\System\Exception\ExceptionDetails;
use RA7\Framework\System\Enums\TypesEventsEnum;

/**
 * Сповіщення фреймворку про хід його роботи.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */
class Notice extends Exception {

    /**
     * Створити сповіщення.
     *
     * @param string $message опис сповіщення
     * @param int $code код сповіщення
     * @param null|Throwable $previous попередній виняток/помилка/сповіщення (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(string $message, int $code = 0, ?Throwable $previous = null) {
        $this->details = new ExceptionDetails(type: TypesEventsEnum::Notice);

        parent::__construct($message, $this->details, $code, $previous);
    }

}