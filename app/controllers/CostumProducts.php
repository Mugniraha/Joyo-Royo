<?php

namespace App\Controllers;

use App\Core\Controller;

class CostumProduct extends Controller
{
        public object $model;

        public function __construct()
        {
            parent::cekLogin();

            $this->model = new \App\Models\CostumProduct();
        }

        public function index()
        {
            $data['rows'] = $this->model->show();
            $this->dashboard('CostumProduct/index', $data);
        }

        public function create()
        {
            $this->dashboard('CostumProduct/create');
        }

        public function save()
        {
            $this->model->save();
            header('location:' . URL . '/CostumProducts');
        }

        public function edit($id)
        {
            $data['row'] = $this->model->edit($id);
            $this->dashboard('CostumProduct/edit', $data);
        }

        public function update()
        {
            $this->model->update();
            header('location:' . URL . '/CostumProducts');
        }

        public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/CostumProducts');
	}
}
