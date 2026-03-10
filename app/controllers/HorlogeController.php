<?php

class HorlogeController extends BaseController
{
    private $horlogeModel;

    public function __construct()
    {
        // Koppel de Horloge model
        $this->horlogeModel = $this->model('Horloge');
    }

    public function index($display = 'none', $message = '')
    {
        // Haal de data op uit de database via de model
        $result = $this->horlogeModel->getAllHorloges();

        $data =[
            'title' => 'Overzicht Duurste Horloges',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        // Stuur de data door naar de view
        $this->view('horloge/index', $data);
    }

    public function delete($Id)
    {
        // Verwijder het record via de model
        $result = $this->horlogeModel->delete($Id);

        // Stuur de gebruiker na 3 seconden terug naar het overzicht
        header('Refresh:3; url=' . URLROOT . '/HorlogeController/index');

        // Roep de index methode aan om de view te laden met een succesmelding
        $this->index('flex', 'Het horloge is succesvol verwijderd uit de database.');
    }
}