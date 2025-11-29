<?php

namespace RA7\Framework\System\Exception;

use Throwable;

/**
 * Інтерфейс винятку, що розширює базовий клас користувацьких винятків PHP.
 * Призначений для всіх винятків фреймворка, його модулів та додатків на його основі.
 *
 * @author Ruslan_A7 (RA7) <https://ra7.iuid.cc>
 * Код може містити деякі частини, що були створені за допомогою ChatGPT.
 * @license RA7 Open Free License <https://ra7.iuid.cc/LICENSE>
 * @github <https://github.com/Ruslan-A7>
 */
interface ExceptionInterface {

    /** Деталі винятку */
    public ExceptionDetailsInterface $details {get;}

}