<?php

use Illuminate\Support\Collection;

if (!Collection::hasMacro('randomSafe')) {
    /**
     * Аналог стадандртного метода random, но в случае если размер коллекции меньше
     * запрашиваемого числа элементов не выкидывается ошибка, а возвращается столько элементов сколько есть в коллекции
     *
     * @param int|null $number Кол-во элементов
     * @return array
     */
    Collection::macro('randomSafe', function (int $number = null) {
        /**
         * @var $this Collection
         */

        $size = $this->count();

        return $size >= $number ? $this->random($number) : $this->random($size);
    });
}