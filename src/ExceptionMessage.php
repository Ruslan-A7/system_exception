<?php

namespace RA7\Framework\System\Exception;

/**
 * Повідомлення винятку з його назвою та описом.
 *
 * Назву винятку можна використовувати для типізації винятків - наприклад: 'Файл не знайдено', 'В доступі відмовлено', 'Недоступний тип' і т.д.
 * Опис винятку призначений для тексту, що зазвичай пишуть в $message винятку.
 *
 * Якщо опис винятку не задати, то метод getMessage() верне назву винятку (навіть якщо це пустий рядок).
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License
 * @github <https://github.com/Ruslan-A7>
 */
class ExceptionMessage implements ExceptionMessageInterface {

    /** Назва винятку */
    public protected(set) string $name {
        get => $this->name;
    }

    /** Опис винятку */
    public protected(set) string $description {
        get => $this->description;
    }



    /**
     * Створити повідомлення з назвою та описом винятку.
     *
     * @param string $name назва винятку (можна використовувати для типізації винятків - наприклад: 'Файл не знайдено', 'В доступі відмовлено', 'Недоступний тип' і т.д.)
     * @param string $description опис винятку (текст, що зазвичай пишуть в $message винятку)
     */
    public function __construct(string $name = '', string $description = '') {
        $this->name = $name;
        $this->description = $description;
    }



    public function getMessage(): string {
        if (!empty($this->description)) {
            return !empty($this->name) ? $this->name . '<br>' . $this->description : $this->description;
        } else {
            return $this->name;
        };
    }

}