<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data = 'test';
        $this->views('canteen/dashboard/index', $data);
    }
}