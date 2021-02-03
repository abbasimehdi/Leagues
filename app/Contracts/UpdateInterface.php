<?php
namespace App\Contracts;

interface UpdateInterface {
    public function update($model, array $data);
}