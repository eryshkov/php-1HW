<?php
const MALE = 'male';
const FEMALE = 'female';
//Функция предполагает, что ей передаётся полное имя русскими буквами.
//Например:
//Евгений, но не Женя.
//Александр, но не Саша.
function getGender($fullName)
{
    $gender = null;
    $name = mb_strtolower($fullName, 'UTF-8');

    $lastLetter = substr($name, -2);

    if ('р' === $lastLetter || 'т' === $lastLetter || 'й' === $lastLetter  || 'н' === $lastLetter || 'л' === $lastLetter) {
        $gender = MALE;
        return $gender;
    }

    if ('а' === $lastLetter || 'и' === $lastLetter) {
        $gender = FEMALE;
    }

    return $gender;
}

assert(MALE === getGender('Евгений'));
assert(MALE === getGender('Александр'));
assert(FEMALE === getGender('Инна'));
assert(FEMALE === getGender('Елена'));
assert(FEMALE === getGender('Гюльчатай'));
assert(FEMALE === getGender('Мэри'));
assert(MALE === getGender('Альберт'));
assert(null === getGender('Зевс'));


