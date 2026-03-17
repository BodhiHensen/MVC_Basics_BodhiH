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
            'message' => ''
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['naam']) || empty($_POST['genre']) || empty($_POST['land']) ||
                empty($_POST['leeftijd']) || empty($_POST['vermogen'])) {

                $data['display'] = 'flex';
                $data['message'] = 'Vul alle velden in';
            } else {
                $this->zangeresModel->create($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'De gegevens zijn opgeslagen';
                header('Refresh: 3; URL=' . URLROOT . '/ZangeresController/index');
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
            'color' => 'success'
        ];

        $data['zangeres'] = $this->zangeresModel->getZangeresById($id);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['naam']) || empty($_POST['genre']) || empty($_POST['land']) ||
                empty($_POST['leeftijd']) || empty($_POST['vermogen'])) {

                $data['display'] = 'flex';
                $data['message'] = 'Vul alle velden in';
                $data['color'] = 'danger';
            } else {
                $this->zangeresModel->updateZangeres($_POST);
                $data['display'] = 'flex';
                $data['message'] = 'Het record is succesvol opgeslagen';
                $data['color'] = 'success';
                header('Refresh: 3; url=' . URLROOT . '/ZangeresController/index');
            }
        }

        $this->view('zangeres/update', $data);
    }
}
