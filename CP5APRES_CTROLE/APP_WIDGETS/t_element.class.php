<?php
/**
 * Execício do livro PHP_POO
 * Aluno: Guglielmo Targino
 * Data: 22nov24
 * Versão: v1
 * pg 314
 */


 class TElement{

    private $name;
    private $properties;
    private $children;

    public function __construct($nam)
    {
        $this->name=$nam;        
    }

    public function __set($l, $d)
    {
        $this->properties[$l]=$d;
    }

    public function add($child)
    {
        $this->children[]=$child;
    }

    private function open()
    {
        echo "<{$this->name}";
        if($this->properties){
            foreach($this->properties as $name=>$values)
            {
                echo "{$name}=\"{$values}\"";
            }
        }
        echo '>';
    }

    public function show()
    {
        $this->open();
        echo "\n";
        //caso seja objeto
        if($this->children)
        {
            foreach ($this->children as $child)
            {
                if (is_object($child))
                {
                    $child->show();
                    # code...
                }
                else if ((is_string($child)) or (is_numeric($child)))
                {
                    //caso seja texto
                echo $child;
                # code...
                }
                
            }
            //fecha teg
        $this->close();
        }
        


    }

    private function close()
    {
        echo "</{$this->name}";

    }

}

?>