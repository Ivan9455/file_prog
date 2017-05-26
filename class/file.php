<?php

/**
 * Created by PhpStorm.
 * User: Иван
 * Date: 21.05.2017
 * Time: 10:35
 */
class file
{
    protected $file = "file/";
    protected $i;
    protected $file_location;
    protected $number_file;
    protected $name_file;

    public function file_location()
    {
        $this->file = scandir($this->file);
        for($this->i = 2; $this->file[$this->i];$this->i++)
        {
            $this->file_location[$this->i-2] =  $this->file[$this->i];
        }
        return $this->file_location;
    }

    public function table()
    {
        for($this->i = 0 ; isset($this->file_location[$this->i]) ; $this->i++)
        {
            echo "<tr><td>";
            echo $this->i;
            echo "</td><td>";
            echo $this->file_location[$this->i];
            echo "</td><td>";
            echo "<button type='submit' name='open' value= " . $this->file_location[$this->i] . "   >Открыть</button>";
            echo "</td><td>";
            echo "<button type='submit' name='edit' value= " . $this->file_location[$this->i] . "   >Редактировать</button>";
            echo "</td></tr>";
        }
    }
}

class open_file extends file
{
    private $file_o;
    public function open($file_name = null)
    {
        if($file_name!=null)
        {
            $this->file_o = fopen($this->file . $file_name , "r");
            echo "Имя файла<br>";
            echo "<input type='text' value=" . $file_name . " disabled='disabled'><br>";
            echo "Содержимое файла<br>";
            echo "<textarea  cols='30'rows='15' disabled='disabled'>";
            readfile($this->file . $file_name);
            echo "</textarea><br>";
            echo "<a href='index.php'>Назад</a>";
        }
    }
}

class edit_file extends file
{
    private $file_save;
    public function edit($file_name = null , $file_text=null)
    {
        if($file_name!=null)
        {

            echo "Имя файла<br>";
            echo "<form>";
            echo "<input type='text' name='file_name' value=" . $file_name . "><br>";
            echo "Текст файла<br>";
            echo "<textarea name='file_text' cols='30' rows='15'>";
            echo readfile($this->file . $file_name);
            echo "</textarea><br>";
            echo "<input type='submit' value='Сохранить'>";
            echo "</form>";
            echo "<a href='index.php'>Назад</a>";
        }
    }
    public function edit_save($file_name=null,$file_text=null)
    {
        if($file_text!=null)
        {
            $this->file_save = fopen($this->file . $file_name , "w+");
            flock($this->file_save,LOCK_EX);
            fwrite($this->file_save,$file_text);
            flock($this->file_save,LOCK_UN);
            fclose($this->file_save);
        }
    }
}

class delet_file extends file
{

}
