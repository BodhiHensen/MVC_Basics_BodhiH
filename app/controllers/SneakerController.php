<?php

class SneakerController extends BaseController
{
    private $sneakerModel;

    public function __construct()
    {
        $this->sneakerModel = $this->model('Sneaker');
    }

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

    public function delete($Id)
    {
        $result = $this->sneakerModel->delete($Id);
        header('Refresh:3; url=' . URLROOT . '/SneakerController/index');
        $this->index('flex', 'Sneaker is verwijderd');
    }

    public function create()
    {
        $data = [
            'title' => 'Nieuwe sneaker toevoegen',
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

            if (empty($data['errors'])) {
                $this->sneakerModel->create($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; URL=' . URLROOT . '/SneakerController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('sneaker/create', $data);
    }

    public function update($id = NULL)
    {
        $data = [
            'title' => 'Wijzig sneaker',
            'display' => 'none',
            'message' => '',
            'color' => 'success',
            'errors' => []
        ];

        $data['sneaker'] = $this->sneakerModel->getSneakerById($id);

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

            if (empty($data['errors'])) {
                $this->sneakerModel->updateSneaker($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; url=' . URLROOT . '/SneakerController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('sneaker/update', $data);
    }
}