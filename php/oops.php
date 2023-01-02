<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oops concepts</title>
</head>
<body>
    <h1>oops concept is here.....!</h1>
    <?php
    class fruite{
        public $Name;
        public $Color;
        function set_name($name){
            $this->Name=$name;
        }
        function get_name(){
            return $this->Name;
        }
    }
    $apple=new fruite();
    $banana=new fruite();
    $apple->set_name("Apple");
    $banana->set_name("Banana");
    echo $apple->get_name();
    echo $banana->get_name();
    ?>
</body>
</html>