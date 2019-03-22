<?php

namespace App\Exceptions;

use Exception;

class ProducctNotBelongToUser extends Exception
{
    public function render()
    {
        return ['data'=> 'Product Not Belong To User'];
    }
}
