<?php

namespace RA7\Framework\System\Exception\Types;

use RA7\Framework\System\Exception\Exception;
use Throwable;
use RA7\Framework\System\Exception\ExceptionDetails;
use RA7\Framework\System\Enums\TypesEventsEnum;

/**
 * Виняток фреймворку лише для розробника - призначено для винятків не доступних користувачам, а лише розробникам
 * (наприклад, для збереження певної інформації в лог без сповіщення користувачу).
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */

class DevOnly extends Exception {

    /**
     * Створити виняток лише для розробника.
     *
     * @param string $message опис винятку
     * @param int $code код винятку
     * @param null|Throwable $previous попередній виняток (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(string $message, int $code = 0, ?Throwable $previous = null) {
        $this->details = new ExceptionDetails(type: TypesEventsEnum::DevOnly);

        parent::__construct($message, $this->details, $code, $previous);
    }

}