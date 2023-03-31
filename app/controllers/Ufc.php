<?php

class Ufc extends BaseController
{

    private $UfcModel;
    public function __construct()
    {
        $this->UfcModel = $this->model('ufcModel');
    }

    public function index()
    {

        $result = $this->UfcModel->getUfc();
        $rows = "";
        foreach ($result as $ufc) {
            $rows .= "<tr>
                        <td>$ufc->Id</td>
                        <td>$ufc->Naam</td>
                        <td>$ufc->Club</td>
                        <td>$ufc->Leeftijd</td>
                        <td>$ufc->Nationaliteit</td>
                        <td>$ufc->Salaris</td>
                      </tr>";
        }
        // var_dump($result);
        $data = [
            'title' => 'Welkom op de Landenpagina',
            'rows' => $rows
        ];

        $this->view('voetballers/index', $data);
    }
}
