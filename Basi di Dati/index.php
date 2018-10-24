<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Martini - Nigro</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container" style="width: 1280px;">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h1 class="text-center">Martini Davide - Nigro Simone</h1>
<p class="text-center">Basi di Dati A.A. 2016-2017</p>

    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="thumbnail"> 
	<center><legend class="tit">SERIE A</legend></center>

	<script type="text/javascript">
		function vis() {
			document.getElementById("V").style.display="block";
			document.getElementById("I").style.display="none";
			document.getElementById("M").style.display="none";
			document.getElementById("tmarv").style.display="none";
			document.getElementById("tcamv").style.display="none";
			document.getElementById("tsquv").style.display="none";
			document.getElementById("talli").style.display="none";
			document.getElementById("tgioi").style.display="none";	
			document.getElementById("tpari").style.display="none";
			document.getElementById("tallm").style.display="none";
			document.getElementById("allmm").checked=false;
			//document.getElementById("parii").checked=false;
			document.getElementById("allii").checked=false;
			document.getElementById("gioii").checked=false;
		}
		function mod() {
			document.getElementById("M").style.display="block";
			document.getElementById("I").style.display="none";
			document.getElementById("V").style.display="none";
			document.getElementById("tmarv").style.display="none";
			document.getElementById("tcamv").style.display="none";
			document.getElementById("tsquv").style.display="none";	
			document.getElementById("talli").style.display="none";
			document.getElementById("tgioi").style.display="none";
			document.getElementById("tpari").style.display="none";
			document.getElementById("tallm").style.display="none";
			//document.getElementById("parii").checked=false;
			document.getElementById("allii").checked=false;
			document.getElementById("gioii").checked=false;
			document.getElementById("marvv").checked=false;
			document.getElementById("camvv").checked=false;
			document.getElementById("squvv").checked=false;
		}
		function ins() {
			document.getElementById("I").style.display="block";
			document.getElementById("V").style.display="none";
			document.getElementById("M").style.display="none";
			document.getElementById("tmarv").style.display="none";
			document.getElementById("tcamv").style.display="none";
			document.getElementById("tsquv").style.display="none";	
			document.getElementById("talli").style.display="none";
			document.getElementById("tgioi").style.display="none";
			//document.getElementById("tpari").style.display="none";
			document.getElementById("tallm").style.display="none";
			document.getElementById("allmm").checked=false;
			document.getElementById("marvv").checked=false;
			document.getElementById("camvv").checked=false;
			document.getElementById("squvv").checked=false;
		}

		function marv() {
			document.getElementById("tmarv").style.display="block";
			document.getElementById("tcamv").style.display="none";
			document.getElementById("tsquv").style.display="none";	
		}
		function camv() {
			document.getElementById("tcamv").style.display="block";
			document.getElementById("tsquv").style.display="none";
			document.getElementById("tmarv").style.display="none";	
		}
		function squv() {
			document.getElementById("tsquv").style.display="block";
			document.getElementById("tmarv").style.display="none";
			document.getElementById("tcamv").style.display="none";	
		}

		/*function pari() {
			document.getElementById("talli").style.display="none";
			document.getElementById("tgioi").style.display="none";
			document.getElementById("tpari").style.display="block";
		}*/
		function gioi() {
			document.getElementById("talli").style.display="none";
			document.getElementById("tgioi").style.display="block";
			//document.getElementById("tpari").style.display="none";
		}
		function alli() {
			document.getElementById("talli").style.display="block";
			document.getElementById("tgioi").style.display="none";	
			//document.getElementById("tpari").style.display="none";
		}
		function allm() {
			document.getElementById("tallm").style.display="block";

		}
	</script>
		<?php
			require_once('db.php');
		?>


        <div class="caption">

        
	 
		<legend>Operazione</legend>
		<form action="prova">
			<input class="rad" type="radio" name="op" value="1" onclick="vis()"/>Visualizza<br>
			<input class="rad" type="radio" name="op" value="2" onclick="mod()"/>Modifica<br>
			<input class="rad" type="radio" name="op" value="3" onclick="ins()"/>Inserisci<br>
		</form>
		<div id="V">
			<legend>Elemento</legend>
			<form action="prova">
				<input id="marvv" class="rad" type="radio" name="op" value="1" onclick="marv()"/>Classifica Marcatori<br>
				<input id="camvv" class="rad" type="radio" name="op" value="2" onclick="camv()"/>Classifica Campionato<br>
				<input id="squvv" class="rad" type="radio" name="op" value="3" onclick="squv()"/>Squadre<br>
			</form>
		</div>
			
		<div id="I">
			<legend>Elemento</legend>
			<form action="prova">
			<!--	<input class="rad" id="parii" type="radio" name="op" value="1" onclick="pari()"/>Partita<br>	-->
				<input class="rad" id="gioii" type="radio" name="op" value="3" onclick="gioi()"/>Giocatore<br>
				<input class="rad" id="allii" type="radio" name="op" value="3" onclick="alli()"/>Allenatore<br>
			</form>
		</div>

		<div id="M">
			<legend>Elemento</legend>
			<form action="prova">
				<input class="rad" id="allmm" type="radio" name="op" value="1" onclick="allm()"/>Contratto Allenatore<br>
			</form>
		</div>
		
		

		<div id="tmarv">
			<table class="tb" style=" position:relative;">
				<tr>
					<th style="width:25%;">Nome</th>
					<th style="width:25%;">Cognome</th>
					<th style="width:25%;">Squadra</th>
					<th style="width:25%;">Goal</th>
				</tr>

				<?php
					$res=pg_query("SELECT nome,cognome,squadra,numerogoal FROM classificamarcatoria20162017 ORDER BY numerogoal DESC;");
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<td>".$arr['nome']."</td>";
						echo "<td>".$arr['cognome']."</td>";
						echo "<td>".$arr['squadra']."</td>";
						echo "<td>".$arr['numerogoal']."</td>";
						echo "</tr>";
						
					}



				?>
				
			</table>		
		</div>

		<div id="tcamv">
			<table class="tb" style=" position:relative;">
				<tr>
					<th style="width:25%;">Anno</th>
					<th style="width:30%;">Squadra</th>
					<th style="width:20%;">Punti</th>
					<th style="width:25%;">Pen</th>
				</tr>

				<?php
					$res=pg_query("SELECT anno,squadra,punti,penalizzazione FROM partecipa WHERE categoria='Serie A' ORDER BY punti DESC;");
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<td>".$arr['anno']."</td>";
						echo "<td>".$arr['squadra']."</td>";
						echo "<td>".$arr['punti']."</td>";
						echo "<td>".$arr['penalizzazione']."</td>";
						echo "</tr>";
						
					}



				?>
				
			</table>		
		</div>

		<div id="tsquv">
			<table class="tb" style=" position:relative;">
				<tr>
					<th style="width:30%;">Nome</th>
					<th style="width:20%;">Anno</th>
					<th style="width:30%;">Stadio</th>
				</tr>
				
				<?php
					$res=pg_query("SELECT squadra.anno,nome,stadio FROM squadra JOIN partecipa ON nome=squadra WHERE categoria='Serie A';");
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<td>".$arr['nome']."</td>";
						echo "<td>".$arr['anno']."</td>";
						echo "<td>".$arr['stadio']."</td>";
						echo "</tr>";
						
					}



				?>
			</table>		
		</div>
		
		<script type="text/javascript">
			function controllog() {
				var nome = document.gio.nomeg.value;
				var cognome = document.gio.cognomeg.value;
				var naz = document.gio.nazg.value;
				var anno = document.gio.annog.value;				
				var mese = document.gio.meseg.value;				
				var giorno = document.gio.giornog.value;
				
				if(nome == "")
				{
					alert("Nome Obbligatorio.");
					document.gio.nomeg.focus();
					return false;
				}
				else if(cognome == "")
				{
					alert("Cognome Obbligatorio.");
					document.gio.cognomeg.focus();
					return false;
				}
				else if(naz == "")
				{
					alert("Nazionalità Obbligatoria.");
					document.gio.nazg.focus();
					return false;
				}
				else if(naz.length != 3)
				{
					alert("Nazionaità 3 Caratteri.");
					document.gio.nazg.focus();
					return false;
				}
				else if((mese == 4) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.gio.giornog.focus();
					return false;
				}
				else if((mese == 6) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.gio.giornog.focus();
					return false;
				}
				else if((mese == 9) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.gio.giornog.focus();
					return false;
				}
				else if((mese == 11) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.gio.giornog.focus();
					return false;
				}
				else if((mese == 2) && (giorno > 28))
				{
					if((anno % 4) != 0)
					{
						alert("Massimo 28 Giorni.");
						document.gio.giornog.focus();
						return false;
					}
					else if (giorno > 29)
					{
						alert("Massimo 29 Giorni.");
						document.gio.giornog.focus();
						return false;
					}
				}


				else 
				{
					document.gio.action = "./control.php";
					document.gio.submit();
				}
			}
		</script>


		<div id="tgioi">
			<form name="gio" id="gio" method="POST">
				<table class="tb" style="position:relative;">
					<tr>
						<td style="width:50%;">Nome:</td><td><input style="width:100%;" type="text" id="nomeg" name="nomeg" size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Cognome:</td><td><input style="width:100%;" type="text" id="cognomeg" name="cognomeg"  size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Nazionalità:</td><td><input style="width:100%;" type="text" id="nazg" name="nazg"  size="20" maxlength="3"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Ruolo:</td><td><select style="width:100%;" id="ruolo" name="ruolo" >
								<option selected="selected">Portiere</option>
								<option>Difensore</option>
								<option>Centrocampista</option>
								<option>Attaccante</option>
							</select></td>
					</tr>
					<tr>
						<td style="width:50%;">Data di Nascita:</td>

						<td><input style="width:50%; padding:0px; margin-left:3px; margin-right:1px;" min="1900" value="2017" type="number" id="annog" name="annog"/>-<input style="width:21%; margin-left:2px; margin-right:1px; padding:0px;" min="01" max="12" value="04" type="number" id="meseg" name="meseg"/>-<input style="width:21%; padding:0px; margin-left:2px; margin-rigth:1px;" min="1" max="31" value="01" type="number" id="giornog" name="giornog"/>
						</td>
					</tr>
					<tr><td><br></td></tr>					
					<tr>
						<td></td>						
						<td style="width:50%;"><input style="width:100%;" type="button" value="Invia" size="20" onclick="controllog()"/></td>
					</tr>
				</table>
				<input type="text" name="indicatore" id="indicatore" value="insgioa" style="display: none;"/>
			</form>		
		</div>


	<!--	<script type="text/javascript">
			function controllop() {
				var casa = document.par.squadrac.options[squadrac.selectedIndex].value;
				var trasferta = document.par.squadrat.options[squadrat.selectedIndex].value;
				var anno = document.par.annop.value;
				var mese = document.par.mesep.value;
				var giorno = document.par.giornop.value;
				if(casa == trasferta)
				{
					alert("Inserire Squadre Diverse.");
					return false;
				}
				else if((mese == 4) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.par.giornop.focus();
					return false;
				}
				else if((mese == 6) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.par.giornop.focus();
					return false;
				}
				else if((mese == 9) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.par.giornop.focus();
					return false;
				}
				else if((mese == 11) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.par.giornop.focus();
					return false;
				}
				else if((mese == 2) && (giorno > 28))
				{
					if((anno % 4) != 0)
					{
						alert("Massimo 28 Giorni.");
						document.par.giornop.focus();
						return false;
					}
					else if (giorno > 29)
					{
						alert("Massimo 29 Giorni.");
						document.par.giornop.focus();
						return false;
					}
				}
				else 
				{
					document.par.action = "./control.php";
					document.par.submit();
				}
				
			}



		</script>
		<div id="tpari">
			<form name="par" id="par" method="POST">
				<table class="tb" style=" position:relative;">
					<tr>
						<td style="width:50%;">Anno:</td> 
						<td><input style="width:100%;" type="text" id="sta" name="sta" value="2016-2017" readonly size="20"/></td>
					</tr>
					<tr>
						<td>Categoria:</td>
						<td><input style="width:100%;" type="text" name="categoriap" id="categoriap" value="Serie A" readonly size="20"/></td>
					</tr>
					<tr>
						<td>Squadra di Casa:</td>
						<td>
							<select id="squadrac" name="squadrac" style="width:100%;">	
								<?php /*
									$res=pg_query("SELECT squadra.nome FROM squadra JOIN partecipa ON nome=squadra WHERE categoria='Serie A' ORDER BY squadra.nome;");
									for($i=0;$i<pg_num_rows($res);$i++)
									{
										$arr=pg_fetch_array($res,$i);
										echo "<option>".$arr['nome']."</option>";
									}
								*/

								?>
								
							</select>
						</td>
					</tr>
					<tr>
						<td>Squadra in Trasferta:</td>
						<td>
							<select name="squadrat" id="squadrat" style="width:100%;">
								<?php /*
									$res=pg_query("SELECT squadra.nome FROM squadra JOIN partecipa ON nome=squadra WHERE categoria='Serie A' ORDER BY squadra.nome;");
									for($i=0;$i<pg_num_rows($res);$i++)
									{
										$arr=pg_fetch_array($res,$i);
										echo "<option>".$arr['nome']."</option>";
									}

									*/
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Giornata:</td>
						<td>
							<select name="giornatap" id="giornatap" style="width:100%;">
								<?php /*
									for($i=27;$i<39;$i++)
									{
										echo "<option>".$i."</option>";
									 }
									*/
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Data:</td>
						<td><input style="width:23%; padding:0px; margin-left:2px; margin-right:1px;" min="1900" value="2017" type="number" id="annop" name="annop"/>-<input style="width:16%; margin-left:2px; padding:0px; margin-right:1px;" min="01" max="12" value="04" type="number" id="mesep" name="mesep"/>-<input style="width:16%; padding:0px; margin-left:2px; margin-right:1px;" min="1" max="31" value="01" type="number" id="giornop" name="giornop"/> <input style="width:16%; margin-left:2px; padding:0px; margin-right:1px;" min="00" max="23" value="00" type="number" id="orap" name="orap"/>:<input style="width:16%; padding:0px; margin-left:2px; margin-right:1px;" value="00" min="0" max="59" type="number" id="minp" name="minp"/>
						</td>
					</tr>
					<tr>
						<td>Goal Casa:</td>
						<td><input style="width:100%;" type="number" id="goalc" name="goalc" value="0" size="20" min="0"/></td>
					</tr>
					<tr>
						<td>Goal Trasferta: 
						<td><input style="width:100%;" type="number" id="goalt" name="goalt" value="0" size="20" min="0"/></td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td></td>
						<td><input style="width:100%;" type="button" value="Invia" size="20" onclick="controllop()"/></td>
					</tr>
				</table>
				<input type="text" name="indicatore" id="indicatore" value="inspara" style="display: none;"/>
			</form>		
		</div> -->

		<script type="text/javascript">
			function controlloa() {
				var nome = document.all.nomea.value;
				var cognome = document.all.cognomea.value;
				var naz = document.all.naza.value;
				var anno = document.all.annoa.value;
				var mese = document.all.mesea.value;
				var giorno = document.all.giornoa.value;
				if(nome == "")
				{
					alert("Nome Obbligatorio.");
					document.all.nomea.focus();
					return false;
				}
				else if(cognome == "")
				{
					alert("Cognome Obbligatorio.");
					document.all.cognomea.focus();
					return false;
				}
				else if(naz == "")
				{
					alert("Nazionaità Obbligatoria.");
					document.all.naza.focus();
					return false;
				}
				else if(naz.length != 3)
				{
					alert("Nazionaità 3 Caratteri.");
					document.all.naza.focus();
					return false;
				}
				else if((mese == 4) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.all.giornoa.focus();
					return false;
				}
				else if((mese == 6) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.all.giornoa.focus();
					return false;
				}
				else if((mese == 9) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.all.giornoa.focus();
					return false;
				}
				else if((mese == 11) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.all.giornoa.focus();
					return false;
				}
				else if((mese == 2) && (giorno > 28))
				{
					if((anno % 4) != 0)
					{
						alert("Massimo 28 Giorni.");
						document.all.giornoa.focus();
						return false;
					}
					else if (giorno > 29)
					{
						alert("Massimo 29 Giorni.");
						document.all.giornoa.focus();
						return false;
					}
				}
				else 
				{
					document.all.action = "./control.php";
					document.all.submit();
				}

			}
		</script>

		<div id="talli">
			<form name="all" id="all" method="POST">
				<table class="tb" style=" position:relative;">
					<tr>
						<td style="width:50%;">Nome:</td><td><input style="width:100%;" type="text" name="nomea" id="nomea" size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Cognome:</td><td><input style="width:100%;" type="text" name="cognomea" id="cognomea" size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Nazionalità:</td><td><input style="width:100%;" type="text" name="naza" id="naza" size="20" maxlength="3"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Data di Nascita:</td>
						<td><input style="width:50%; padding:0px; margin-left:3px; margin-right:1px;" min="1900" value="2017" type="number" id="annoa" name="annoa"/>-<input style="width:21%; margin-left:2px; margin-right:1px; padding:0px;" min="01" max="12" value="04" type="number" id="mesea" name="mesea"/>-<input style="width:21%; padding:0px; margin-left:2px; margin-rigth:1px;" min="1" max="31" value="01" type="number" id="giornoa" name="giornoa"/>
						</td>
					</tr>
					<tr><td><br></td></tr>					
					<tr>
						<td></td>						
						<td style="width:50%;"><input style="width:100%;" type="button" value="Invia" size="20" onclick="controlloa()"/></td>
					</tr>
				</table>
				<input type="text" name="indicatore" id="indicatore" value="insalla" style="display: none;"/>
			</form>				
		</div>

		
		<div id="tallm">
			<table style=" position:relative; width:100%; margin-top: 25px;">
				<tr>
					<th style="position:relative; width:15%;">Cognome</th>
					<th style="position:relative; width:11%;">Squadra</th>
					<th style="position:relative; width:14%;">Inizio</th>
					<th style="position:relative; width:25%;">Fine</th>
					<th style="position:relative; width:10%;">Iniziale</th>
					<th style="position:relative; width:25%;">Finale</th>
				</tr>

				<?php
					$res=pg_query("SELECT id,nome,cognome,ca.squadra,datai,dataf,specificai,specificaf FROM contrattoallenatore AS ca JOIN allenatore ON allenatore=id JOIN partecipa ON partecipa.squadra=ca.squadra WHERE categoria='Serie A' AND dataf>'".date("Y/m/d")."';");
				
					
						echo "<script type=\"text/javascript\">";
						for($i=0;$i<pg_num_rows($res);$i++)
						{
							echo "function ability$i() {
								document.getElementById(\"annomod$i\").disabled=false;
								document.getElementById(\"mesemod$i\").disabled=false;
								document.getElementById(\"giornomod$i\").disabled=false;
								document.getElementById(\"spec$i\").disabled=false;
								document.getElementById(\"mod$i\").style.display='none';
								document.getElementById(\"not$i\").style.display='block';
								document.getElementById(\"s$i\").style.display='block'";
							
							for($k=0;$k<pg_num_rows($res);$k++)
							{
								if($k!=$i)
								{
									echo "
										document.getElementById(\"annomod$k\").disabled=true;
										document.getElementById(\"mesemod$k\").disabled=true;
										document.getElementById(\"giornomod$k\").disabled=true;
										document.getElementById(\"spec$k\").disabled=true;
										document.getElementById(\"mod$k\").style.display='block';
										document.getElementById(\"not$k\").style.display='none';
										document.getElementById(\"s$k\").style.display='none';";
									
								}
							}
							echo "}";
							echo "function disability$i() {
								document.getElementById(\"annomod$i\").disabled=true;
								document.getElementById(\"mesemod$i\").disabled=true;
								document.getElementById(\"giornomod$i\").disabled=true;
								document.getElementById(\"spec$i\").disabled=true;
								document.getElementById(\"mod$i\").style.display='block';
								document.getElementById(\"not$i\").style.display='none';
								document.getElementById(\"s$i\").style.display='none';
							}";
						}

						echo"function controllom() {
								document.getElementById(\"modal\").action=\"./control.php\";
								document.getElementById(\"modal\").submit();
							}";

						echo "</script>";
					

				
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<form method=\"POST\" id=\"modalb$i\" name=\"modalb$i\" action=\"./control.php\">";
						echo "<td>".$arr['cognome']."</td>";
						echo "<td>".$arr['squadra']."</td>";
						echo "<td>".$arr['datai']."</td>";
						echo "<td>".$arr['dataf']."</td>";
						echo "<td>".$arr['specificai']."</td>";
						echo "<td>".$arr['specificaf']."</td>";
						echo "<td onclick=\"ability$i()\"><img id=\"mod$i\" src=\"img/edit-icon.png\" style=\"width:10px; height:10px; cursor:pointer;\"/><input type=\"submit\" id=\"s$i\" src=\"img/checkmark.png\" style=\"width:10px; height:10px; cursor:pointer; display:none;\"/> </td>";
						echo "<td onclick=\"disability$i()\"><img id=\"not$i\" src=\"./img/not.jpg\" style=\"margin-left:1px; width:10px; height:10px; display:none; cursor:pointer;\"</td>";
						
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
							echo "</td>";
							echo "<td>";
							echo "</td>";
							echo "<td>";
							echo "</td>";
							echo "<td>";
							echo "<input style=\"width:42%; position:relative;\" type=\"number\" id=\"annomod$i\" name=\"annomod$i\" min=\"1900\" value=\"2017\" disabled=\"true\"/><input style=\"width:29%; position:relative;\"type=\"number\" id=\"mesemod$i\" name=\"mesemod$i\" min=\"1\" max=\"12\" value=\"04\" disabled=\"true\"/><input style=\"width:29%; position:relative;\" type=\"number\" id=\"giornomod$i\" name=\"giornomod$i\" min=\"1\" max=\"31\" value=\"01\" disabled=\"true\"/>";
							echo "</td>";
							echo "<td>";
							echo "</td>";
							echo "<td><select style=\"width:79%;\" name=\"spec$i\" id=\"spec$i\" disabled=\"true\">";
							$qr=pg_query("SELECT descrizione FROM specificacontratto;");
							for($t=0;$t<pg_num_rows($qr);$t++)
							{
									$des=pg_fetch_array($qr,$t);
									echo "<option>".$des['descrizione']."</option>";
							}
							echo "</select></td>";
							echo "<input type=\"text\" name=\"indicatore\" id=\"indicatore\" value=\"modalla\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"indice\" id=\"indice\" value=\"$i\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"all\" id=\"all\" value=\"".$arr['id']."\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"squadra\" id=\"squadra\" value=\"".$arr['squadra']."\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"datai\" id=\"datai\" value=\"".$arr['datai']."\" style=\"display: none;\"/>";						
							echo "</form>";
							echo "</tr>";
					}


				?>
			</table>		
		</div>
        </div>
      </div>
    </div>

	

    <div class="col-sm-6">
      <div class="thumbnail"> 
<center><legend class="tit">SERIE B</legend></center>

	<script type="text/javascript">
		function visb() {
			document.getElementById("Vb").style.display="block";
			document.getElementById("Ib").style.display="none";
			document.getElementById("Mb").style.display="none";
			document.getElementById("tmarvb").style.display="none";
			document.getElementById("tcamvb").style.display="none";
			document.getElementById("tsquvb").style.display="none";
			document.getElementById("tallib").style.display="none";
			document.getElementById("tgioib").style.display="none";	
			document.getElementById("tparib").style.display="none";
			document.getElementById("tallmb").style.display="none";
			document.getElementById("allmmb").checked=false;
			//document.getElementById("pariib").checked=false;
			document.getElementById("alliib").checked=false;
			document.getElementById("gioiib").checked=false;
		}
		function modb() {
			document.getElementById("Mb").style.display="block";
			document.getElementById("Ib").style.display="none";
			document.getElementById("Vb").style.display="none";
			document.getElementById("tmarvb").style.display="none";
			document.getElementById("tcamvb").style.display="none";
			document.getElementById("tsquvb").style.display="none";	
			document.getElementById("tallib").style.display="none";
			document.getElementById("tgioib").style.display="none";	
			//document.getElementById("tparib").style.display="none";
			document.getElementById("tallmb").style.display="none";
			document.getElementById("pariib").checked=false;
			document.getElementById("alliib").checked=false;
			document.getElementById("gioiib").checked=false;
			document.getElementById("marvvb").checked=false;
			document.getElementById("camvvb").checked=false;
			document.getElementById("squvvb").checked=false;
		}
		function insb() {
			document.getElementById("Ib").style.display="block";
			document.getElementById("Vb").style.display="none";
			document.getElementById("Mb").style.display="none";
			document.getElementById("tmarvb").style.display="none";
			document.getElementById("tcamvb").style.display="none";
			document.getElementById("tsquvb").style.display="none";	
			document.getElementById("tallib").style.display="none";
			document.getElementById("tgioib").style.display="none";
			//document.getElementById("tparib").style.display="none";
			document.getElementById("tallmb").style.display="none";
			document.getElementById("allmmb").checked=false;
			document.getElementById("marvvb").checked=false;
			document.getElementById("camvvb").checked=false;
			document.getElementById("squvvb").checked=false;
		}

		function marvb() {
			document.getElementById("tmarvb").style.display="block";
			document.getElementById("tcamvb").style.display="none";
			document.getElementById("tsquvb").style.display="none";	
		}
		function camvb() {
			document.getElementById("tcamvb").style.display="block";
			document.getElementById("tsquvb").style.display="none";
			document.getElementById("tmarvb").style.display="none";	
		}
		function squvb() {
			document.getElementById("tsquvb").style.display="block";
			document.getElementById("tmarvb").style.display="none";
			document.getElementById("tcamvb").style.display="none";	
		}

		/*function parib() {
			document.getElementById("tallib").style.display="none";
			document.getElementById("tgioib").style.display="none";
			document.getElementById("tparib").style.display="block";
		}*/
		function gioib() {
			document.getElementById("tallib").style.display="none";
			document.getElementById("tgioib").style.display="block";
			//document.getElementById("tparib").style.display="none";
		}
		function allib() {
			document.getElementById("tallib").style.display="block";
			document.getElementById("tgioib").style.display="none";
			//document.getElementById("tparib").style.display="none";
		}

		function allmb() {
			document.getElementById("tallmb").style.display="block";

		}
	</script>


        <div class="caption">

        
	 
		<legend>Operazione</legend>
		<form action="prova">
			<input style="width:211px;" class="rad" type="radio" name="op" value="1" onclick="visb()"/>Visualizza<br>
			<input style="width:211px;" class="rad" type="radio" name="op" value="2" onclick="modb()"/>Modifica<br>
			<input style="width:211px;" class="rad" type="radio" name="op" value="3" onclick="insb()"/>Inserisci<br>
		</form>
		<div id="Vb">
			<legend>Elemento</legend>
			<form action="prova">
				<input style="width:211px;" id="marvvb" class="rad" type="radio" name="op" value="1" onclick="marvb()"/>Classifica Marcatori<br>
				<input style="width:211px;" id="camvvb" class="rad" type="radio" name="op" value="2" onclick="camvb()"/>Classifica Campionato<br>
				<input style="width:211px;" id="squvvb" class="rad" type="radio" name="op" value="3" onclick="squvb()"/>Squadre<br>
			</form>
		</div>
			
		<div id="Ib">
			<legend>Elemento</legend>
			<form action="prova">
			<!--	<input style="width:211px;" class="rad" id="pariib" type="radio" name="op" value="1" onclick="parib()"/>Partita<br>	-->
				<input style="width:211px;" class="rad" id="gioiib" type="radio" name="op" value="3" onclick="gioib()"/>Giocatore<br>
				<input style="width:211px;" class="rad" id="alliib" type="radio" name="op" value="3" onclick="allib()"/>Allenatore<br>
			</form>
		</div>

		<div id="Mb">
			<legend>Elemento</legend>
			<form action="prova">
				<input style="width:211px;" class="rad" id="allmmb" type="radio" name="op" value="1" onclick="allmb()"/>Contratto Allenatore<br>
			</form>
		</div>

		<div id="tmarvb">
			<table class="tb" style=" position:relative;">
				<tr>
					<th style="width:25%;">Nome</th>
					<th style="width:25%;">Cognome</th>
					<th style="width:25%;">Squadra</th>
					<th style="width:25%;">Goal</th>
				</tr>

				<?php
					$res=pg_query("SELECT nome,cognome,squadra,numerogoal FROM classificamarcatorib20162017 ORDER BY numerogoal DESC;");
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<td>".$arr['nome']."</td>";
						echo "<td>".$arr['cognome']."</td>";
						echo "<td>".$arr['squadra']."</td>";
						echo "<td>".$arr['numerogoal']."</td>";
						echo "</tr>";
						
					}



				?>
				
			</table>		
		</div>

		<div id="tcamvb">
			<table class="tb" style=" position:relative;">
				<tr>
					<th style="width:25%;">Anno</th>
					<th style="width:30%;">Squadra</th>
					<th style="width:20%;">Punti</th>
					<th style="width:25%;">Pen</th>
				</tr>

				<?php
					$res=pg_query("SELECT anno,squadra,punti,penalizzazione FROM partecipa WHERE categoria='Serie B' ORDER BY punti DESC;");
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<td>".$arr['anno']."</td>";
						echo "<td>".$arr['squadra']."</td>";
						echo "<td>".$arr['punti']."</td>";
						echo "<td>".$arr['penalizzazione']."</td>";
						echo "</tr>";
						
					}



				?>
				
			</table>		
		</div>

		<div id="tsquvb">
			<table class="tb" style=" position:relative;">
				<tr>
					<th style="width:30%;">Nome</th>
					<th style="width:20%;">Anno</th>
					<th style="width:30%;">Stadio</th>
				</tr>
				
				<?php
					$res=pg_query("SELECT squadra.anno,nome,stadio FROM squadra JOIN partecipa ON nome=squadra WHERE categoria='Serie B';");
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<td>".$arr['nome']."</td>";
						echo "<td>".$arr['anno']."</td>";
						echo "<td>".$arr['stadio']."</td>";
						echo "</tr>";
						
					}



				?>
			</table>		
		</div>

		

		<script type="text/javascript">
			function controllogb() {
				var nome = document.giob.nomegb.value;
				var cognome = document.giob.cognomegb.value;
				var naz = document.giob.nazgb.value;
				var anno = document.giob.annogb.value;				
				var mese = document.giob.mesegb.value;				
				var giorno = document.giob.giornogb.value;
				
				if(nome == "")
				{
					alert("Nome Obbligatorio.");
					document.giob.nomegb.focus();
					return false;
				}
				else if(cognome == "")
				{
					alert("Cognome Obbligatorio.");
					document.giob.cognomegb.focus();
					return false;
				}
				else if(naz == "")
				{
					alert("Nazionalità Obbligatoria.");
					document.giob.nazgb.focus();
					return false;
				}
				else if(naz.length != 3)
				{
					alert("Nazionaità 3 Caratteri.");
					document.giob.nazgb.focus();
					return false;
				}
				else if((mese == 4) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.giob.giornogb.focus();
					return false;
				}
				else if((mese == 6) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.giob.giornogb.focus();
					return false;
				}
				else if((mese == 9) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.giob.giornogb.focus();
					return false;
				}
				else if((mese == 11) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.giob.giornogb.focus();
					return false;
				}
				else if((mese == 2) && (giorno > 28))
				{
					if((anno % 4) != 0)
					{
						alert("Massimo 28 Giorni.");
						document.giob.giornogb.focus();
						return false;
					}
					else if (giorno > 29)
					{
						alert("Massimo 29 Giorni.");
						document.giob.giornogb.focus();
						return false;
					}
				}


				else 
				{
					document.giob.action = "./control.php";
					document.giob.submit();
				}
			}
		</script>


		<div id="tgioib">
			<form name="giob" id="giob" method="POST">
				<table class="tb" style="position:relative;">
					<tr>
						<td style="width:50%;">Nome:</td><td><input style="width:100%;" type="text" id="nomegb" name="nomegb" size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Cognome:</td><td><input style="width:100%;" type="text" id="cognomegb" name="cognomegb"  size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Nazionalità:</td><td><input style="width:100%;" type="text" id="nazgb" name="nazgb"  size="20" maxlength="3"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Ruolo:</td><td><select style="width:100%;" id="ruolob" name="ruolob" >
								<option selected="selected">Portiere</option>
								<option>Difensore</option>
								<option>Centrocampista</option>
								<option>Attaccante</option>
							</select></td>
					</tr>
					<tr>
						<td style="width:50%;">Data di Nascita:</td>

						<td><input style="width:50%; padding:0px; margin-left:3px; margin-right:1px;" min="1900" value="2017" type="number" id="annogb" name="annogb"/>-<input style="width:21%; margin-left:2px; margin-right:1px; padding:0px;" min="01" max="12" value="04" type="number" id="mesegb" name="mesegb"/>-<input style="width:21%; padding:0px; margin-left:2px; margin-rigth:1px;" min="1" max="31" value="01" type="number" id="giornogb" name="giornogb"/>
						</td>
					</tr>
					<tr><td><br></td></tr>					
					<tr>
						<td></td>						
						<td style="width:50%;"><input style="width:100%;" type="button" value="Invia" size="20" onclick="controllogb()"/></td>
					</tr>
				</table>
				<input type="text" name="indicatore" id="indicatore" value="insgiob" style="display: none;"/>
			</form>		
		</div>

	<!--	<script type="text/javascript">
			function controllopb() {
				var casa = document.parb.squadracb.options[squadracb.selectedIndex].value;
				var trasferta = document.parb.squadratb.options[squadratb.selectedIndex].value;
				var anno = document.parb.annopb.value;
				var mese = document.parb.mesepb.value;
				var giorno = document.parb.giornopb.value;
				if(casa == trasferta)
				{
					alert("Inserire Squadre Diverse.");
					return false;
				}
				else if((mese == 4) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.parb.giornopb.focus();
					return false;
				}
				else if((mese == 6) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.parb.giornopb.focus();
					return false;
				}
				else if((mese == 9) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.parb.giornopb.focus();
					return false;
				}
				else if((mese == 11) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.parb.giornopb.focus();
					return false;
				}
				else if((mese == 2) && (giorno > 28))
				{
					if((anno % 4) != 0)
					{
						alert("Massimo 28 Giorni.");
						document.parb.giornopb.focus();
						return false;
					}
					else if (giorno > 29)
					{
						alert("Massimo 29 Giorni.");
						document.parb.giornopb.focus();
						return false;
					}
				}
				else 
				{
					document.parb.action = "./control.php";
					document.parb.submit();
				}
				
			}



		</script>
		<div id="tparib">
			<form name="parb" id="parb" method="POST">
				<table class="tb" style=" position:relative;">
					<tr>
						<td style="width:50%;">Anno:</td> 
						<td><input style="width:100%;" type="text" id="sta" name="sta" value="2016-2017" readonly size="20"/></td>
					</tr>
					<tr>
						<td>Categoria:</td>
						<td><input style="width:100%;" type="text" name="categoriapb" id="categoriapb" value="Serie B" readonly size="20"/></td>
					</tr>
					<tr>
						<td>Squadra di Casa:</td>
						<td>
							<select id="squadracb" name="squadracb" style="width:100%;">
								<?php /*
									$res=pg_query("SELECT squadra.nome FROM squadra JOIN partecipa ON nome=squadra WHERE categoria='Serie B' ORDER BY squadra.nome;");
									for($i=0;$i<pg_num_rows($res);$i++)
									{
										$arr=pg_fetch_array($res,$i);
										echo "<option>".$arr['nome']."</option>";
									}
									*/

								?>
								
							</select>
						</td>
					</tr>
					<tr>
						<td>Squadra in Trasferta:</td>
						<td>
							<select name="squadratb" id="squadratb" style="width:100%;">
								<?php /*
									$res=pg_query("SELECT squadra.nome FROM squadra JOIN partecipa ON nome=squadra WHERE categoria='Serie B' ORDER BY squadra.nome;");
									for($i=0;$i<pg_num_rows($res);$i++)
									{
										$arr=pg_fetch_array($res,$i);
										echo "<option>".$arr['nome']."</option>";
									}

									*/
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Giornata:</td>
						<td>
							<select name="giornatapb" id="giornatapb" style="width:100%;">
								<?php /*
									for($i=30;$i<43;$i++)
									{
										echo "<option>".$i."</option>";
									}
									*/
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Data:</td>
						<td><input style="width:23%; padding:0px; margin-left:2px; margin-right:1px;" min="1900" value="2017" type="number" id="annopb" name="annopb"/>-<input style="width:16%; margin-left:2px; padding:0px; margin-right:1px;" min="01" max="12" value="04" type="number" id="mesepb" name="mesepb"/>-<input style="width:16%; padding:0px; margin-left:2px; margin-right:1px;" min="1" max="31" value="01" type="number" id="giornopb" name="giornopb"/> <input style="width:16%; margin-left:2px; padding:0px; margin-right:1px;" min="00" max="23" value="00" type="number" id="orapb" name="orapb"/>:<input style="width:16%; padding:0px; margin-left:2px; margin-right:1px;" value="00" min="0" max="59" type="number" id="minpb" name="minpb"/>
						</td>
					</tr>
					<tr>
						<td>Goal Casa:</td>
						<td><input style="width:100%;" type="number" id="goalcb" name="goalcb" value="0" size="20" min="0"/></td>
					</tr>
					<tr>
						<td>Goal Trasferta: 
						<td><input style="width:100%;" type="number" id="goaltb" name="goaltb" value="0" size="20" min="0"/></td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td></td>
						<td><input style="width:100%;" type="button" value="Invia" size="20" onclick="controllopb()"/></td>
					</tr>
				</table>
				<input type="text" name="indicatore" id="indicatore" value="insparb" style="display: none;"/>
			</form>		
		</div> 	-->

	


		<script type="text/javascript">
			function controlloab() {
				var nome = document.allb.nomeab.value;
				var cognome = document.allb.cognomeab.value;
				var naz = document.allb.nazab.value;
				var anno = document.allb.annoab.value;
				var mese = document.allb.meseab.value;
				var giorno = document.allb.giornoab.value;
				if(nome == "")
				{
					alert("Nome Obbligatorio.");
					document.allb.nomeab.focus();
					return false;
				}
				else if(cognome == "")
				{
					alert("Cognome Obbligatorio.");
					document.allb.cognomeab.focus();
					return false;
				}
				else if(naz == "")
				{
					alert("Nazionaità Obbligatoria.");
					document.allb.nazab.focus();
					return false;
				}
				else if(naz.length != 3)
				{
					alert("Nazionaità 3 Caratteri.");
					document.allb.nazab.focus();
					return false;
				}
				else if((mese == 4) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.allb.giornoab.focus();
					return false;
				}
				else if((mese == 6) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.allb.giornoab.focus();
					return false;
				}
				else if((mese == 9) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.allb.giornoab.focus();
					return false;
				}
				else if((mese == 11) && (giorno > 30))
				{
					alert("Massimo 30 Giorni.");
					document.allb.giornoab.focus();
					return false;
				}
				else if((mese == 2) && (giorno > 28))
				{
					if((anno % 4) != 0)
					{
						alert("Massimo 28 Giorni.");
						document.allb.giornoab.focus();
						return false;
					}
					else if (giorno > 29)
					{
						alert("Massimo 29 Giorni.");
						document.allb.giornoab.focus();
						return false;
					}
				}
				else 
				{
					document.allb.action = "./control.php";
					document.allb.submit();
				}

			}
		</script>

		<div id="tallib">
			<form name="allb" id="allb" method="POST">
				<table class="tb" style=" position:relative;">
					<tr>
						<td style="width:50%;">Nome:</td><td><input style="width:100%;" type="text" name="nomeab" id="nomeab" size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Cognome:</td><td><input style="width:100%;" type="text" name="cognomeab" id="cognomeab" size="20" maxlength="20"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Nazionalità:</td><td><input style="width:100%;" type="text" name="nazab" id="nazab" size="20" maxlength="3"/></td>
					</tr>
					<tr>
						<td style="width:50%;">Data di Nascita:</td>
						<td><input style="width:50%; padding:0px; margin-left:3px; margin-right:1px;" min="1900" value="2017" type="number" id="annoab" name="annoab"/>-<input style="width:21%; margin-left:2px; margin-right:1px; padding:0px;" min="01" max="12" value="04" type="number" id="meseab" name="meseab"/>-<input style="width:21%; padding:0px; margin-left:2px; margin-rigth:1px;" min="1" max="31" value="01" type="number" id="giornoab" name="giornoab"/>
						</td>
					</tr>
					<tr><td><br></td></tr>					
					<tr>
						<td></td>						
						<td style="width:50%;"><input style="width:100%;" type="button" value="Invia" size="20" onclick="controlloab()"/></td>
					</tr>
				</table>
				<input type="text" name="indicatore" id="indicatore" value="insallb" style="display: none;"/>
			</form>				
		</div>

		
		<div id="tallmb">
			<table style=" position:relative; width:100%; margin-top: 25px;">
				<tr>
					<th style="position:relative; width:15%;">Cognome</th>
					<th style="position:relative; width:11%;">Squadra</th>
					<th style="position:relative; width:14%;">Inizio</th>
					<th style="position:relative; width:25%;">Fine</th>
					<th style="position:relative; width:10%;">Iniziale</th>
					<th style="position:relative; width:25%;">Finale</th>
				</tr>

				<?php
					$res=pg_query("SELECT id,nome,cognome,ca.squadra,datai,dataf,specificai,specificaf FROM contrattoallenatore AS ca JOIN allenatore ON allenatore=id JOIN partecipa ON partecipa.squadra=ca.squadra WHERE categoria='Serie B' AND dataf>'".date("Y/m/d")."';");
				
					
						echo "<script type=\"text/javascript\">";
						for($i=0;$i<pg_num_rows($res);$i++)
						{
							echo "function abilityb$i() {
								document.getElementById(\"annomodb$i\").disabled=false;
								document.getElementById(\"mesemodb$i\").disabled=false;
								document.getElementById(\"giornomodb$i\").disabled=false;
								document.getElementById(\"specb$i\").disabled=false;

								document.getElementById(\"modb$i\").style.display='none';
								document.getElementById(\"notb$i\").style.display='block';
								document.getElementById(\"sb$i\").style.display='block'";
							
							for($k=0;$k<pg_num_rows($res);$k++)
							{
								if($k!=$i)
								{
									echo "
										document.getElementById(\"annomodb$k\").disabled=true;

										document.getElementById(\"mesemodb$k\").disabled=true;
										document.getElementById(\"giornomodb$k\").disabled=true;
										document.getElementById(\"specb$k\").disabled=true;
										document.getElementById(\"modb$k\").style.display='block';
										document.getElementById(\"notb$k\").style.display='none';

										document.getElementById(\"sb$k\").style.display='none';";
									
								}
							}
							echo "}";
							echo "function disabilityb$i() {
								document.getElementById(\"annomodb$i\").disabled=true;
								document.getElementById(\"mesemodb$i\").disabled=true;
								document.getElementById(\"giornomodb$i\").disabled=true;

								document.getElementById(\"specb$i\").disabled=true;
								document.getElementById(\"modb$i\").style.display='block';
								document.getElementById(\"notb$i\").style.display='none';
								document.getElementById(\"sb$i\").style.display='none';
							}";
						}

						echo"function controllomb() {
								document.getElementById(\"modalb\").action=\"./control.php\";
								document.getElementById(\"modalb\").submit();

							}";

						echo "</script>";
					

					$count=0;	
					for($i=0;$i<pg_num_rows($res);$i++)
					{
						$arr=pg_fetch_array($res,$i);
						echo "<tr>";
						echo "<form method=\"POST\" id=\"modalb$i\" name=\"modalb$i\" action=\"./control.php\">";
						echo "<td>".$arr['cognome']."</td>";
						echo "<td>".$arr['squadra']."</td>";
						echo "<td>".$arr['datai']."</td>";
						echo "<td>".$arr['dataf']."</td>";
						echo "<td>".$arr['specificai']."</td>";
						echo "<td>".$arr['specificaf']."</td>";
						echo "<td onclick=\"abilityb$i()\"><img id=\"modb$i\" src=\"img/edit-icon.png\" style=\"width:10px; height:10px; cursor:pointer;\"/><input type=\"submit\" id=\"sb$i\" src=\"img/checkmark.png\" style=\"width:10px; height:10px; cursor:pointer; display:none;\"/> </td>";
						echo "<td onclick=\"disabilityb$i()\"><img id=\"notb$i\" src=\"./img/not.jpg\" style=\"margin-left:1px; width:10px; height:10px; display:none; cursor:pointer;\"</td>";
						
						echo "</tr>";
						echo "<tr>";
							echo "<td>";
							echo "</td>";
							echo "<td>";
							echo "</td>";
							echo "<td>";
							echo "</td>";
							echo "<td>";
							echo "<input style=\"width:42%; position:relative;\" type=\"number\" id=\"annomodb$i\" name=\"annomodb$i\" min=\"1900\" value=\"2017\" disabled=\"true\"/><input style=\"width:29%; position:relative;\"type=\"number\" id=\"mesemodb$i\" name=\"mesemodb$i\" min=\"1\" max=\"12\" value=\"04\" disabled=\"true\"/><input style=\"width:29%; position:relative;\" type=\"number\" id=\"giornomodb$i\" name=\"giornomodb$i\" min=\"1\" max=\"31\" value=\"01\" disabled=\"true\"/>";
							echo "</td>";
							echo "<td>";
							echo "</td>";
							echo "<td><select style=\"width:79%;\" name=\"specb$i\" id=\"specb$i\" disabled=\"true\">";
							$qr=pg_query("SELECT descrizione FROM specificacontratto;");
							for($t=0;$t<pg_num_rows($qr);$t++)
							{
									$des=pg_fetch_array($qr,$t);
									echo "<option>".$des['descrizione']."</option>";
							}
							echo "</select></td>";
							echo "<input type=\"text\" name=\"indicatore\" id=\"indicatore\" value=\"modallb\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"indice\" id=\"indice\" value=\"$i\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"all\" id=\"all\" value=\"".$arr['id']."\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"squadra\" id=\"squadra\" value=\"".$arr['squadra']."\" style=\"display: none;\"/>";
							echo "<input type=\"text\" name=\"datai\" id=\"datai\" value=\"".$arr['datai']."\" style=\"display: none;\"/>";
							echo "</form>";
							echo "</tr>";
$count++;
					}


				?>
			</table>		
		</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container"> </div>
<hr>
<hr>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12"> </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
