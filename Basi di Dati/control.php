<?php
    
        require_once('db.php');
        $indicatore=$_POST["indicatore"];
        if($indicatore == "insgioa")
        {
            //echo "inserimento giocatore serie a";
            $nome = $_POST["nomeg"];
            $cognome = $_POST["cognomeg"];
            $naz = $_POST["nazg"];
            $anno = $_POST["annog"];
            $mese = $_POST["meseg"];
            $giorno = $_POST["giornog"];
            $ruolo = $_POST["ruolo"];
            $data = $anno."-".$mese."-".$giorno;
            //echo "Nome: $nome, Cognome: $cognome, Nazionalita': $naz, Data: $data, Ruolo: $ruolo";


            $res=pg_query("INSERT INTO giocatore (nome,cognome,nazionalita,datanascita,ruolo) VALUES ('$nome','$cognome','$naz','$data','$ruolo');");

            
        }/*
        else if ($indicatore == "inspara")
        {
            //echo "inserimento partita serie a";
            $sta = $_POST["sta"];
            $categoria = $_POST["categoriap"];
            $squadrac = $_POST["squadrac"];
            $squadrat = $_POST["squadrat"];
            $anno = $_POST["annop"];
            $mese = $_POST["mesep"];
            $giorno = $_POST["giornop"];
            $ora = $_POST["orap"];
            $min = $_POST["minp"];
            $data = $anno."-".$mese."-".$giorno." ".$ora.":".$min.":00";;
            $giornatap = $_POST["giornatap"];
            $goalc = $_POST["goalc"];
            $goalt = $_POST["goalt"];
            //echo "Anno: $sta, Categoria: $categoria, SqaudraC': $squadrac, SqaudraT: $squadrat, Data: $data, Giornata: $giornata, GoalC: $goalc, GoalT: $goalt";
            

            $res=pg_query("INSERT INTO partita (anno, categoria, squadrac, squadrat, giornata, data, goalc, goalt) VALUES ('$sta','$categoria','$squadrac','$squadrat', $giornatap, '$data', $goalc, $goalt);");


        }*/
        else if ($indicatore == "insalla")
        {
            //echo "inserimento allenatore serie a";
            $nome = $_POST["nomea"];
            $cognome = $_POST["cognomea"];
            $naz = $_POST["naza"];
            $anno = $_POST["annoa"];
            $mese = $_POST["mesea"];
            $giorno = $_POST["giornoa"];
            $data = $anno."-".$mese."-".$giorno;
            //echo "Nome: $nome, Cognome: $cognome, Nazionalita': $naz, DataNascita: $data";

           $res=pg_query("INSERT INTO allenatore (nome,cognome,nazionalita,datanascita) VALUES ('$nome','$cognome','$naz','$data');");


        }
        else if ($indicatore == "modalla")
        {
            //echo "modifica allenatore serie a";
            $i = $_POST["indice"];
            $id = $_POST["all"];
            $squadra = $_POST["squadra"];
            $anno = $_POST["annomod".$i.""];
		$mese = $_POST["mesemod".$i.""];
$giorno=$_POST["giornomod".$i.""];  
$data=$anno."-".$mese."-".$giorno;          
            $datai = $_POST["datai"];
            $specf = $_POST["spec".$i.""];
            //echo "Indice: $i, Id: $id, Squadra: $squadra, Datai: $datai, Data: $data,$anno,$mese,$giorno Specf: $specf";

            $res=pg_query("UPDATE contrattoallenatore SET dataf='$data', specificaf='$specf' WHERE allenatore=$id AND squadra='$squadra' AND datai='$datai';");


        }
        else if($indicatore == "insgiob")
        {
            //echo "inserimento giocatore serie b";
            $nome = $_POST["nomegb"];
            $cognome = $_POST["cognomegb"];
            $naz = $_POST["nazgb"];
            $anno = $_POST["annogb"];
            $mese = $_POST["mesegb"];
            $giorno = $_POST["giornogb"];
            $ruolo = $_POST["ruolo"];
            $data = $anno."-".$mese."-".$giorno;
            $ruolo = $_POST["ruolob"];
           // echo "Nome: $nome, Cognome: $cognome, Nazionalita': $naz, DataNascita: $data, Ruolo: $ruolo";

           $res=pg_query("INSERT INTO giocatore (nome,cognome,nazionalita,datanascita,ruolo) VALUES ('$nome','$cognome','$naz','$data','$ruolo');");


        }/*
        else if ($indicatore == "insparb")
        {
            //echo "inserimento partita serie b";
            $sta = $_POST["sta"];
            $categoria = $_POST["categoriapb"];
            $squadrac = $_POST["squadracb"];
            $squadrat = $_POST["squadratb"];
            $data = $_POST["annopb"]."-".$_POST["mesepb"]."-".$_POST["giornopb"]." ".$_POST["orapb"].":".$_POST["minpb"].":00";
            $giornatap = $_POST["giornatapb"];
            $goalc = $_POST["goalcb"];
            $goalt = $_POST["goaltb"];
            ///echo "Anno: $anno, Categoria: $categoria, SqaudraC': $squadrac, SqaudraT: $squadrat, Data: $data, Giornata: $giornata, GoalC: $goalc, GoalT: $goalt";


            $res=pg_query("INSERT INTO partita (anno, categoria, squadrac, squadrat, giornata, data, goalc, goalt) VALUES ('$sta','$categoria','$squadrac','$squadrat', $giornatap, '$data', $goalc, $goalt);");


        }*/
        else if ($indicatore == "insallb")
        {
            //echo "inserimento allenatore serie b";
            $nome = $_POST["nomeab"];
            $cognome = $_POST["cognomeab"];
            $naz = $_POST["nazab"];
            $anno = $_POST["annoab"];
            $mese = $_POST["meseab"];
            $giorno = $_POST["giornoab"];
            $data = $anno."-".$mese."-".$giorno;
            echo "Nome: $nome, Cognome: $cognome, Nazionalita': $naz, DataNascita: $data";

            
           $res=pg_query("INSERT INTO allenatore (nome,cognome,nazionalita,datanascita) VALUES ('$nome','$cognome','$naz','$data');");


        }
        else if ($indicatore == "modallb")
        {
            ////echo "modifica allenatore serie b";
            $i = $_POST["indice"];
            $id = $_POST["all"];
            $squadra = $_POST["squadra"];
            $data = $_POST["annomodb".$i.""]."-".$_POST["mesemodb".$i.""]."-".$_POST["giornomodb".$i.""];            
            $datai = $_POST["datai"];
            $specf = $_POST["specb".$i.""];
            echo "Indice: $i, Id: $id, Squadra: $squadra, Datai: $datai, Data: $data, Specf: $specf";


           $res=pg_query("UPDATE contrattoallenatore SET dataf='$data', specificaf='$specf' WHERE allenatore=$id AND squadra='$squadra' AND datai='$datai';");


        }

        header("location: ./index.php");
    
    
    



?>
