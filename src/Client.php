<?php


namespace Daro\Ditest;


class Client
{
    public function __construct(private int $id)
    {
    }

    public function getId()
    {
        return $this->id;
    }
}