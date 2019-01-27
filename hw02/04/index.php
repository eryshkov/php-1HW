<?php
//Функция принимает на вход полное имя русскими буквами.
//Например:
//Евгений, но не Женя.
//Александр, но не Саша.
function getGender($fullName)
{
    $gender = null;
    $name = mb_strtolower($fullName, 'UTF-8');

    $lastLetter = substr($name, -2);
//    echo $lastLetter;

    switch (true) {
        case $lastLetter === 'й':
            $gender = MALE;
            break;
        case $lastLetter === 'р':
            $gender = MALE;
            break;
            case $lastLetter === 'а':
            $gender = FEMALE;
            break;
    }

    return $gender;
}

const MALE = 'male';
const FEMALE = 'female';

assert(MALE === getGender('Евгений'));
assert(MALE === getGender('Александр'));
assert(FEMALE === getGender('Инна'));
assert(FEMALE === getGender('Елена'));
assert(FEMALE === getGender('Елена'));


