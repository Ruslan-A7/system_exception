<?php

namespace RA7\Framework\System\Exception;

use Exception as PHPException;
use Throwable;

/**
 * Виняток - розширює базовий клас користувацьких винятків PHP.
 * Призначений для всіх винятків фреймворка, його модулів та додатків на його основі.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */
class Exception extends PHPException implements ExceptionInterface {

    /** Деталі винятку */
    public protected(set) ExceptionDetailsInterface $details {
        get => $this->details;
    }



    /**
     * Створити виняток.
     *
     * @param string $message повідомлення винятку
     * @param ExceptionDetailsInterface|null $details містить додаткові деталі винятку
     * @param int $code код винятку
     * @param null|Throwable $previous попередній виняток (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(string $message = "", ?ExceptionDetailsInterface $details = null, int $code = 0, ?Throwable $previous = null) {
        $this->details = $details ? $details : new ExceptionDetails();
        parent::__construct($message, $code, $previous);
        // throw $this;
    }

}