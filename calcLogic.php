<?php
class Calc{
   public $operator;
   public $num1;
   public $num2;

   public function __construct(string $operator,int $n1,int $n2){
    $this->operator=$operator;
    $this->num1=$n1;
    $this->num2=$n2;
   }

   public function calculate(){
    switch($this->operator){
        case "add":
            $result=$this->num1+$this->num2;
            echo $result;
             break;
            case "mul":
                $result=$this->num1*$this->num2;
                echo $result;
                 break;
                case "sub":
                    $result=$this->num1-$this->num2;
                    echo $result;
                      break;
                    case "div":
                        $result=$this->num1/$this->num2;
                        echo $result;
                        break;
                         default:
                         echo "Couldnt calculate";
                         break;

                    }
   
}
}
?>