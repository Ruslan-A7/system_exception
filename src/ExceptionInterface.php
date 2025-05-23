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
    public ExceptionMessage $fullMessage {get;}

    /** Деталі винятку */
    public ExceptionDetails $details {get;}



    /**
     * Створити виняток.
     *
     * @param ExceptionMessage|null $fullMessage містить назву та опис винятку
     * @param ExceptionDetails|null $details містить додаткові деталі винятку
     * @param int $code код винятку
     * @param null|Throwable $previous попередній виняток (використовується для відстеження ланцюжків винятків)
     */
    public function __construct(?ExceptionMessage $fullMessage = null, ?ExceptionDetails $details = null, int $code = 0, ?Throwable $previous = null);

}