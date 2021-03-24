<?php

class Form
{
    protected int $x;
    protected int $y;
    protected string $color;
    protected float $opacity;
    
    public function __construct(int $x, int $y, string $color, float $opacity)
    {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
        $this->opacity = $opacity;
    }
    
    public function getX(): int
    {
        return $this->x;
    }
    public function setX(int $x): void
    {
        $this->x = $x;
    }
    
    public function getY(): int
    {
        return $this->y;
    }
    public function setY(int $y): void
    {
        $this->y = $y;
    }
    
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }
    
    public function getOpacity(): float
    {
        return $this->opacity;
    }
    public function setOpacity(float $opacity): void
    {
        $this->opacity = $opacity;
    }
}