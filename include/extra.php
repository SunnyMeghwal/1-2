    <?php
    class DemoClass{
        public $abcd = 10; 

        public function demo()
            {
                echo $this->abcd .'<br>';
            }

        public function demo1()
            {
                echo $this->abcd/2;
            }

    }

$abc = new DemoClass;
$abc -> demo();
$abc -> demo1();

?>