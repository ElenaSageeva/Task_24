<?

interface InterfaceTransport{
    public function getName();
    public function getColor();
    public function getSpeed();
    public function getBucket()
    public function getGoing();
    public function moves();

}

class Traktor extends Transport implements InterfaceTransport
{
    public function __construct($name,$color,$speed,$bucket,$key)
    {
        $this->name = $name;
        $this->color = $color;
        $this->getSpeed = $speed;
        $this->getBucket = $bucket;
        $this->key = $key;
    }

    public function moves(){
        echo 'Двигать ковш';
    }


    
}

abstract class Transport
{   

    public function getName(){
        echo $this->name;
    }
    public function getColor(){
        echo $this->color;
    }
    public function getSpeed(){
        echo $this->speed;
    }
    public function getBucket(){
        echo $this->bucket
    }
    
    public function getGoing(){
        if($this->switch()){
            echo'Двигается!';
        }else{
            echo 'Не двигается';
        }
    }

    public function switch(){
        if($this->key){
            return true;
        }else{
            return false;
        }   
    }
