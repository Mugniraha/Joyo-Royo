<?php

namespace App\Controllers;

use App\Core\Controller;

class Orders extends Controller
{
        public object $model;

        public function __construct()
        {
            parent::cekLogin();

            $this->model = new \App\Models\Order();
        }

        public function index()
        {
            $data['rows'] = $this->model->show();
            $this->dashboard('JasaService/index', $data);
        }

        public function input()
        {
            $this->dashboard('JasaService/input');
        }

        public function save()
        {
            $this->model->save();
            header('location:' . URL . '/Orders');
        }

        public function edit($id)
        {
            $data['row'] = $this->model->edit($id);
            $this->dashboard('JasaService/edit', $data);
        }

        public function update()
        {
            $this->model->update();
            header('location:' . URL . '/Orders');
        }

        public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/Orders');
	}
}
