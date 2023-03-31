<?php

class Voetballers extends BaseController
{

    private $voetballersModel;
    public function __construct()
    {
        $this->voetballersModel = $this->model('VoetballersModel');
    }

    public function index()
    {

        $result = $this->voetballersModel->getVoetballers();
        $rows = "";
        foreach ($result as $voetballer) {
            $rows .= "<tr>
                        <td>$voetballer->Id</td>
                        <td>$voetballer->Naam</td>
                        <td>$voetballer->Club</td>
                        <td>$voetballer->Leeftijd</td>
                        <td>$voetballer->Nationaliteit</td>
                        <td>$voetballer->Salaris</td>
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
