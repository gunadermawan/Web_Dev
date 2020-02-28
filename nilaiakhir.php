
    <?php 
        $uas = $_POST['uas'];
        $uts = $_POST['uts'];
        $tgs = $_POST["tgs"];
        //menghitung nilai uas+uts+tgs (30%+30%+40%)
  
            $na = (0.3*$uas)+(0.3*$uts)+(0.4*$tgs);
            if($na >=  80){
                $indeks = 'A';
            }elseif ($na >=80 &&$na <85){
                $indeks = 'AB';
            }elseif ($na >= 70 && $na <80 ){
                $indeks = 'B';
            }elseif($na >=65 && $na<70){
                $indeks = 'BC';
            }elseif($na >=60 && $na<65){
                $indeks = 'C';
            }elseif ($na >=50 && $na<60){
                $indeks = 'D';
            }else{
                $indeks = 'E';
            }
        echo "nilai UTS anda : $uts";
        echo " <br> nilai UAS anda : $uas";
        echo "<br> nilai TGS anda : $tgs";
        echo "<br> nilai akhir anda : $na";    
        echo "<br> indeks nilai anda <b> $indeks </b>";
          
    ?>
