<?php
use Entities\User;
use Entities\Bug;
require_once "bootstrap.php";

$engineer = $entityManager->find(User::class,2);

$bug = new Bug();

$bug->setCreated(new DateTime())
    ->setDescription("values bug")
    ->setStatus((string)550)
    ->addEngineer($engineer);

    $entityManager->persist($bug);
$entityManager->flush();