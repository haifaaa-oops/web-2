<?php

class Animal 
{
    public $animals;

    public function __construct($ar_animal)
    {
        $this->animals = $ar_animal;
    }
    public function index()
    {
        foreach ($this->animals as $animal) {
            echo "-$animal <br/>";
    }
    }
    public function store($animal){
        $this->animals[] = $animal;
    }    
    public function update($index, $animal)
    {
        $this->animals[$index] = $animal;
    }

    public function destory($index)
    {
        unset($this->animals[$index]);
    }
}

#membuat object
#kirimkan data array ke dalam construction
$animal = new Animal(["Ayam", "Ikan"]);

echo "Index - Menampilkan seluruh hewan <br/>";
$animal->index();
echo "<br/>";

echo "Store - Menambahkan hewan baru (burung) <br/>";
$animal->store("Burung");
$animal->index();
echo "<br/>";

echo "Update - Mengupdate hewan baru (burung) <br/>";
$animal->update(0, "Kucing Anggora");
$animal->index();
echo "<br/>";

echo "Destory - Menghapus hewan <br/>";
$animal->destory(1);
$animal->index();
echo "<br/>";

