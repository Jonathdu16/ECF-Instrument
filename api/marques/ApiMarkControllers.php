<?php
    namespace Api\Marques;

    class ApiMarkControllers
    {
        public function dataJson()
        {
            if(!isset($data)){
                header('Locaction:'.ROOT.'index.php');
            }else{
                $data = array(
                    'name' => $data->getName(),
                    'update' => $data->getUpdate()
                );
                
                $dataMark = json_encode($data);
                header('Content-Type: api/json');
                echo $dataMark;
            }
        }
    }
?>