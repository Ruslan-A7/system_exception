<?php

namespace RA7\Framework\System\Exception\Types;

use RA7\Framework\System\Exception\Exception;
use Throwable;
use RA7\Framework\System\Exception\ExceptionDetails;
use RA7\Framework\System\Enums\TypesEventsEnum;

/**
 * Критична помилка фреймворку що можна обробити та продовжити його роботу.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */
class RecoverableError extends Exception {

    /**
     * Створити критичну помилку що можна обробити.
     *
     * @param string $message опис помилки
     * @param int $code код помилки
     * @param null|Throwable $previous попередній виняток/помилка (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(string $message, int $code = 0, ?Throwable $previous = null) {
        $this->details = new ExceptionDetails(type: TypesEventsEnum::RecoverableError);

        parent::__construct($message, $this->details, $code, $previous);
    }

}