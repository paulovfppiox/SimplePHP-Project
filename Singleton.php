<?php

class Singleton												{
    
	//--- Guarda uma instância da classe ----
    private static $instance;
	
	private $title;
	private $head;	
	private $page;
	private $rodape;
	
	// Vetores para estilos e javascripts
	private $estilos; 
	private $javascripts; 
		   
    // Construtor 
    private function __construct() 		 			{
        echo 'Debug: Singleton created...';
    }

    // O método Singleton 
    public static function singleton()			 	{
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }
        return self::$instance;
    }	  
	
	public function setJSArray($v)				{
		$this->javascripts = $v;
	}
	
	public function setStylesArray($v)				{
		$this->estilos = $v;
	}
		
	public function setStyle($id)				 	{
		echo "CSS atual = " . $this->estilos[$id];
		echo '<link rel="stylesheet" type="text/css" href="'.$this->estilos[$id].'">';
	}
	
	public function setJavascript($id)				 {
		echo "JS atual = " . $this->javascripts[$id];	
		echo '<script type="text/javascript" src="'.$this->javascripts[$id].'"></script>';
	}
		
	// Método head() que gera a tag head	
	public function head()					 {	
		echo  '<html xmlns="http://www.w3.org/1999/xhtml">
			   <head>
					<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
					<title>'.$this->title.'</title>
			   </head>';
	}		
	
	// ----- Setters -------
	public function setTitle( $titleDefault = "Corollarium RV" )	{
		$this->title = $titleDefault;		
	}
	public function setPage($v)				{				
		$this->page = $v;			
	}
	public function setRodape($v)			{	
		$this->rodape = $v;
	}	
		
	// ------- Getters -------	
	public function getPage()				{				
		return $this->page;			
	}
	public function getRodape()				{				
		return $this->rodape;			
	}	
	public function getTitle()				{				
		return $this->title;			
	}
	
    public function render()				{
		self::head();
		echo self::getPage();
		echo self::getRodape();
	}
			
    // Previne que o usuário clone a instância
    public function __clone()				 {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }	
	
}

?>