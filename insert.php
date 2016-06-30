<html>
<head>
	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
<!-- importation du css -->
	<link rel="stylesheet" href="themes/ui-lightness/jquery.ui.all.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css"  media="screen" />
	<link href="css/base.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
include("dbconnect.php");
if (isset($_POST['envoyer']) && $_POST['envoyer'] == "Envoyer"){
      // on affiche le nombre de champs du formulaire
      //echo 'Nombre de champs : '.$_POST['nb_champs'].'<br />';
if ($_POST['radio'] == "")
 {
 ?>
 <script> alert("Veuillez selectionner le mode de paiement")</script>
 <?php
 }
   else if ($_POST['email'] == "")
 {
 ?>
 <script> alert("Veuillez renseigner votre email")</script>
 <?php
 }
 else if ($_POST['societe'] == "")
 {
 ?>
 <script> alert("Veuillez renseigner le nom de votre structure")</script>
 <?php
 }
 else if ($_POST['adresse'] == "")
 {
 ?>
 <script> alert("Veuillez renseigner votre adresse ")</script>
 <?php
 }
 
 else if ($_POST['pays'] == "")
 {
 ?>
 <script> alert("Veuillez renseigner votre pays ")</script>
 <?php
 }
 else if ($_POST['ville'] == "")
 {
 ?>
 <script> alert("Veuillez renseigner votre ville ")</script>
 <?php
 }
 else
 { 
 $message .= 'Membres Inscrits a la formation  '.$_SESSION['rubrique']."\r\n";
 $date=gmdate("d/m/y");
      // on affiche la valeur des champs du formulaire
      for ($i=1; $i<=$_POST['nombre']; $i++)
	  {
            $dynamique = 'champ_'.$i;
            $dynamique2 = 'champs_'.$i; 
			$dynamique3 = 'camq_'.$i;  
            $value = $_POST[$dynamique];
            $value2 = $_POST[$dynamique2];
			$value3 = $_POST[$dynamique3];
			
		
 if ($value == "")
 {
 ?>
 <script> alert("Veuillez renseigner le champs nom")</script>
 <?php
 }
 else if ($value2 == "")
 {
 ?>
 <script> alert("Veuillez renseigner le champs fonction")</script>
 <?php
 }
 else if ($value3 == "")
 {
 ?>
 <script> alert("Veuillez renseigner le champs numero de t/351l/351phone")</script>
 <?php
 }

 else
 {
$insert = "INSERT INTO inscription VALUES('','".htmlspecialchars ($value)."','".$value2."','".$value3."','".$_POST['email']."','".$_POST['fax']."','".htmlspecialchars ($_POST['societe'])."','".$_POST['adresse']."','".htmlspecialchars ($_POST['pays'])."','".htmlspecialchars ($_POST['ville'])."','".$_POST['tel']."','".htmlspecialchars ($_POST['nom'])."','".htmlspecialchars ($_POST['prenom'])."','".htmlspecialchars ($_POST['titre'])."','".$_POST['radio']."','".$_SESSION['date']."','".$_SESSION['categorie']."','".$_SESSION['rubrique']."','".$_SESSION['lieu']."')";
$reslt=mysql_query($insert);

if ($reslt==1)
{
?>
<script> alert("Inscription Effectu/351e avec succ\350s !!!")</script>
<?php


//CREATION DE VARIABLE SIMPLE A LIRE ET ECRIRE
						/*if (!empty($_POST)) {
						  $email= strip_tags($_POST['email']);
						  $pays= strip_tags($_POST['pays']);
						  $fax= strip_tags($_POST['fax']);
						  $ville= strip_tags($_POST['ville']);
						  $societe= strip_tags($_POST['societe']);
						  $telephone= strip_tags($_POST['tel']);
						  $adresse= strip_tags($_POST['adresse']);
						  $nom_perseng= strip_tags($_POST['nom_perseng']);
						  $prenom_perseng= strip_tags($_POST['prenom_perseng']);
						  $titre_perseng= strip_tags($_POST['titre_perseng']);
						  $paiement= $_POST['type_paiement'];*/
			
						  //REQUETE D'INSERTION DANS LA BASE DE DONNEES
						  $req= $bdd->prepare('INSERT INTO inscription (Email_soc, Fax_soc, nom_soc, Adresse_soc, pays_soc, ville_soc, tel_soc, nom_perseng, prenom_perseng, titre_perseng, paiement) VALUES (:email, :fax, :societe, :adresse, :pays, :ville, :tel, :nom_perseng, :prenom_perseng, :titre_perseng, :type_paiement)');
						  $req -> execute (array(
							':email' => $email,
							':fax' => $fax,
							':societe' => $societe,
							':adresse' => $adresse,
							':pays' => $pays,
							':ville' => $ville,
							':tel' => $telephone,
							':nom_perseng' => $nom_perseng,
							':prenom_perseng' => $prenom_perseng,
							':titre_perseng' => $titre_perseng,
							':type_paiement' => $paiement
						  ));

						  //FERMETURE DE LA REQUETE APRES EXECUTUION
						  $req-> closeCursor();

						  echo "Enregistrement effectué";
						}



//envoyer par mail

 $dynamique = 'champ_'. '1';
            $dynamique2 = 'champs_'. '1'; 
			$dynamique3 = 'camq_'. '1';  
            $value4 = $_POST[$dynamique];
            $value5 = $_POST[$dynamique2];
			$value6 = $_POST[$dynamique3];
			
			
		
 $dynamique = 'champ_'. '2';
            $dynamique2 = 'champs_'. '2'; 
			$dynamique3 = 'camq_'. '2';  
            $value7 = $_POST[$dynamique];
            $value8 = $_POST[$dynamique2];
			$value9 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '3';
            $dynamique2 = 'champs_'. '3'; 
			$dynamique3 = 'camq_'. '3';  
            $value10 = $_POST[$dynamique];
            $value11 = $_POST[$dynamique2];
			$value12 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '4';
            $dynamique2 = 'champs_'. '4'; 
			$dynamique3 = 'camq_'. '4';  
            $value13 = $_POST[$dynamique];
            $value14 = $_POST[$dynamique2];
			$value15 = $_POST[$dynamique3];
	
 		
 $dynamique = 'champ_'. '5';
            $dynamique2 = 'champs_'. '5'; 
			$dynamique3 = 'camq_'. '5';  
            $value16 = $_POST[$dynamique];
            $value17 = $_POST[$dynamique2];
			$value18 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '6';
            $dynamique2 = 'champs_'. '6'; 
			$dynamique3 = 'camq_'. '6';  
            $value19 = $_POST[$dynamique];
            $value20 = $_POST[$dynamique2];
			$value21 = $_POST[$dynamique3];

 		
 $dynamique = 'champ_'. '7';
            $dynamique2 = 'champs_'. '7'; 
			$dynamique3 = 'camq_'. '7';  
            $value22 = $_POST[$dynamique];
            $value23 = $_POST[$dynamique2];
			$value24 = $_POST[$dynamique3];
	
 		
 $dynamique = 'champ_'. '8';
            $dynamique2 = 'champs_'. '8'; 
			$dynamique3 = 'camq_'. '8';  
            $value25 = $_POST[$dynamique];
            $value26 = $_POST[$dynamique2];
			$value27 = $_POST[$dynamique3];
	
 		
 $dynamique = 'champ_'. '9';
            $dynamique2 = 'champs_'. '9'; 
			$dynamique3 = 'camq_'. '9';  
            $value28 = $_POST[$dynamique];
            $value29 = $_POST[$dynamique2];
			$value30 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '10';
            $dynamique2 = 'champs_'. '10'; 
			$dynamique3 = 'camq_'. '10';  
            $value31 = $_POST[$dynamique];
            $value32 = $_POST[$dynamique2];
			$value33 = $_POST[$dynamique3];
 
 		
 $dynamique = 'champ_'. '11';
            $dynamique2 = 'champs_'. '11'; 
			$dynamique3 = 'camq_'. '11';  
            $value34 = $_POST[$dynamique];
            $value35 = $_POST[$dynamique2];
			$value36 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '12';
            $dynamique2 = 'champs_'. '12'; 
			$dynamique3 = 'camq_'. '12';  
            $value37 = $_POST[$dynamique];
            $value38 = $_POST[$dynamique2];
			$value39 = $_POST[$dynamique3];
			
		
 $dynamique = 'champ_'. '13';
            $dynamique2 = 'champs_'. '13'; 
			$dynamique3 = 'camq_'. '13';  
            $value40 = $_POST[$dynamique];
            $value41 = $_POST[$dynamique2];
			$value42 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '14';
            $dynamique2 = 'champs_'. '14'; 
			$dynamique3 = 'camq_'. '14';  
            $value43 = $_POST[$dynamique];
            $value44 = $_POST[$dynamique2];
			$value45 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '15';
            $dynamique2 = 'champs_'. '15'; 
			$dynamique3 = 'camq_'. '15';  
            $value46 = $_POST[$dynamique];
            $value47 = $_POST[$dynamique2];
			$value48 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '16';
            $dynamique2 = 'champs_'. '16'; 
			$dynamique3 = 'camq_'. '16';  
            $value49 = $_POST[$dynamique];
            $value50 = $_POST[$dynamique2];
			$value51 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '17';
            $dynamique2 = 'champs_'. '17'; 
			$dynamique3 = 'camq_'. '17';  
            $value52 = $_POST[$dynamique];
            $value53 = $_POST[$dynamique2];
			$value54 = $_POST[$dynamique3];
			
 		
 $dynamique = 'champ_'. '18';
            $dynamique2 = 'champs_'. '18'; 
			$dynamique3 = 'camq_'. '18';  
            $value55 = $_POST[$dynamique];
            $value56 = $_POST[$dynamique2];
			$value57 = $_POST[$dynamique3];
			
			
 		
 $dynamique = 'champ_'. '19';
            $dynamique2 = 'champs_'. '19'; 
			$dynamique3 = 'camq_'. '19';  
            $value58 = $_POST[$dynamique];
            $value59 = $_POST[$dynamique2];
			$value60 = $_POST[$dynamique3];
			
 $dynamique = 'champ_'. '20';
            $dynamique2 = 'champs_'. '20'; 
			$dynamique3 = 'camq_'. '20';  
            $value61 = $_POST[$dynamique];
            $value62 = $_POST[$dynamique2];
			$value63 = $_POST[$dynamique3];

$societe=$_POST["societe"];

$email=htmlspecialchars($_POST["email"]);
$tel=htmlspecialchars($_POST["tel"]);
$adresse=htmlspecialchars($_POST["adresse"]);
$ville=htmlspecialchars($_POST["ville"]);
$pays=htmlspecialchars($_POST["pays"]);
$fax=$_POST["fax"];

$fonction=$_POST["titre"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];

$theme=$_SESSION["rubrique"];
$lieu=htmlspecialchars($_SESSION["lieu"]);
$periode=$_SESSION["date"];
$cout=$_SESSION["cout"];
$monnaie=$_SESSION["monnaie"];


$choix=htmlspecialchars($_POST["radio"]);

//$from = "gilles.gnanagbe@gaussoft.net";
$from = "Site web  <welmous@fasonet.bf>";
$to = "Site web <welmous@fasonet.bf>";

$from1 = "Site web  <secretariat.welmous@yahoo.fr>";
$to1 = "Site web <secretariat.welmous@yahoo.fr>";

$subject = "Incription a une formation [WELMOUS.COM]";

$message ="
<table id=Tableau_01 width=918 border=0 cellpadding=0 cellspacing=0>
				<tr height=419>
					<td width=834>
						<table width=772 border=0 align=center cellpadding=0 cellspacing=2>
							<tr height=153>
								<td valign=top width=768 height=153>
									<div class=cell_line_new>
									  <table width=734 border=0 cellspacing=2 cellpadding=0 height=811>
									  <tr height=31 class=cell_line_new>
									    <td width=730 height=807 align=left valign=top class=cell_trim><table width=758 border=0 cellspacing=2 cellpadding=0 height=337>
									      <tr>
									        <td  align=center height=33 class=cell_line_new>THEME:</td>
									        <td height=33 colspan=3  align=center class=cell_line_new> $theme</td>
								          </tr>
									      <tr class=content-border>
											<td colspan=4 align=center height=30 style=background-color:#82a9b5;color:#FFFFFF; font-size:17px;text-transform:uppercase; padding-top:10px; font-weight:bold>
												Renseigement sur les participants
												</td>
												</tr>
									      <tr>
									        <td class=cell_line_new width=57 height=26>&nbsp;</td>
									        <td  align=center class=cell_line_new width=263 >Nom et Pr&eacute;nom(s)</td>
									        <td  align=center class=cell_line_new width=202 >Fonction</td>
									        <td  align=center class=cell_line_new width=226>N&deg; de Tel.priv&eacute;(cel)</td>
								          </tr>
									      <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value4</td>
									        <td   align=center class=cell_line_new  > $value5</td>
											<td   align=center  class=cell_line_new > $value6</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value7</td>
									        <td   align=center class=cell_line_new  > $value8</td>
											<td   align=center  class=cell_line_new > $value9</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value10</td>
									        <td   align=center class=cell_line_new  > $value11</td>
											<td   align=center  class=cell_line_new > $value12</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value13</td>
									        <td   align=center  class=cell_line_new > $value14</td>
											<td   align=center  class=cell_line_new width=226> $value15</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value16</td>
									        <td   align=center class=cell_line_new  > $value17</td>
											<td   align=center  class=cell_line_new > $value18</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value19</td>
									        <td   align=center class=cell_line_new  > $value20</td>
											<td   align=center  class=cell_line_new width=226> $value21</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value22</td>
									        <td   align=center  class=cell_line_new > $value23</td>
											<td   align=center  class=cell_line_new width=226> $value24</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value25</td>
									        <td   align=center class=cell_line_new  > $value26</td>
											<td   align=center  class=cell_line_new width=226> $value27</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value28</td>
									        <td   align=center class=cell_line_new  > $value29</td>
											<td   align=center  class=cell_line_new > $value30</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value31</td>
									        <td   align=center class=cell_line_new  > $value32</td>
											<td   align=center  class=cell_line_new > $value33</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value34</td>
									        <td   align=center class=cell_line_new  > $value35</td>
											<td   align=center  class=cell_line_new width=226> $value36</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value37</td>
									        <td   align=center class=cell_line_new  > $value38</td>
											<td   align=center  class=cell_line_new > $value39</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value40</td>
									        <td   align=center class=cell_line_new  > $value41</td>
											<td   align=center  class=cell_line_new > $value42</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value43</td>
									        <td   align=center class=cell_line_new  > $value44</td>
											<td   align=center  class=cell_line_new > $value45</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value46</td>
									        <td   align=center  class=cell_line_new > $value47</td>
											<td   align=center  class=cell_line_new width=226> $value48</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value49</td>
									        <td   align=center  class=cell_line_new > $value50</td>
											<td   align=center  class=cell_line_new width=226> $value51</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value52</td>
									        <td   align=center  class=cell_line_new > $value53</td>
											<td   align=center  class=cell_line_new width=226> $value54</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value55</td>
									        <td   align=center  class=cell_line_new > $value56</td>
											<td   align=center  class=cell_line_new width=226> $value57</td>
								          </tr>
										  
										  <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value58</td>
									        <td   align=center  class=cell_line_new > $value59</td>
											<td   align=center  class=cell_line_new width=226> $value60</td>
								          </tr>
										 
										 <tr >
									        <td class=cell_line_new ><font color=red> </font></td>
									        <td   align=center  class=cell_line_new > $value61</td>
									        <td   align=center  class=cell_line_new > $value62</td>
											<td   align=center  class=cell_line_new width=226> $value63</td>
								          </tr>
									      </table>
									      <table width=759  border=0 align=center class=cell_line_new>
									        <tr class=content-border>
											<td colspan=4 align=center height=30  style=background-color:#82a9b5;color:#FFFFFF; font-size:17px;text-transform:uppercase;font-family: 'Open Sans', sans-serif; padding-top:10px;font-weight:bold>
						                    renseignement sur l'organisme
						  					</td>
											</tr>
									        <tr>
									          <td width=116 height=24 >Adresse mail (*) :								                </td>
									          <td width=240 >$email</td>
									          <td width=81 >Pays:</td>
									          <td width=294 >$pays</td>
								            </tr>
									        <tr>
									          <td height=26>Fax :</td>
									          <td height=26> $fax</td>
									          <td height=26>Ville :</td>
									          <td height=26>$ville</td>
								            </tr>
									        <tr>
									          <td height=33>Raison social :								              </td>
									          <td height=33> $societe</td>
									          <td height=33> T&eacute;l&eacute;phone :									            </td>
									          <td height=33> $tel</td>
								            </tr>
									        <tr>
									          <td height=33>Adresse:								              </td>
									          <td height=33 colspan=3> $adresse</td>
								            </tr>
								          </table>
									      <table width=759  border=0 align=center class=cell_line_new>
									        <tr class=content-border>
						                     <td colspan=4 align=center height=30  style=background-color:#82a9b5;color:#FFFFFF; font-size:17px;text-transform:uppercase;font-family: 'Open Sans', sans-serif; padding-top:10px;font-weight:bold>
						                      Personne engageant l'organisme
						                    </td>
						                  </tr>
									        <tr>
									          <td width=216 height=26 >Nom :</td>
									          <td width=523 > $nom</td>
								            </tr>
									        <tr>
									          <td height=33>Pr&eacute;nom :</td>
									          <td height=33> $prenom</td>
								            </tr>
									        <tr>
									          <td height=33>TITRE</td>
									          <td height=33> $fonction</td>
								            </tr>
								          </table>
									      <table width=759  border=0 align=center class=cell_line_new>
									        <tr class=content-border>
						               <td colspan=4 align=center height=30 style=background-color:#82a9b5;color:#FFFFFF; font-size:17px;text-transform:uppercase;font-family: 'Open Sans', sans-serif; padding-top:10px;font-weight:bold>
						              D&eacute;tail de la formation
						                 </td>
						                     </tr>
						
									        <tr>
									          <td width=213 height=24 ><label for=checkbox7>Rubrique</label></td>
									          <td width=522 >$theme</td>
								            </tr>
									        <tr>
									          <td height=33>P&eacute;riode</td>
									          <td height=33>$periode </td>
								            </tr>
									        <tr>
									          <td height=33>Participation</td>
									          <td width=522 height=33> $cout &nbsp; $monnaie</td>
								            </tr>
									        <tr>
									          <td height=22>Lieu</td>
									          <td height=22>$lieu</td>
								            </tr>
								          </table>
									      <table width=759  border=0 align=center class=cell_line_new>
									        <tr class=content-border>
						                      <td colspan=4 align=center height=30  style=background-color:#82a9b5;color:#FFFFFF; font-size:17px;text-transform:uppercase;font-family: 'Open Sans', sans-serif; padding-top:10px;font-weight:bold>
						                          Modalit&eacute;s de paiement
						                        </td>
						                      </tr>
									        <tr>
									          <td height=24 > $choix
								                  <label for=checkbox></label></td>
								            </tr>
							            </table></td>
									  </tr>
									  </table>
								  </div>
								</td>
							</tr>
						</table>
					</td>
					<td width=49 height=419><h6>&nbsp;</h6></td>
				</tr>
			</table> ";
			


			}
 }
 
 }
$message= str_replace ("\\","",$message);

include("mail_sender.php");						
  // instanciation de la classe 
$mail = new mime_mail(); 
$mail->to = $to;  
$mail->subject = $subject;  
$mail->body = $message;  
$mail->from =$from;  
 // envoi du message 
$mail->send(); 
$mail->to=$to;
//fin


include("mail_sender1.php");						
  // instanciation de la classe 
$mail1 = new mime_mail1(); 
$mail1->to = $to1;  
$mail1->subject = $subject;  
$mail1->body = $message;  
$mail1->from =$from1;  
 // envoi du message 
$mail1->send1(); 
$mail1->to=$to1;
//fin

  }
  
  
 ?>
 
 </body>
 </html>