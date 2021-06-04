<?php


    declare(strict_types = 1);


    namespace ReflectionPayload\Arr {


        function arrNthEl(array $array, int $offset = 0)
        {

            if (empty($array)) {

                return null;

            }

            return array_values($array)[$offset] ?? null;

        }

        function arrFirstEl(array $array)
        {

            return arrNthEl($array, 0);

        }

        function arrFirstKey(array $array)
        {

            return arrFirstEl(array_keys($array));

        }

        function arrWrap($value) : array
        {

            if (is_null($value)) {
                return [];
            }

            return is_array($value) ? $value : [$value];

        }

        function arrPullByValueReturnKey($value, &$array) {

            $index = array_search($value, $array, true);

            if ( ! $index) {

                return null;

            }

            unset($array[$index]);



            return $index;

        }



    }
