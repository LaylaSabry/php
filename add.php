<?php
    $errors = [];
    $data=[];
    $con =[];
    $gender;
    $skills =[];
    if(empty($_POST['First'])){
        $errors['First'] = 'First name is required';
    }
    else{
        $data['First'] = $_POST['First'];
    }
    if(empty($_POST['last'])){
        $errors['last'] = 'last name is required';
    }else{
        $data['last'] = $_POST['last'];
    }

    if(empty($_POST['pass'])){
        $errors['pass'] = 'password is required';
    }else{
        $data['pass'] = $_POST['pass'];
    }

    if(empty($_POST['passcon'])){
        $errors['passcon'] = 'password confermation is required';
    }else{
        $data['passcon'] = $_POST['passcon'];
    }
    if(empty($_POST['email'])){
        $errors['email'] = 'mail  is required';
    }else{
        $data['email'] = $_POST['email'];
    }

    if(empty($_POST['robot'])){
        $errors['robot'] = 'please confirm this lable';
    }else if($_POST['robot'] !="chanGe"){
        $errors['robot'] = 'confirm again';
    }


    if($_POST['g'] == "Female"){
        $gender = 'Mrs';
    }else
    {
        $gender = 'Mr ';

    }
    for($i=0 ; i<3 ; $i++)
    {
        if(isset($_POST['option1'])){
            $skills['option1'] = $_POST['option1'];
        }
        if(isset($_POST['option2'])){
            $skills['option2'] = $_POST['option2'];
        }if(isset($_POST['option3'])){
            $skills['option3'] = $_POST['option3'];
        }
    }



    if($_POST['passcon'] == $_POST['pass']){
         $con['passcon'] = ' confermed   ';
    }else
    {
        $con['passcon'] = 'please conferm your password ';

    }

    if($errors){
        // redirect to form and display errors
        header("Location: create_article.php?errors=". json_encode($errors)."&data=".json_encode($data)."&confermation=".json_encode($con));
        exit();
    }

    file_put_contents('db.txt', $_POST['First'].'|'.$_POST['last'].'|'.$_POST['email'].PHP_EOL, FILE_APPEND);
    header('Location: list.php');
    
?>

