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
                        <td>$ufc->Name</td>
                        <td>$ufc->Ranking</td>
                        <td>$ufc->Length</td>
                        <td>$ufc->Weight</td>
                        <td>$ufc->Age</td>
                        <td>$ufc->WinsByKnockout</td>
                      </tr>";
        }
        // var_dump($result);
        $data = [
            'title' => "MEN'S POUND-FOR-POUND TOP RANK UFC",
            'rows' => $rows
        ];

        $this->view('ufc/index', $data);
    }
}
