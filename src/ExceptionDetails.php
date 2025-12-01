<?php

namespace RA7\Framework\System\Exception;

use RA7\Framework\System\Enums\EventInitiatorsEnum;
use RA7\Framework\System\Enums\TypesEventsEnum;

/**
 * Деталі винятку - містить додаткову або службову інформацію про виняток.
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
class ExceptionDetails implements ExceptionDetailsInterface {

    /** Ініціатор винятку (наприклад: фреймворк, додаток, модуль або інше) */
    public protected(set) EventInitiatorsEnum $initiator {
        get => $this->initiator;
    }

    /** Тип винятку (виняток, помилка, попередження, нотифікація, застаріле і т.п.) */
    public protected(set) TypesEventsEnum $type {
        get => $this->type;
    }

    /** Посилання на документацію до винятку */
    public protected(set) string $link {
        get => $this->link;
    }

    /** Секретні дані, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку */
    public protected(set) ?ExceptionSecretDataInterface $secret = null {
        get => $this->secret;
    }



    /**
     * Створити деталі винятку.
     *
     * @param EventInitiatorsEnum $initiator ініціатор винятку (місце або компонент, що викидає виняток)
     * @param TypesEventsEnum $type тип винятку (виняток, помилка, попередження і т.д.)
     * @param string $link посилання на документацію до винятку
     * @param ExceptionSecretData|null $secret секретні дані винятку
     * (можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку)
     */
    public function __construct(
        EventInitiatorsEnum $initiator = EventInitiatorsEnum::App,
        TypesEventsEnum $type = TypesEventsEnum::Exception,
        string $link = '',
        ?ExceptionSecretDataInterface $secret = null) {

            $this->initiator = $initiator;
            $this->type = $type;
            $this->link = $link;
            $this->secret = $secret;

    }

}