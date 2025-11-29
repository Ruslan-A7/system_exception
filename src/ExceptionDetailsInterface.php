<?php

namespace RA7\Framework\System\Exception;

use RA7\Framework\System\Enums\InitiatorsEnum;

/**
 * Інтерфейс деталей винятку - містить додаткову або службову інформацію про виняток.
 *
 * Ініціатор винятку - це місце або компонент, звідки буде викидатись виняток.
 * Тип винятку - призначений для визначення рівня його критичності та відповідної обробки.
 * Посилання - посилання на документацію до винятку.
 * Секрет - секретні дані, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */
interface ExceptionDetailsInterface {

    /** Ініціатор винятку (наприклад: фреймворк, додаток, модуль або інше) */
    public InitiatorsEnum $initiator {get;}

    /** Тип винятку (виняток, помилка, попередження, нотифікація, застаріле і т.п.) */
    public ExceptionTypesEnum $type {get;}

    /** Посилання на документацію до винятку */
    public string $link {get;}

    /** Секретні дані, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку */
    public ?ExceptionSecretDataInterface $secret {get;}



    /**
     * Створити деталі винятку.
     *
     * @param InitiatorsEnum $initiator ініціатор винятку (місце або компонент, що викидає виняток)
     * @param ExceptionTypesEnum $type тип винятку (виняток, помилка, попередження і т.д.)
     * @param string $link посилання на документацію до винятку
     * @param ExceptionSecretDataInterface|null $secret секретні дані винятку
     * (можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку)
     */
    public function __construct(
        InitiatorsEnum $initiator = InitiatorsEnum::App, 
        ExceptionTypesEnum $type = ExceptionTypesEnum::Exception,
        string $link = '',
        ?ExceptionSecretDataInterface $secret = null
    );

}