<html>
<header>
    <meta encoding="UTF-8">
    <title>Recaptcha</title>
    <link rel="stylesheet" href="./css/style.css">
    <script type="text/javascript" src="./vendor/jquery.min.js"></script>
</header>

<body>
    <?php 
        session_start();
        $json_data = file_get_contents("./data/data.json");
        $challanges = json_decode($json_data,true);
        $challange_id = rand(0,count($challanges)>0?count($challanges)-1:0);
        $_SESSION['ch_id'] = $challange_id;
        $challange = $challanges[$challange_id];
    ?>
    <form action="check.php" method="POST">
        <div class="captcha">
            <div class="captcha-header">
                <h3>Recaptcha images </h3>
                <span>Select <?php echo $challange["label"]?> images</span>
            </div>
            <div class="captcha-body">
                <div class="captcha-row">
                    <div class="captcha-suscpect" onclick="toggle(this,1)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'1.png' ?>">
                    </div>
                    <div class="captcha-suscpect" onclick="toggle(this,2)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'2.png' ?>">
                    </div>
                    <div class="captcha-suscpect" onclick="toggle(this,3)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'3.png' ?>">
                    </div>
                </div>
                <div class="captcha-row">
                    <div class="captcha-suscpect" onclick="toggle(this,4)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'4.png' ?>">
                    </div>
                    <div class="captcha-suscpect" onclick="toggle(this,5)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'5.png' ?>">
                    </div>
                    <div class="captcha-suscpect" onclick="toggle(this,6)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'6.png' ?>">
                    </div>
                </div>
                <div class="captcha-row" onclick="toggle(this,7)">
                    <div class="captcha-suscpect">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'7.png' ?>">
                    </div>
                    <div class="captcha-suscpect" onclick="toggle(this,8)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'8.png' ?>">
                    </div>
                    <div class="captcha-suscpect" onclick="toggle(this,9)">
                        <img src="<?php echo './data/'.$challange["src"].'/'.'9.png' ?>">
                    </div>
                </div>
            </div>
            <div class="action">
                <input type="hidden" name="1" value="">
                <input type="hidden" name="2" value="">
                <input type="hidden" name="3" value="">
                <input type="hidden" name="4" value="">
                <input type="hidden" name="5" value="">
                <input type="hidden" name="6" value="">
                <input type="hidden" name="7" value="">
                <input type="hidden" name="8" value="">
                <input type="hidden" name="9" value="">
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>

    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>