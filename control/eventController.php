<?php

class eventController
{
        private $model;
        public function __construct() {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/model/eventModel.php';
            $this->model = new eventModel();
        }

        public function save($nom, $date, $adresse, $categorie) {
            $id = $this->model->insert($nom, $date, $adresse, $categorie);
            return $id ? header('Location:show.php?id='.$id) : header('Location:create.php');
        }

        public function show($id) {
            return $this->model->show($id) ? $this->model->show($id) : header('Location:index.php');
        }
        public function indexEvents() {
            return $this->model->indexEvents() ? $this->model->indexEvents() : false;
        }

        public function indexCategories() {
            return $this->model->indexCategories() ? $this->model->indexCategories() : false;
        }

        public function update($id, $nom, $date, $adresse) {
            return $this->model->update($id, $nom, $date, $adresse) ? header('Location:show.php?id='.$id): header('Location:index.php');
        }

        public function delete($id) {
            return ($this->model->delete($id) ? header('Location:index.php') : header('Location:show.php?id='.$id));
        }
}