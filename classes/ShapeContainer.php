<?php

class ShapeContainer
{ 
    protected int $w;
    protected int $h;
    
     public function __construct(int $w, int $h)
    {
        $this->x = $w;
        $this->y = $h;
    }
    
     public function getW(): int
    {
        return $this->w;
    }
    public function setW(int $w): void
    {
        $this->w = $w;
    }
    
    public function getH(): int
    {
        return $this->h;
    }
    public function setH(int $h): void
    {
        $this->h = $h;
    }
}