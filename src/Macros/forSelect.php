<?php

use Illuminate\Support\Collection;

if (!Collection::hasMacro('forSelect')) {
    /**
     * Получить массив ключ значние из модели по указанным полям
     *
     * @param string $valueName Имя свойства элемента коллекции, которое будет использоваться для значения
     * @param string $keyName Имя свойства элемента коллекции, которое будет использоваться  для ключа
     * @return array
     */
    Collection::macro('forSelect', function ($valueName, $keyName = 'id') {
        /**
         * @var $this Collection
         */
        return $this->pluck($valueName, $keyName)->toArray();
    });
}

if (!Collection::hasMacro('forSelectWithPrepend')) {
    /**
     * Получить массив ключ значние из модели по указанным полям с пустым первым элементом
     *
     * @param string $valueName Имя свойства элемента коллекции, которое будет использоваться для значения
     * @param string $keyName Имя свойства элемента коллекции, которое будет использоваться  для ключа
     * @param array $prepend Массив значений, которые должны быть добавлены в начало возвращаемого массива
     * @return array
     */
    Collection::macro('forSelectWithPrepend', function ($valueName, $keyName = 'id', $prepend = ['' => 'Выбрать']) {
        /**
         * @var $this Collection
         */
        return $prepend + $this->forSelect($valueName, $keyName);
    });
}