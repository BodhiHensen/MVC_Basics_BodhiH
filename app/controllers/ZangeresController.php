<?php

class ZangeresController extends BaseController
{
    private $zangeresModel;

    public function __construct()
    {
        $this->zangeresModel = $this->model('Zangeres');
    }

    public function index($display = 'none', $message = '')
    {
        $result = $this->zangeresModel->getAllZangeressen();

        $data = [
            'title' => 'Rijkste zangeressen',
            'display' => $display,
            'message' => $message,
            'result' => $result
        ];

        $this->view('zangeres/index', $data);
    }

    public function delete($Id)
    {
        $result = $this->zangeresModel->delete($Id);
        header('Refresh:3; url=' . URLROOT . '/ZangeresController/index');
        $this->index('flex', 'Het record is succesvol verwijderd');
    }

    public function create()
    {
        $data = [
            'title' => 'Nieuwe zangeres toevoegen',
            'display' => 'none',
            'message' => '',
            'errors' => []
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['naam'])) {
                $data['errors']['naam'] = 'Voor een naam in';
            }

            if (empty($_POST['genre'])) {
                $data['errors']['genre'] = 'Voor een genre in';
            }

            if (empty($_POST['land'])) {
                $data['errors']['land'] = 'Voor een land in';
            }

            if (empty($_POST['leeftijd'])) {
                $data['errors']['leeftijd'] = 'Voor een leeftijd in';
            }

            if (empty($_POST['vermogen'])) {
                $data['errors']['vermogen'] = 'Voor een vermogen in';
            }

            if (empty($data['errors'])) {
                $this->zangeresModel->create($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; URL=' . URLROOT . '/ZangeresController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('zangeres/create', $data);
    }

    public function update($id = NULL)
    {
        $data = [
            'title' => 'Wijzig zangeres',
            'display' => 'none',
            'message' => '',
            'color' => 'success',
            'errors' => []
        ];

        $data['zangeres'] = $this->zangeresModel->getZangeresById($id);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['naam'])) {
                $data['errors']['naam'] = 'Voor een naam in';
            }

            if (empty($_POST['genre'])) {
                $data['errors']['genre'] = 'Voor een genre in';
            }

            if (empty($_POST['land'])) {
                $data['errors']['land'] = 'Voor een land in';
            }

            if (empty($_POST['leeftijd'])) {
                $data['errors']['leeftijd'] = 'Voor een leeftijd in';
            }

            if (empty($_POST['vermogen'])) {
                $data['errors']['vermogen'] = 'Voor een vermogen in';
            }

            if (empty($data['errors'])) {
                $this->zangeresModel->updateZangeres($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; url=' . URLROOT . '/ZangeresController/index');
            } else {
                $data['display'] = 'flex';
                $data['message'] = 'Controleer de invoer en verbeter de gemarkeerde velden.';
                $data['color'] = 'danger';
            }
        }

        $this->view('zangeres/update', $data);
    }
}
