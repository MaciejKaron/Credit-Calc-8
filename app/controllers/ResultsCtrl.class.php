<?php

namespace app\controllers;

use app\forms\ResultForm;


class ResultsCtrl{
    private $form;
    private $records;

    public function __construct(){
        $this -> form = new ResultForm();
    }



    public function action_results(){
       getMessages()->addInfo('LISTA WYNIKÓW');

        try{
            $this -> records = getDB() -> select("outcome",[
                "id_outcome",
                "amount",
                "years",
                "percentages",
                "result",
                "data"
            ]);
        } catch (\PDOException $ex) {
            getMessages() -> addError("DB Error: ".$ex -> getMessage());
        }

       $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('records',$this->records);
        getSmarty()->display("results_view.tpl");
    }
    


}