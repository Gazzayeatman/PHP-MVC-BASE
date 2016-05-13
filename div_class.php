<?php 
class Div{
	public $id;
	public $divClass;
	public $content;
	public $myWebsite;
	
	public function __construct($id,$class,$content,$website){
		$this->id = $id;
		$this->divClass = $class;
		$this->content = $content;
		$this->mywebsite = $website;
		$website->addDiv($id,$this);
	}
	public function returnDiv(){
		return "<div class=".$this->divClass.">".$this->content."</div>";
	}
}
?>