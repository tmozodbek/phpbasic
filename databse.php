<?php 
    session_start();
    include "dbconnect.php";

    #Jadval yaratish
    $sql = "CREATE TABLE IF NOT EXISTS talaba(
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR (30) NOT NULL,
        lastname VARCHAR (30) NOT NULL,
        email VARCHAR (50),
        registered_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        UNIQUE(email)
    )";

    try{
        $conn -> exec($sql);
        echo "Jadval hosil qilindi!<br>";
    }catch(PDOException $e){
        echo "Jadval hosil qilishda xatolik: ".$e->getMessage();
    }

    /*
    #Jadvalga ma'lumot qo'shish
    $insert = "INSERT INTO talaba (firstname, lastname, email) VALUES(?,?,?);";
    $stmt = $conn->prepare($insert);

    try{
        $stmt->execute(["Ozodbek", "Rajabboyev", "ozodbek2625@gmail.com"]);
        echo "Muvafaqiyatli qo'shildi<br>";
    }catch(PDOException $e){
        print_r($e->getMessage());
    }
    */
    #SELECT PHP + MYSQL

    $sth = $conn->prepare("SELECT firstname, lastname, email FROM talaba");
    $sth -> execute();
    $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
    echo "<pre>";
    
    echo "<table border='1'>";
    foreach($result as $item){
        echo "<tr>";

        echo "<td>";
        echo $item["firstname"];
        echo "</td>";

        echo "<td>";
        echo $item["lastname"];
        echo "</td>";

        echo "<td>";
        echo $item["email"];
        echo "</td>";

        echo "</tr>";



    };

    echo "</table>";

    #UPDATE PHP MYSQL
    

    $sql_update = "UPDATE talaba SET firstname=:firstname WHERE id=:id";
    $prepare = $conn->prepare($sql_update);
    $prepare->bindParam(":firstname", $firstname);
    $prepare->bindParam(":id", $id);

    $firstname = "Botir";
    $id = 8;


    $prepare->execute();

    # DELETE PHP MYSQL
    $sql_delete = "DELETE FROM talaba WHERE id=:id";
    $p = $conn->prepare($sql_delete);
    $data = ['id'=> 8];
    $p->execute($data);

    $_SESSION["logged_in_user_id"] = 1;
    $_SESSION["logged_in_user_name"] = "Ozodbek";

    echo $_SESSION["logged_in_user_name"]."<br>";
    echo $_SESSION["logged_in_user_id"];

    # JSON_ENCODE

    $mevalar = array("Olma","Anor","Nok","Shaftoli","Behi","Anjir");
    print_r($mevalar);
    print_r(json_encode($mevalar));
    
?>