<?php

namespace RA7\Framework\System\Exception;

/**
 * Повідомлення винятку з його назвою та описом.
 *
 * Назву винятку можна використовувати для типізації винятків - наприклад: 'Файл не знайдено', 'В доступі відмовлено', 'Недоступний тип' і т.д.
 * Опис винятку призначений для тексту, що зазвичай пишуть в $message винятку.
 * Також можна додати посилання на документацію до винятку.
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

    /** Посилання на документацію до винятку */
    public protected(set) string $link {
        get => $this->link;
    }



    /**
     * Створити повідомлення з назвою та описом винятку.
     *
     * @param string $name назва винятку (можна використовувати для типізації винятків - наприклад: 'Файл не знайдено', 'В доступі відмовлено', 'Недоступний тип' і т.д.)
     * @param string $description опис винятку (текст, що зазвичай пишуть в $message винятку)
     * @param string $link посилання на документацію до винятку
     */
    public function __construct(string $name = '', string $description = '', string $link = '') {
        $this->name = $name;
        $this->description = $description;
        $this->link = $link;
    }



    public function getMessage(): string {
        if (!empty($this->description)) {
            if (!empty($this->link)) {
                return !empty($this->name) ? $this->name . PHP_EOL . $this->description . PHP_EOL . $this->link : $this->description . PHP_EOL . $this->link;
            }
            return !empty($this->name) ? $this->name . PHP_EOL . $this->description : $this->description;
        } else {
            return $this->name;
        };
    }

}