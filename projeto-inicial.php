<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Thauan Silva',
    new \DateTimeImmutable('1998-10-31')
);

echo $student->age();
