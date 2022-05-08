<?php
    session_start();
    $json_data = file_get_contents("./data/data.json");
    $challanges = json_decode($json_data,true);
    $challange_id = $_SESSION['ch_id'];
    $challange = $challanges[$challange_id];
    $check = false;
    for($i = 0; $i < count($challange['valids']);$i++){
        $check= $_POST[''.$challange['valids'][$i]] == 1;
    }

    if($check){?>
<h1>Captcha is valide</h1>

<?php }else {?>

<h1>Cpatcha is invalide</h1>
<?php
    }
    ?>