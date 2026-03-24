<?php

class SmartphoneController extends BaseController
{
    private $smartphoneModel;

    public function __construct()
    {
        $this->smartphoneModel = $this->model('Smartphone');
    }

    public function index($display = 'none', $message = '')
    {
        $result = $this->smartphoneModel->getAllSmartphones();

        $data = [
            'title' => 'Overzicht Smartphones',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        $this->view('smartphone/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->smartphoneModel->delete($Id);
        header('Refresh:3; url=' . URLROOT . '/SmartphoneController/index');
        $this->index('flex', 'Record is verwijderd');
    }

    public function create()
    {
        $data = [
            'title' => 'Nieuwe smartphone toevoegen',
            'display' => 'none',
            'message' => '',
            'errors' => []
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validatie
            if (empty($_POST['merk'])) {
                $data['errors']['merk'] = 'Voor een merk in';
            } elseif (strlen($_POST['merk']) > 20) {
                $data['errors']['merk'] = 'Merk mag maximaal 20 tekens bevatten';
            }

            if (empty($_POST['model'])) {
                $data['errors']['model'] = 'Voor een model in';
            }

            if (empty($_POST['prijs'])) {
                $data['errors']['prijs'] = 'Voor een prijs in';
            }

            if (empty($_POST['geheugen'])) {
                $data['errors']['geheugen'] = 'Voor een geheugen in';
            }

            if (empty($_POST['besturingssysteem'])) {
                $data['errors']['besturingssysteem'] = 'Voor een besturingssysteem in';
            }

            if (empty($_POST['schermgrootte'])) {
                $data['errors']['schermgrootte'] = 'Voor een schermgrootte in';
            }

            if (empty($_POST['releasedatum'])) {
                $data['errors']['releasedatum'] = 'Voor een releasedatum in';
            }

            if (empty($_POST['megapixels'])) {
                $data['errors']['megapixels'] = 'Voor een megapixels in';
            }

            if (empty($data['errors'])) {
                $this->smartphoneModel->create($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; URL=' . URLROOT . '/SmartphoneController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('smartphone/create', $data);
    }

    public function update($id = NULL)
    {
        $data = [
            'title' => 'Wijzig smartphone',
            'display' => 'none',
            'message' => '',
            'color' => 'success',
            'errors' => []
        ];

        // Haal bestaande data op
        $data['smartphone'] = $this->smartphoneModel->getSmartphoneById($id);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Validatie
            if (empty($_POST['merk'])) {
                $data['errors']['merk'] = 'Voor een merk in';
            } elseif (strlen($_POST['merk']) > 20) {
                $data['errors']['merk'] = 'Merk mag maximaal 20 tekens bevatten';
            }

            if (empty($_POST['model'])) {
                $data['errors']['model'] = 'Voor een model in';
            }

            if (empty($_POST['prijs'])) {
                $data['errors']['prijs'] = 'Voor een prijs in';
            }

            if (empty($_POST['geheugen'])) {
                $data['errors']['geheugen'] = 'Voor een geheugen in';
            }

            if (empty($_POST['besturingssysteem'])) {
                $data['errors']['besturingssysteem'] = 'Voor een besturingssysteem in';
            }

            if (empty($_POST['schermgrootte'])) {
                $data['errors']['schermgrootte'] = 'Voor een schermgrootte in';
            }

            if (empty($_POST['releasedatum'])) {
                $data['errors']['releasedatum'] = 'Voor een releasedatum in';
            }

            if (empty($_POST['megapixels'])) {
                $data['errors']['megapixels'] = 'Voor een megapixels in';
            }

            if (empty($data['errors'])) {
                $this->smartphoneModel->updateSmartphone($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; url=' . URLROOT . '/SmartphoneController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('smartphone/update', $data);
    }
}
