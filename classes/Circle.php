<?php

class Circle extends Form {
    protected int $rayonX;
    protected int $rayonY;
    
    public function __construct(int $x, int $y, int $rayonX, int $rayonY, string $color, float $opacity)
    {
        parent::__construct($x, $y, $color, $opacity);
        $this->rayonX = $rayonX;
        $this->rayonY = $rayonY;
    }
      
    public function getRayonX(): int
    {
        return $this->rayonX;
    }
    public function setRayonX(int $rayonX): void
    {
        $this->rayonX = $rayonX;
    }
    public function getRayonY(): int
    {
        return $this->rayonY;
    }
    public function setRayonY(int $rayonY): void
    {
        $this->rayonY = $rayonY;
    }
    
        public function draw(): string
    {
        return sprintf('<ellipse cx="%s" cy="%s" rx="%s" ry="%s" fill="%s" opacity="%f"></ellipse>',
            $this->x,
            $this->y,
            $this->rayonX,
            $this->rayonY,
            $this->color,
            $this->opacity
        );
        
        // Version alternative sans concaténation (attention il faut utiliser les "" pour délimiter la chaîne)
        // return "<rect x='{$this->x}' ...";
    }
    
}