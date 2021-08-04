<?php 
class reviews_data {
    public $name = '';
    public $review = '';

    public function __construct($name,$rvw)
    {
        $this->name = $name;
        $this->review = $rvw;
    }
}

$namerc = $_POST["name"];
$rvwrc = $_POST["review"];

$data = new reviews_data($namerc,$rvwrc);
$fileappending = "/".json_encode($data);

$file = fopen("reviews.json","a");
fwrite($file,$fileappending);
fclose($file);


echo  json_encode(true);
