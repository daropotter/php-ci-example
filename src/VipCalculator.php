<?php


namespace Daro\Ditest;


class VipCalculator
{

    public function getMultiplier(Client $client): float
    {
        if ($client->getId() == 13) {
            return 0.8;
        }

        return 1;
    }
}