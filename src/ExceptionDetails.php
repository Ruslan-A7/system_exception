<?php

namespace RA7\Framework\System\Exception;

use RA7\Framework\System\Enums\InitiatorsEnum;

/**
 * Деталі винятку - містить додаткові деталі для всіх винятків фреймворка, його модулів та додатків на його основі.
 *
 * Ініціатор винятку - це місце або компонент, звідки буде викидатись виняток.
 * Тип винятку - призначений для визначення рівня його критичності та відповідної обробки.
 * Секрет - секретні дані, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
class ExceptionDetails implements ExceptionDetailsInterface {

    /** Ініціатор винятку (наприклад: фреймворк, додаток, модуль або інше) */
    public protected(set) InitiatorsEnum $initiator {
        get => $this->initiator;
    }

    /** Тип винятку (виняток, помилка, попередження, нотифікація, застаріле і т.п.) */
    public protected(set) ExceptionTypesEnum $type {
        get => $this->type;
    }

    /** Секретні дані, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку */
    public protected(set) ?ExceptionSecretDataInterface $secret = null {
        get => $this->secret;
    }



    /**
     * Створити деталі винятку.
     *
     * @param InitiatorsEnum $initiator ініціатор винятку (місце або компонент, що викидає виняток)
     * @param ExceptionTypesEnum $type тип винятку (виняток, помилка, попередження і т.д.)
     * @param ExceptionSecretData|null $secret секретні дані винятку
     * (можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку)
     */
    public function __construct(
        InitiatorsEnum $initiator = InitiatorsEnum::App,
        ExceptionTypesEnum $type = ExceptionTypesEnum::Exception,
        ?ExceptionSecretDataInterface $secret = null) {
        $this->initiator = $initiator;
        $this->type = $type;
        $this->secret = $secret;
    }

}