<?php

class HorlogeController extends BaseController
{
    private $horlogeModel;

    public function __construct()
    {
        $this->horlogeModel = $this->model('Horloge');
    }

    public function index($display = 'none', $message = '')
    {
        $result = $this->horlogeModel->getAllHorloges();

        $data =[
            'title' => 'Overzicht Duurste Horloges',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        $this->view('horloge/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->horlogeModel->delete($Id);
        header('Refresh:3; url=' . URLROOT . '/HorlogeController/index');
        $this->index('flex', 'Het horloge is succesvol verwijderd uit de database.');
    }

    public function create()
    {
        $data = [
            'title' => 'Nieuw horloge toevoegen',
            'display' => 'none',
            'message' => ''
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk']) || empty($_POST['model']) || empty($_POST['type']) || 
                empty($_POST['prijs']) || empty($_POST['materiaal']) || 
                empty($_POST['gewicht']) || empty($_POST['releasedatum'])) {
                
                $data['display'] = 'flex';
                $data['message'] = 'Vul alle velden in';
            } else {
                $this->horlogeModel->create($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';
                header('Refresh: 3; URL=' . URLROOT . '/HorlogeController/index');
            }
        }

        $this->view('horloge/create', $data);
    }
}