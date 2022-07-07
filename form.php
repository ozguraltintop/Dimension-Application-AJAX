


<?php 

class form
{

  public $test;

    public function deneme($test)
    {
      $this->test=$test;
    }


    public function testyazdir()
    {
      echo $this->test;

    }
     public function fstart($id)
    {
      $this->id;


      echo "<form align='center' id=".$id." name=".$id." ><br>";
      
    }
      public function fclose()
    {
      echo "</form><br>";
      
    }
    public function input($id1,$type1,$class,$stil)
    {
      $this->id1;
      $this->type1;
      $this->class;
      $this->stil;

      if($type1=='text')
      {
         $type1=='text';      
      }
      else
        {return $type1;}

      echo "<input id=".$id1." name=".$id1." type=".$type1." class=".$class." style=".$stil."><br>";

    }
 
  public function bttn($id2,$val,$submit,$class,$stil)
  {

    $this -> id2 ;
    $this -> submit ;
    $this -> val;
    $this->class;
    $this->stil;

      echo "<button id=".$id2." name=".$id2." type=".$submit." class=".$class." style=".$stil.">".$val."</button><br>";

  }

   public function label($id,$text,$style)
  {

    $this -> id ;
    $this -> text ;
    $this -> style;


      echo "<label id=".$id." name=".$id." style=".$style.">".$text."</label><br>";

  }
}


?>