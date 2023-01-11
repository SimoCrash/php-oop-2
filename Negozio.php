<?php

class Negozio
{
    private int $id;
    private string $name;
    private string $category;
    private string $description;
    private int $availableStartMonth;
	private int $availableEndMonth;
	private int $availableQty;
	private int $price;

    public function __construct($id, $name, $category, $description, $availableStartMonth, $availableEndMonth, $availableQty, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->availableStartMonth = $availableStartMonth;
        $this->availableEndMonth = $availableEndMonth;
        $this->availableQty = $availableQty;
        $this->price = $price;
    }
}



?>





<!-- {
    public $cibo;
    public $giochi;
    public $cucce;
    public $animali;

    public function __construct($cibo, $giochi, $cucce, $animali)
    {
        $this->cibo = $cibo;
        $this->giochi = $giochi;
        $this->cucce = $cucce;
        $this->animali = $animali;
    }
} -->