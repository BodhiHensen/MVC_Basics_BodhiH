<?php

class SneakerController extends BaseController
{
    private $sneakerModel;

    public function __construct()
    {
        $this->sneakerModel = $this->model('Sneaker');
    }

    // Parameters display en message toegevoegd
    public function index($display = 'none', $message = '')
    {
        $result = $this->sneakerModel->getAllSneakers();

        $data = [
            'title' => 'Overzicht Sneakers',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        $this->view('sneaker/index', $data);
    }

    // Nieuwe delete functie
    public function delete($Id)
    {
        $result = $this->sneakerModel->delete($Id);

        // Stuur door naar sneaker index
        header('Refresh:3; url=' . URLROOT . '/SneakerController/index');

        $this->index('flex', 'Sneaker is verwijderd');
    }
}