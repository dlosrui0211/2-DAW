<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        DNI <input type="text" name="dni"> <br><br>
        Nombre <input type="text" name="nombre"> <br><br>
        Apellidos <input type="text" name="apellidos"> <br><br>
        Salario <input type="text" name="salario"> <br><br>

        Idiomas: <br>
        <input type="checkbox" name="idiomas[]" value="ingles">Inglés <br>
        <input type="checkbox" name="idiomas[]" value="frances">Francés <br>
        <input type="checkbox" name="idiomas[]" value="aleman">Alemán <br>
        <input type="checkbox" name="idiomas[]" value="chino">Chino <br>
        <input type="checkbox" name="idiomas[]" value="portugues">Portugués <br><br>


        <input type="submit" name="añadir" value="Añadir">
        <input type="submit" name="buscar" value="Buscar">
    </form>
    <?php
        if(isset($_POST['añadir'])){
            try{
                $conex= new mysqli('localhost','dwes','abc123.','empleados');
                $conex->set_charset('utf8mb4');
                $conex->autocommit(false);
                $stmt=$conex->prepare("INSERT INTO datos (DNI_DATOS, Nombre, apellidos, Salario) VALUES(?,?,?,?)");
                $stmt->bind_param('sssi',$_POST['dni'],$_POST['nombre'],$_POST['apellidos'],$_POST['salario']);
                $stmt->execute();
                $stmt->close();

                $stmt=$conex->prepare("INSERT INTO idiomas (DNI, Idioma) VALUES(?,?)");
                if (isset($_POST['idiomas'])){
                    foreach($_POST['idiomas'] as $key => $valor){
                        $idiomas=$valor;
                        $stmt->bind_param('ss', $_POST['dni'],$idiomas);
                        $stmt->execute();
                    }
                }
                $stmt2->close();
                $conex->commit();
                echo "Se han enviado correctamente";

            } catch (Exception $ex){
                die($ex->getMessage());
                $conex->rollback();
            }
        }

        if (isset($_POST['buscar'])){
            try{
                $conex= new mysqli('localhost','dwes','abc123.','empleados');
                $conex->set_charset('utf8mb4');
                $conex->autocommit(false);
                $stmt=$conex->prepare("SELECT * FROM idiomas join datos on DNI_DATOS = DNI WHERE DNI_DATOS = ? ");
                
                $stmt->bind_param('s',$_POST['dni']);
                $stmt->execute();
                $result=$stmt->get_result();
                while($fila=$result->fetch_object()){
                    echo "<br>";
                    echo "DNI: ".$fila->DNI_DATOS."<br>";
                    echo "Nombre: ".$fila->Nombre."<br>";
                    echo "Apellidos: ".$fila->apellidos."<br>";
                    echo "Salario: ".$fila->Salario."<br>";
                    echo "Idioma: ".$fila->Idioma."<br>";
                    echo "=================<br>";  
                }
                $stmt->close();
                $conex->commit();
            } catch(Exception $ex){
                die($ex->getMessage());
            }
        }

    ?>
</body>
</html>




