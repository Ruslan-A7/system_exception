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

    /**
     * Визначає, чи можна викидати цей виняток, чи він має залишатися прихованим (наприклад для запису в журнал)
     * В залежності від режиму запуску додатка поведінка може змінюватися, а цей параметр може ігноруватися. 
     */
    public protected(set) bool $isThrowable {
        get => $this->isThrowable;
    }

    /** Визначає, чи має цей виняток викидатися автоматично при створенні */
    public protected(set) bool $autoThrowable {
        get => $this->autoThrowable;
    }

    /** Секретні дані, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку */
    public protected(set) ?ExceptionSecretInterface $secret = null {
        get => $this->secret;
    }



    /**
     * Створити деталі винятку.
     *
     * @param EventInitiatorsEnum $initiator ініціатор винятку (місце або компонент, що викидає виняток)
     * @param TypesEventsEnum $type тип винятку (виняток, помилка, попередження і т.д.)
     * @param string $link посилання на документацію до винятку
     * @param bool $isThrowable визначає, чи можна викидати цей виняток, чи він має залишатися прихованим (наприклад для запису в журнал)
     * @param bool $autoThrowable автоматичне викидання винятку при створенні
     * @param ExceptionSecret|null $secret секретні дані винятку
     * (можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку)
     */
    public function __construct(
        EventInitiatorsEnum $initiator = EventInitiatorsEnum::App,
        TypesEventsEnum $type = TypesEventsEnum::Exception,
        string $link = '',
        bool $isThrowable = true,
        bool $autoThrowable = false,
        ?ExceptionSecretInterface $secret = null) {

            $this->initiator = $initiator;
            $this->type = $type;
            $this->isThrowable = $isThrowable;
            $this->autoThrowable = $autoThrowable;
            $this->link = $link;
            $this->secret = $secret;

    }

}