<?php
//Функция предполагает, что ей передаётся полное имя русскими буквами.
//Например:
//Евгений, но не Женя.
//Александр, но не Саша.
function getGender($fullName)
{
    $gender = null;
    $name = mb_strtolower($fullName, 'UTF-8');

    $lastLetter = substr($name, -2);
    $lastTwoLetters = substr($name, -4);
//    echo $lastLetter;

    if ('р' === $lastLetter || 'т' === $lastLetter || ('й' === $lastLetter && 'ай' !== $lastTwoLetters) || 'н' === $lastLetter || 'л' === $lastLetter) {
        $gender = MALE;
        return $gender;
    }

    if ('а' === $lastLetter || 'ай' === $lastTwoLetters || 'и' === $lastLetter) {
        $gender = FEMALE;
    }

    return $gender;
}

const MALE = 'male';
const FEMALE = 'female';

assert(MALE === getGender('Евгений'));
assert(MALE === getGender('Александр'));
assert(FEMALE === getGender('Инна'));
assert(FEMALE === getGender('Елена'));
assert(FEMALE === getGender('Гюльчатай'));
assert(FEMALE === getGender('Мэри'));
assert(MALE === getGender('Альберт'));
assert(null === getGender('Зевс'));


