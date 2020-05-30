<?php
class Shape
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}

class RectangleDrawer extends Shape
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;
    }
    
    
 


    public function draw()
    {
        echo "Рисуем прямоугольник: параметры: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . "\n";
        echo "<div style='position:absolute;left:$this->x;top:$this->y;background:red;width:$this->width;height:$this->height; border:2px solid yellow;'></div>";
    }
}

class CircleDrawer extends Shape
{
    protected $radius;

    public function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;
    }
   
    public function draw()
    {
         $d = $this->radius * 2;
        echo "Рисуем окружность: параметры: " . $this->x . " " . $this->y . " " . $this->radius . "\n";
        echo "<div style='position:absolute;left:$this->x;top:$this->y;background:blue;border-radius:50%;width:$d;height:$d;'></div>";
    }
}
class RectangleDrawer1 extends Shape
{
    protected $width;
    protected $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;
    }
   
    public function draw()
    {
        echo "Рисуем прямоугольник с закругленными углами: параметры: " . $this->x . " " . $this->y . " " . $this->width . " " . $this->height . "\n";
        echo "<div style='position:absolute;left:$this->x;top:$this->y;background:red;width:$this->width;height:$this->height; border:2px solid yellow;border-radius:20%;'></div>";
    }
}
$rect2 = new RectangleDrawer(50, 60, 70, 80);
$rect3 = new RectangleDrawer(250, 60, 70, 80);
$rect4 = new RectangleDrawer1 (550, 70, 70, 80);
$circle3 = new CircleDrawer(150, 80, 30);
$circle4 = new CircleDrawer(370,50, 60);
$arr = [ $rect2, $rect3, $circle3, $circle4,$rect4];
foreach ($arr as $value) {
    echo $value->draw();
}