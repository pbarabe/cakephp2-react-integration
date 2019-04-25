<?php
App::uses('AppController', 'Controller');

class PagesController extends AppController {

    public function index() {
        $this->layout = 'react';
        $this->render('home');
    }

    public function get_data()
    {
        $data = [
            'greeting' => 'Hello',
            'name' => 'Gomer',
            'items' => [
                [
                    'name' => 'cookie',
                    'price' => '1.00',
                ],
                [
                    'name' => 'sock',
                    'price' => '2.00',
                ],
                [
                    'name' => 'rock',
                    'price' => '10.00',
                ],
            ]
        ];

        $this->layout = 'ajax';
        $this->viewClass='Json';
        $this->set([
            'data' => $data,
            '_serialize' => ['data']
        ]);
        $this->render();
    }
}
