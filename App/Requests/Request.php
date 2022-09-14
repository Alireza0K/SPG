<?php 

namespace App\Requests;

class Request
{
    private $data;
    private $uri;
    private $ip;
    private $clientCommand;

    private function selectQuery()
    {
        $getDataFromUri = $_GET;
        
        return $getDataFromUri;
    }

    private function dataFromPost()
    {
        $dataFromPost = $_POST;

        return $dataFromPost;
    }

    public function setPackageToData($package)
    {
        $this->data = $package;
    }

    function seprateData()
    {
        $this->uri = $_SERVER["REDIRECT_URL"] ?? null;
        
        $this->ip = $_SERVER["REMOTE_ADDR"];
        
        $this->clientCommand = $this->selectQuery();
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function getUri()
    {
        return $this->uri;
    }
    
    public function getClientCommand()
    {
        return $this->clientCommand;
    }

    public function getAllData()
    {
        return $this->data;
    }

    public function getPostData()
    {
        return $this->dataFromPost();
    }
}