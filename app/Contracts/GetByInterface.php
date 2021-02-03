<?php
namespace App\Contracts;

interface GetByInterface {
    public function getBy($col, $value, $limit);
}