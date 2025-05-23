<?php

namespace RA7\Framework\System\Exception;

/**
 * Секретні дані винятку - можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку.
 *
 * Може містити секретне повідомлення та дані.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
class ExceptionSecretData implements ExceptionSecretDataInterface {

    /** Секретне повідомлення для адміністрації або розробника, що має бути приховано від користувача */
    public protected(set) string $message {
        get => $this->message;
    }

    /** Секретні дані винятку, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку */
    public protected(set) array $data {
        get => $this->data;
    }



    /**
     * Створити секретні дані винятку.
     *
     * @param string $message секретне повідомлення для адміністрації або розробника, що має бути приховано від користувача
     * @param array $data секретні дані, що можна використовувати для логування прихованої інформації або для передачі даних, необхідних для обробки винятку
     */
    public function __construct(string $message = '', array $data = []) {
        $this->message = $message;
        $this->data = $data;
    }

}