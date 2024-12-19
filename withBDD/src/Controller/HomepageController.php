<?php

namespace App\Controller;

class Homepage
{
    public function index()
    {
        return [
            'page' => 'index',
            'title' => 'Homepage',
            'user' => []
        ];
    }
}