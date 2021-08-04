<?php

    if(isset($_POST['name']) && isset($_POST['author']))
    {
        $_name = $_POST['name'];
        $_author = $_POST['author'];

        include 'model.php';
        $model = new Model();

        if($model->insert($_name,$_author))
        {
            $data = array('result' => 'success');

        }else{
            $data = array('result' => 'error');

        }

        echo json_encode($data);
    }