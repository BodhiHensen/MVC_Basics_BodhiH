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
            'message' => '',
            'errors' => []
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk'])) {
                $data['errors']['merk'] = 'Voor een merk in';
            }

            if (empty($_POST['model'])) {
                $data['errors']['model'] = 'Voor een model in';
            }

            if (empty($_POST['type'])) {
                $data['errors']['type'] = 'Voor een type in';
            }

            if (empty($_POST['prijs'])) {
                $data['errors']['prijs'] = 'Voor een prijs in';
            }

            if (empty($_POST['materiaal'])) {
                $data['errors']['materiaal'] = 'Voor een materiaal in';
            }

            if (empty($_POST['gewicht'])) {
                $data['errors']['gewicht'] = 'Voor een gewicht in';
            }

            if (empty($_POST['releasedatum'])) {
                $data['errors']['releasedatum'] = 'Voor een releasedatum in';
            }

            if (empty($data['errors'])) {
                $this->horlogeModel->create($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; URL=' . URLROOT . '/HorlogeController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('horloge/create', $data);
    }

    public function update($id = NULL)
    {
        $data = [
            'title' => 'Wijzig horloge',
            'display' => 'none',
            'message' => '',
            'color' => 'success',
            'errors' => []
        ];

        $data['horloge'] = $this->horlogeModel->getHorlogeById($id);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['merk'])) {
                $data['errors']['merk'] = 'Voor een merk in';
            }

            if (empty($_POST['model'])) {
                $data['errors']['model'] = 'Voor een model in';
            }

            if (empty($_POST['type'])) {
                $data['errors']['type'] = 'Voor een type in';
            }

            if (empty($_POST['prijs'])) {
                $data['errors']['prijs'] = 'Voor een prijs in';
            }

            if (empty($_POST['materiaal'])) {
                $data['errors']['materiaal'] = 'Voor een materiaal in';
            }

            if (empty($_POST['gewicht'])) {
                $data['errors']['gewicht'] = 'Voor een gewicht in';
            }

            if (empty($_POST['releasedatum'])) {
                $data['errors']['releasedatum'] = 'Voor een releasedatum in';
            }

            if (empty($data['errors'])) {
                $this->horlogeModel->updateHorloge($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; url=' . URLROOT . '/HorlogeController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('horloge/update', $data);
    }
}