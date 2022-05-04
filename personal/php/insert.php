<?php
                require_once "config.php";

                $email = $_POST["email"];
                $message = $_POST["message"];

                try{
                    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sql = "INSERT INTO contact(email, message) VALUES('".$email."', '".$message."')";
                    $statement = $pdo->prepare($sql);
                    $statement->execute();

                    echo "Thank you for your message!";
                }
                catch(PDOException $e){
                    die($e->getMessage());
                }
                finally{

                }
            ?>