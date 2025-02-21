<?php
abstract class Character{

    protected string $name;

    public function __construct(
        string $name
    ){
        $this->name=$name;
    }

    abstract public function getName( Character $character): string;

}