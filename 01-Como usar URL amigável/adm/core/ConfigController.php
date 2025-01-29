<?php 

require './ConfigController.php';

class ConfigController extends Config
{
    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlMetodo;
    private string $urlParametro;

    public function __construct()
    {
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            $this->urlArray = explode("/", $this->url);

            if (isset($this->urlArray[0])) {
                $this->urlController = $this->urlArray[0];
            } else {
                $this->urlController = CONTROLLER;
            }

            if (isset($this->urlArray[1])) {
                $this->urlMetodo = $this->urlArray[0];
            } else {
                $this->urlMetodo = METODO;
            }

            if (isset($this->urlArray[2])) {
                $this->urlParametro = $this->urlArray[0];
            } else {
                $this->urlParametro = CONTROLLERERRO;
            }
        } else {
            $this->urlController = "login";
            $this->urlMetodo = METODO;
            $this->urlParametro = "";
        }
    }
}