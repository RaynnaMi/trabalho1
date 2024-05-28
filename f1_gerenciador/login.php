
    <?php
    if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){
        session_start();
        require 'config.php';
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sql = "SELECT * FROM funcionarios WHERE email = :email AND senha = :senha";
        $resultado = $conn->prepare($sql);
        $resultado->bindParam("email",$email);
        $resultado->bindParam("senha",$senha);
        $resultado-> execute();
    
        if($resultado->rowCount() > 0){
            $dado = $resultado->fetch();
            $_SESSION['email'] = $dado['email'];
            $_SESSION['senha'] = $dado['senha'];
            header("Location:dashboard.php");
            exit();
        }else{
            header("Location:index.php");
            echo("<script>window.alert(email e/ou senha incorretos)</script>");
        exit();
        }
    }else{
        header("Location:index.php");
        echo("<script>window.alert(email e/ou senha incorretos)</script>");
        exit();
    }