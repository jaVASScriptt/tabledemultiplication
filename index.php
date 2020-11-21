<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>TP4 programmation Web</title>
    <link rel="shortcut icon" type="image/x-icon" href="iconeweb.ico" />
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body class="background<?php if (isset($_GET['theme'])){ echo $_GET['theme'];}?>">

<header>
    <h1>Table de multiplication et d'addition pour le primaire</h1>
</header>

<nav class="important<?php if (isset($_GET['theme'])){ echo $_GET['theme'];}?>">
    <?php
    for ($i = 1 ; $i < 10 ; $i++){?>
    <a href="index.php?chiffre=<?php echo $i; if(isset($_GET['signe'])){ echo "&signe=".$_GET['signe'];}?>&theme=<?php echo $i;?>" class="rad1 lien<?php if (isset($_GET['theme'])){ echo $_GET['theme'];}?>"><div><strong><?php echo $i; ?></strong></div></a>
    <?php } ?>
</nav>

<br>
<p>la table de multiplication selectionnée</p>
<div class="flex">
    <a href="index.php?signe=plus<?php if(isset($_GET['chiffre'])){ echo  "&chiffre=".$_GET['chiffre'];} if(isset($_GET['theme'])){ echo  "&theme=".$_GET['theme'];}?>" id="plus"><strong><img class="retouchimg" src="plus.png"></strong></a>
        <section class="flexed bordure<?php if (isset($_GET['theme'])){ echo $_GET['theme'];}?>"><h2><strong>la table de <?php if (isset($_GET['chiffre'])){echo $_GET['chiffre'];}else{echo "...";}?></strong></h2>
            <?php for ($i = 1; $i <= 9 ; $i++){
                if (isset($_GET['signe']) && isset($_GET['chiffre'])) {
                    if($_GET['signe'] == "fois"){
                        $result = (int)$_GET['chiffre'] * $i;
                        $signe = "x";
                        echo "<article>" . $i . " " . $signe . " " . $_GET['chiffre'] . " = " . $result . "</article>";
                    }
                    else if ($_GET['signe'] == "plus"){
                        $result = (int)$_GET['chiffre'] + $i;
                        $signe = "+";
                        echo "<article>" . $i . " " . $signe . " " . $_GET['chiffre'] . " = " . $result . "</article>";
                    }

                }
             }?>
       </section>
    <a href="index.php?signe=fois<?php if(isset($_GET['chiffre'])){ echo  "&chiffre=".$_GET['chiffre'];}if(isset($_GET['theme'])){ echo  "&theme=".$_GET['theme'];}?>" id="fois"><strong><img class="retouchimg" src="fois.png"></strong></a>
  </div>
    <footer class="important<?php if (isset($_GET['theme'])){ echo $_GET['theme'];}?>"><p class="auteur<?php if (isset($_GET['theme'])){ echo $_GET['theme'];}?>">site réalisé par Vassily Delmas</p></footer>
</body>
</html>
