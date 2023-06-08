<?php
    namespace Classes\Models;

    use Classes\Models\BrandManager;

    class BrandController
    {
        protected string $module;
        protected BrandManager $BrandManager;

        public function __construct()
        {
            $model = get_called_class();
            $model = explode('\\', $model);
            $model = end($model);
            $model = str_replace('Controller', '', $model);
            $this->module = strtolower($model);
            $managerName = 'Classes\\Models\\' . ucfirst($this->module) . 'Manager';
            $this->BrandManager = new $managerName();
        }

        public function index()
        {
            $data  = $this->BrandManager->findAll();
            $title = 'Voici la liste des marques';
            $compact['title'] = $title;
            $compact['data'] = $data;
            $this->render($compact, $this->module);
            var_dump($this->module);
        }

        public function render($compact, string $view = null)
        {
            $title = $compact['title'];
            $data = $compact['data'];
            if(is_null($view)){
                require_once ROOT . '/view/index.php';
            }else{
                require_once ROOT . '/view/' . $view.'.add.php';
            }
        }
    }