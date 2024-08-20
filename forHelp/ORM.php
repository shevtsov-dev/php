<pre>
<?php

$connect = 'mysql:host=MySQL-8.2;dbname=offer';

$username = 'root';
$password = '';
global $age;
global $id;
global $pdo;
try {
    $pdo = new PDO($connect, $username, $password);

    $age = $_GET['age'] ?? '';
    $id = $_GET['id'];


    function select()
    {
        global $pdo;
        global $age;
        $sql = 'SELECT * FROM user WHERE age > :age';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'age' => $age
        ]);

        echo '<div style="display: block">';
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div>';
            echo '<span> name: ' . $row['name'] . '</span>';
            echo '<span> age: ' . $row['age'] . '</span>';
            echo '</div>';
        }
        echo '</div>';
    }
    select();

    function insert()
    {
        global $pdo;
        $sql = 'INSERT INTO `user` (`login`, `pass`, `name`, `date`, `phone`, `age`) VALUES (:login, :pass, :name, now(), :phone, :age)';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'login' => 'login' . rand(0, 1000),
            'pass' => 'pass' . rand(0, 1000),
            'name' => 'name' . rand(0, 1000),
            'phone' => 'phone' . rand(0, 1000),
            'age' => rand(22, 100),
        ]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print_r($row);
        }
    }
    //insert();

    function update()
    {
        global $pdo;
        global $id;
        $sql = 'UPDATE `user` SET `login` = :login, `pass` = :pass, `name` = :name, `date` = now(), `phone` = :phone, `age` = :age WHERE `user`.`id` = :id';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id' => $id,
            'login' => 'login' . rand(0, 1000),
            'pass' => 'pass' . rand(0, 1000),
            'name' => 'name' . rand(0, 1000),
            'phone' => 'phone' . rand(0, 1000),
            'age' => rand(22, 100),
        ]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print_r($row);
        }
    }
    //update();

    function delete()
    {
        global $pdo;
        global $id;
        $sql = 'DELETE FROM user WHERE `user`.`id` = :id';

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'id' => $id,
        ]);

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            print_r($row);
        }
    }
    //delete();

    //var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));

    //echo 'good';
} catch (Exception $exception) {
    echo 'error: ' . $exception->getMessage();
}

abstract class mysql {
    public PDO $pdo;
    public string $table;
    public string $sql = 'SELECT ';
    public string $stmt;

    public function __construct()
    {
        $this->connectDB();
    }

    public function connectDB()
    {
        $connect = 'mysql:host=MySQL-8.2;dbname=offer';
        $username = 'root';
        $password = '';
        $this->pdo = new PDO($connect, $username, $password);
    }

    public function select($column = '*')
    {
        $this->sql .= $column .' FROM ' . $this->table . ' ';

        return $this;
    }

    public function where($key, $value)
    {
        $this->sql .= 'WHERE ' . $key . '=' . $value;
        return $this;
    }

    public function execute()
    {
        $stmt = $this->pdo->prepare($this->sql);
        $stmt->execute([]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

class User extends mysql
{
    public string $table = 'user';
}

class Albom extends mysql
{
    public string $table = 'albom';
}

class AlbomImages extends mysql
{
    public string $table = 'albom_images';
}

var_dump( (new User())->select('id, name')->where('id', 3)->execute() );

var_dump( (new Albom())->select('id')->execute() );

var_dump( (new AlbomImages())->select('albom_id')->execute() );
?>
