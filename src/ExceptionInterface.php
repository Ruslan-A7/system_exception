<?php

namespace RA7\Framework\System\Exception;

use Throwable;

/**
 * Інтерфейс винятку, що розширює базовий клас користувацьких винятків PHP.
 * Призначений для всіх винятків фреймворка, його модулів та додатків на його основі.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
interface ExceptionInterface {

    /** Об'єкт з повідомленням винятку (містить його назву та опис) */
    public ExceptionMessageInterface $fullMessage {get;}

    /** Деталі винятку */
    public ExceptionDetailsInterface $details {get;}



    /**
     * Створити виняток.
     *
     * @param ExceptionMessageInterface|null $fullMessage містить назву та опис винятку
     * @param ExceptionDetailsInterface|null $details містить додаткові деталі винятку
     * @param int $code код винятку
     * @param null|Throwable $previous попередній виняток (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(?ExceptionMessageInterface $fullMessage = null, ?ExceptionDetailsInterface $details = null, int $code = 0, ?Throwable $previous = null);

}