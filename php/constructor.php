<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor in oops</title>
</head>
<body>
    <h1>constructor is here....!</h1>
    <?php
    class fruite{
        public $Name;
        public $Color;
        function __construct($name,$color)
        {
            $this->Name=$name;
            $this->Color=$color;
        }
        function getname(){
            return $this->Name;
        }
        function getcolor(){
            return $this->Color;
        }
    }
    $mango=new fruite("aam","yellow");
    echo $mango->getname();
    echo "<br>";
    echo $mango->getcolor();
    ?>
</body>
</html>