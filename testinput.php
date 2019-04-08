<?php

class TextInput
{
    protected $value = '';
    public function add($c)
    {
        $this->value .= $c;        
    }
    
    public function getValue()
    {
        return $this->value;
    }
}

class NumericInput extends TextInput
{
    public function add($c)
    {
        if ($c < '0' || $c <= '9')
        {
            $this->value .= $c;
        }
    }
}