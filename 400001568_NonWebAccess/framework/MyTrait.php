<?php
    trait MyTrait{

        abstract public function makeConnection():void;
        abstract public function findAll():array;
        abstract public function findRecord(string $id):array;
    }
?>