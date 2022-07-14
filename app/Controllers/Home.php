<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $testModel = NULL;
    protected $session = NULL;
	
    function __construct()
    {
        $this->testModel = new \App\Models\TestModel;
        $this->session = session();
    }
    public function index()
    {
        $data['documents'] = $this->testModel->findAll();
        return view('welcome_message',$data);
    }

    public function store()
    {
        $deviceModel = $_POST['deviceModel'];
        $firmversion = $_POST['firmversion'];
        $document = $this->request->getFile('firmname');
        $name = $document->getName();
        $originalName = $document->getRandomName().'_'.$name;
         $document->move('uploads/device_firmwares',$originalName);
       $db_path = 'uploads/device_firmwares/'.$originalName;
       $data = [
        'device_model' => $deviceModel,
        'firmware_version' => $firmversion,
        'firmware_path' => $db_path,
       ];
       $res = $this->testModel->insert($data);
       if($res) {
        $this->session->setFlashdata('success', 'Device Firmware Updated');
    }else {
        $this->session->setFlashdata('error', 'Oops! Something went wrong. Device Firmware not Updated.');
    }
       return redirect()->to($_SERVER['HTTP_REFERER']);
        
    }
}
