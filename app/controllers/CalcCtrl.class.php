<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {
  
	private $form;   
	private $result; 
	private $hide_intro; 


	public function __construct(){
		
		$this->form = new CalcForm();
		$this->calc_result = new CalcResult();
		$this->hide_intro = false;
	}
	

	public function getParams(){
		$this->form->amount = getFromRequest('amount');
		$this->form->years = getFromRequest('years');
		$this->form->percentages =getFromRequest('percentages');
	}
	
	
	public function validate() {
	
		if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->percentages ))) {
			return false; 
		} else { 
			$this->hide_intro = true; 
		}
		
		
		if ($this->form->amount == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->years == "") {
			getMessages()->addError('Nie podano liczby lat');
		}
		if ($this->form->percentages == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $amount i $years są liczbami całkowitymi
			if (! is_numeric ( $this->form->amount )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->years )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->percentages )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->amount = intval($this->form->amount);
			$this->form->years = intval($this->form->years);
			$this->form->percentages = intval($this->form->percentages);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			$this->calc_result->result = ($this->form->amount/($this->form->years*12)) + ($this->form->amount/($this->form->years*12) * ($this->form->percentages/100));
			
			getMessages()->addInfo('Wykonano obliczenia.');

			try{
				getDB() -> insert("outcome", [
					"amount" => $this->form->amount,
					"years" => $this->form->years,
					"percentages" => $this->form->percentages,
					"result" => $this->calc_result->result,
					"data" => date("Y-m-d H:i:s")
				]);
			} catch (\PDOException $ex){
				getMessages()->addError("DB Error: ".$ex->getMessage());
			}
				
			}
		
		$this->generateView();
	}

	public function action_calcShow(){
		getMessages()->addInfo('WELCOME!');
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		getSmarty()->assign('user',unserialize($_SESSION['user']));		
		getSmarty()->assign('hide_intro',$this->hide_intro);
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->calc_result);
		
		getSmarty()->display('calc_view.tpl');
	}
}
