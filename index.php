<?php 

class Fruit {
    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name=$name;
        $this->color=$color;
    }

    function get_name() {
        return $this->name;
        
    }

    function get_color() {
        return $this->color;
    }


}

$apple = new Fruit("Apple", "Red");
echo $apple->get_name();
echo '<br>';
echo $apple->get_color();


?>
<!---------
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br>
    <button type="submit" name="btn-entrar"> Entrar </button>
</form>
    
</body>
</html>
------->