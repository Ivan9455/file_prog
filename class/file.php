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

    public function file_location()
    {
        $this->file = scandir($this->file);
        for($this->i = 2; $this->file[$this->i];$this->i++)
        {
            $this->file_location[$this->i-2] =  $this->file[$this->i];
        }
        return $this->file_location;
    }
}

class open_file extends file
{

}

class edit_file extends file
{

}

class delet_file extends file
{

}

class new_file extends file
{

}

class test
{
    public function submit($x)
    {
        return  $x;
    }
}