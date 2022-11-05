<?php
echo 'Какие языки вы знаете?';
echo '
       <form action="" method="GET">
           <label>HTML <input type="checkbox" name="html" value="html"></label><br>
           <label>CSS <input type="checkbox" name="css" value="css"></label><br>
           <label>PHP <input type="checkbox" name="php" value="php"></label><br>
           <label>JavaScript <input type="checkbox" name="js" value="js"></label><br><br>
           <input type="submit" value="Отправить" name="btnChooLang">
       </form>
   ';
   ?>
   <?php
    if(!empty($_GET['btnChooLang'])) {
        if(count($_REQUEST) == 1){
            echo 'Вы ничего не знаете.';
        }
        else {
            $arr = [
                'html' => 'HTML',
                'css' => 'CSS',
                'php' => 'PHP',
                'js' => 'JavaScript'
                ];
               
            $i = 1;
            foreach($_REQUEST as $lang) {
                if(array_key_exists($lang, $arr)){
                    echo $i . '. ' .$arr[$lang] . '<br>';
                    $i++;
                }
            }
        }
    }
	?>