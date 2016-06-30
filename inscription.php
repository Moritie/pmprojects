<!DOCTYPE html>
<html lang="en">
<head>
    <title>Présentation de PM Projects</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="css/slide.css"  media="screen" />
    <link rel="stylesheet" href="themes/ui-lightness/jquery.ui.all.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
     <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
	<link href="css/base.css" rel="stylesheet" type="text/css" />
    
    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <script src="js/bgMax.min.js" type="text/javascript"></script> 
	<script src="js/slide.js" type="text/javascript"></script>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.x.js"></script>
    
     <script>
	 function VerifMail()
	{
	a = document.main.email.value;
	valide1 = false;
	
	for(var j=1;j<(a.length);j++){
		if(a.charAt(j)=='@'){
			if(j<(a.length-4)){
				for(var k=j;k<(a.length-2);k++){
					if(a.charAt(k)=='.') valide1=true;
				}
			}
		}
	}
	if(valide1==false) 
	{
	document.getElementById('email').value="";
	alert("Veuillez saisir une adresse email valide.");
	}
	
	}

	 
	 
	 function telephone()
{
var chkZ = 1;
for(i=0;i<document.main.tel.value.length;++i)
if(document.main.tel.value.charAt(i) < "0"
|| document.main.tel.value.charAt(i) > "9")
chkZ = -1;
if(chkZ == -1) {
document.getElementById('tel').value="";
document.main.tel.focus();
} 
}
	 </script>
    
    <script type="text/javascript">   
     var xhr = null; 
	 
	 function getXhr(){
				if(window.XMLHttpRequest) // Firefox et autres
				   xhr = new XMLHttpRequest(); 
				else if(window.ActiveXObject){ // Internet Explorer 
				   try {
			                xhr = new ActiveXObject("Msxml2.XMLHTTP");
			            } catch (e) {
			                xhr = new ActiveXObject("Microsoft.XMLHTTP");
			            }
				}
				else { // XMLHttpRequest non supporté par le navigateur 
				   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
				   xhr = false; 
				} 
			}

     function go(){
				getXhr();
				// On défini ce qu'on va faire quand on aura la réponse
				xhr.onreadystatechange = function(){
					// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
					if(xhr.readyState == 4 && xhr.status == 200){
						leselect = xhr.responseText;
						// On se sert de innerHTML pour rajouter les options a la liste
						document.getElementById('paysok').innerHTML = leselect;
					}
				}
 
				// Ici on va voir comment faire du post
				xhr.open("POST","getuser.php",true);
				// ne pas oublier ça pour le post
				xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
				// ne pas oublier de poster les arguments
				// ici, l'id du continent
				var sel = document.getElementById('rubrique');
				var idcontinent = sel.options[sel.selectedIndex].value;
				
				var sel1 = document.getElementById('annee');
				var idcontinent1 = sel1.options[sel1.selectedIndex].value;
				xhr.send("idContinent="+ idcontinent +"&idContinent1="+idcontinent1);
			}
	

			</script>
       
       <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:false,
				nextBu:false,
				playBu:false,
				duration:1000,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:true,
				banners:'fromRight',
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
		<script type="text/javascript">
           $(function() {
                $('#navigationbas a').stop().animate({'marginTop':'15px'},1000);

                $('#navigationbas > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginTop':'-2px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginTop':'15px'},200);
                    }
                );
            });
   </script>
    
    <script type="text/javascript">
	
 function saisir_nbre ()
	{ 
	   nbre=document.getElementById("nombre").value;
	   document.getElementById('paysok').innerHTML = '';

	   var cout = <?php echo json_encode($_GET['id3']) ?>;
	   
	   document.getElementById('couts').innerHTML= cout * nbre;

	   for(i=1;i<=nbre;i++)
   {
   

  document.getElementById('paysok').innerHTML +="<table width='550'>"+ "<tr>"+"<td width='50' height='30' style=' padding-top:20px;'>"+ // Donne un id au champ en fonction de la variable i
		i+ "</td>" +"<td width='150' height='30' style=' padding-top:20px;' >" +"<input  name='champ_"+i+"' type='text' class='bordure'/>"+ "</td>"+"<td width='150' style=' padding-top:20px;'>"+  // le champ qui va être envoyé (le champ a pour nom : champ_"variable_i")
		"<input type='text' name='champs_"+i+"' class='bordure'>"+ "</td>"+ "<td width='150' height='30' style=' padding-top:20px;'>"+ "<input type='text'  onchange='telephone()' name='camq_"+i+"' class='bordure'>"+ "</td>"+// champ caché pour envoyer le nombre de champs créés (variable i)
	     "</tr>"+ // Bouton pour supprimer un champ
		"</table>" +"</form>";
	
   }

   document.main.valider.disabled=true;
   document.main.email.disabled=false;
   document.main.fax.disabled=false;
   document.main.pays.disabled=false;
   document.main.ville.disabled=false;
   document.main.societe.disabled=false;
   document.main.adresse.disabled=false;
   document.main.tel.disabled=false;
   document.main.nom.disabled=false;
   document.main.prenom.disabled=false;
   document.main.titre.disabled=false;

   //document.getElementById('paysok').innerHTML +="<input type='submit' name='envoyer' id='envoyer'  value='Enregistrer' />";
   //document.getElementById('paysok').innerHTML = '</div>'; 
 
}


function supprime ()
{
nbre=document.getElementById("nombre").value;
   
   for(i=1;i<=nbre;i++)
   {
   document.getElementById('paysok').innerHTML = '';
   }
   document.main.valider.disabled=false;
   document.main.email.disabled=true;
   document.main.fax.disabled=true;
   document.main.pays.disabled=true;
   document.main.ville.disabled=true;
   document.main.societe.disabled=true;
   document.main.adresse.disabled=true;
   document.main.tel.disabled=true;
   document.main.nom.disabled=true;
   document.main.prenom.disabled=true;
   document.main.titre.disabled=true;
document.getElementById('paysok').innerHTML = 'Veuillez Entrer le nombre de participant';

}

</script>

    

    
</head>
<body>

<!-- bouton de connexion admin -->
  <div id="toppanel"> 
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
            <div id="message" for="status"></div>
             <div id="connexion_membre">
                 <form class="clearfix"  onSubmit="return false" method="post">
					<span>Connexion</span>
					<label class="grey" for="log">Login:</label>
					<input class="field" type="text" name="email_membre" id="email_membre" value="" size="23" />
					<label class="grey" for="pwd">Mot de passe :</label>
					<input class="field" type="password" name="passe_membre" id="passe_membre" size="23" />	            	
        			<div class="clear"></div>
					<input type="submit" name="submit" value="Connecter" onClick="handle_login();" class="bt_register" />
				</form>
               </div>                				
			</div>
			<div class="left">
                <div id="load_oublie" style="color:#FFF; display:none;">Patienter pendant la verification...</div>
                <div id="mot_de_passe_oublie">
				<form action="#" method="post">
					<span>Vous avez perdu le mot de passe?</span>				
					<label class="grey" for="email">Votre Email:</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<input type="submit" name="submit" value="Envoyer" onClick="handle_login8();" class="bt_register" />
				</form>
                </div>
			</div>
			<div id="message1" for="status1"></div>
			<div class="left right">
				<form action="#" method="post">
					<br />
                    <br />
                   
                    <br />                  
       				 <div id="fermer"><a href="javascript:close_div();">Fermer</a></div>					
				</form>
			</div>
		</div>
</div> 
<div id="contenaire-entete" style="background:url(images/banniere.jpg)">
<div id="menu-haut">
    <ul id="menu-droit" style="color:#333333; padding-left:62%;">
    <li ><a href="#" title="" onClick="javascript:open_div();" style="color:#FFFFFF; font-family:Aller" >Connexion</a></li>
    </ul>
</div>
</div>
<!----------------------------------------------------->
  <div class="main">
  <!--==============================header=================================-->
    <header>
          
        <h1 style="padding-right:350px"><a href="index.html"><img src="images/logo_pm_projects.png" alt="" width="300" height=""></a></h1>
        <div class="form-search">
          <form action="http://miia2013.com/recherche.html" id="form-search">
            <input type="hidden" name="cx" value="partner-pub-7251150894597704:nz8345-k1u9" /> 
            <input type="hidden" name="cof" value="FORID:9" /> <input type="hidden" name="ie" value="ISO-8859-1" /> 
            <input name="sitesearch" value="www.miia2013.com" type="hidden">
            <input name="q" type="text" value="Recherche..." onBlur="if(this.value=='') this.value='Recherche...'" 
            onFocus="if(this.value =='Recherche...' ) this.value=''"  />
            <!--<input type="submit" name="sa" class="search_button"/>-->
            <a href="#" onClick="document.getElementById('form-search').submit()" class="search_button"></a>
            <script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=fr"></script> 
          </form>
        </div>   
		
        <div class="clear"></div><br>
           <nav class="box-shadow">
               <div align="left">
                <ul class="menu">
                    <li class="home-page"><a href="index.html"><span></span></a></li>
                    <li><a href="#">A Propos</a>
					<ul>
					<li><a href="presentation.html#att">PM Project pourquoi ?</a></li>
					<li><a href="v_fondam.html#att">Valeurs fondamentales</a></li>
					<li><a href="approche.html#att">Approches méthodologie</a></li>
					<li><a href="activites.html#att">Activités</a></li>
					<li><a href="docs/organigramme.pdf">Organigramme</a></li>
					<li><a href="docs/PRESENTATION new.pdf">Document complet</a></li>
					</ul>
					</li>
                    <li><a href="#">Services</a>
					<ul>
					<li><a href="services01.html#att">Assistance en passation de marché</a></li>
					<li><a href="services02.html#att">Assistance en gestion comptable et financière</a></li>
					<li><a href="services03.html#att">Elaboration manuels des procédures</a></li>
                    <li><a href="presentation.html">Evaluation des projets</a></li>
					<li><a href="#">Développement des logiciels spécifiques</a></li>
					<li><a href="services06.html#att">Mise en place réseaux informatique</a></li>
					<li><a href="#">Elaboration de plans</a></li>
					<li><a href="#">Mobilisation des ressources pour les projets</a></li>
					<li><a href="#">Etude d'impact environnemental</a></li>
					</ul>
					</li>
                    <li class="current"><a href="formation.php#att">Formation</a>
					<ul>
					
					</ul>
					</li>
                   
                    
                    <li><a href="#">Partenaires</a>
					<ul>
					
					</ul>
					</li>
					<li><a href="annonces.html">Annonces</a>
					<ul>
					</ul>
					</li>
                   	<li><a href="contacts.html#att">Contacts</a></li>
                </ul>
                <div class="social-icons">
                    <a href="#" class="icon-3"></a>
                    <a href="https://www.facebook.com/MBClearProject/" target="_blank" class="icon-2"></a>
                    <a href="https://twitter.com/MBClearProject" target="_blank" class="icon-1"></a>
                </div>
                <div class="clear"></div>
            </div>
        </nav>
    </header>   
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div id="slide" class="box-shadow">		
            <div class="slider">
                <ul class="items">
                   <li><img src="images/slider-1.jpg" alt="" /><div class="banner">Conception et administration de site web</div></li>
				   <li><img src="images/slider-2.jpg" alt="" /><div class="banner">Conception, installation et maintenance de système d'information</div></li>
                    <li><img src="images/slider-5.jpg" alt="" /><div class="banner">Recherche de financement pour les projets</div></li>
					<li><img src="images/slider-3.jpg" alt="" /><div class="banner">Etude, assistance et suivi des projets</div></li>
					<li><img src="images/slider-4.jpg" alt="" /><div class="banner"><a class="hrf" href="../Clearproject/index.html">ClearProject, Atelier de Gestion de Projets</a></div></li>
                </ul>
            </div>	
        </div>
        <div class="container_12">
          <div class="grid_12">
            <div class="wrap pad-3" >
               
                <div class="block-8" align="center">
                    <h3 class="p6" id="att" align="left">LISTE DES FORMATIONS PROPOSEES </h3>
             
					<br>
					 <?php

						include("dbconnect.php");
						
						mysql_query("SET NAMES UTF8");
						$result = mysql_query("SELECT * FROM programmes where ID_FORMATION='".$_GET['id']."' 
						and ANNEE='".$_GET['id1']."' and LIEU='".$_GET['id2']."'");
						
						$raw = mysql_fetch_array($result);
						
						mysql_query("SET NAMES UTF8");
						$result1 = mysql_query("SELECT * FROM formation where ID_FORMATION='".$raw[1]."'");
						mysql_query("SET NAMES UTF8");
						$raw1 = mysql_fetch_array($result1);
						
						$_SESSION['formation']=$raw1[1];
						$_SESSION['rubrique']=$raw[2];
						$_SESSION['lieu']=$raw[5];
						$_SESSION['date']=$raw[3];
						$_SESSION['cout']=$raw[6];
						$_SESSION['monnaie']=$raw[7];
						?>
						<form method="post" name="main" id="main" action="inscription.php" style="margin:0 auto;">
						<table width="270" style="color:#666666; font-weight:bold">
						<tr>
						<td>
						<label>Nombre de participants</label>
						</td>
						</tr>
						<tr>
						<td>
						<input name="nombre" id="nombre" type="text" class="bordure"/>
						</td>
						<td width="100" style="padding-bottom:3px;">
						<input name="initailiser" type="button"  title="initialiser" value="effacer" onClick="supprime()" class="go2"  />
						</td>
						</tr>
						<tr>
							<td>
							
							<button name="valider" id="valider" type="submit" value="valider" onClick="saisir_nbre()" class="btn btn-primary btn-sm">Valider</button>
							</td>
							</tr>
						</table>
						
                        <br>
						<br>
						<table width="620" class="content-border" style="color:#666666; font-weight:bold">
						<tr class="content-border">
						<td height="60" class="theme color-3" style="padding-left:10px; font-size:24px; padding-top:15px" >
						Theme:
						</td>
						<td colspan="3" class="theme color-3" style=" font-size:24px; padding-top:15px">
						<?php echo $raw[2]; ?>
						</td>
						</tr>
						
						<tr class="content-border">
						<td colspan="4" align="center" height="30" class="titre">
						Renseigement sur les participants
						</td>
						</tr>
						
						<tr class="content-border">
						<td width="50">
						
						</td>
						<td width="150" height="40">
						Nom*
						</td>
						<td width="150" height="40">
						Fonction*
						</td>
						<td width="150" height="40">
						
						N° Tel (Privé)*
						</td>
						
						</tr>
						
						<tr>
						<td colspan="4">
						<div id="paysok" align="center">
						<b style="color:#FF0033; font-size:16px; font-weight:bold; font-family: 'Open Sans', sans-serif; text-transform:uppercase;">Veuillez Entrer le nombre de participants</b>
						</div>
						</td>
						</tr>
						
						<tr class="content-border">
						<td colspan="4" align="center" height="30"  class="titre">
						renseignement sur l'organisme
						</td>
						</tr>
						
						<tr>
						<td height="40" style="padding-left:10px; padding-top:20px;">
						Email*:
						</td>
						<td  style=" padding-top:20px;">
						 <input name="email" id="email" onChange="VerifMail()" type="text" disabled="disabled" class="bordure">
						</td>
						<td height="40" style=" padding-top:20px;">
						Pays*:
						</td>
						<td style=" padding-top:20px; padding-right:28px;">
						<input name="pays" id="pays" type="text" disabled="disabled" class="bordure">
						</td>
						</tr>
						
						<tr>
						<td height="40" style="padding-left:10px;">
						Fax:
						</td>
						<td>
						 <input name="fax" id="fax" type="text" disabled="disabled" class="bordure">
						</td>
						<td height="40">
						Ville*:
						</td>
						<td>
						<input name="ville" id="ville" type="text" disabled="disabled" class="bordure">
						</td>
						</tr>
						
						<tr>
						<td height="40" style="padding-left:10px;">
						Société*:
						</td>
						<td>
						 <input name="societe" id="societe" type="text" disabled="disabled" class="bordure">
						</td>
						<td height="40">
						Téléphone*:
						</td>
						<td>
						<input name="tel" id="tel" type="text" disabled="disabled" class="bordure">
						</td>
						</tr>
						
						<tr>
						<td height="40" style="padding-left:10px;">
						Adresse*:
						</td>
						<td>
						 <input name="adresse" type="text" disabled="disabled" class="bordure">
						</td>
						</tr>
						
						<tr class="content-border">
						<td colspan="4" align="center" height="30"  class="titre">
						Personne engageant l'organisme
						</td>
						</tr>
						
						<tr>
						<td height="40" style="padding-left:10px; padding-top:20px;">
						Nom:
						</td>
						<td style="padding-top:20px;">
						 <input name="nom" type="text" disabled="disabled" class="bordure">
						</td>
						</tr>
						
						<tr>
						<td height="40" style="padding-left:10px;">
						Prénom:
						</td>
						<td>
						 <input name="prenom" type="text" disabled="disabled" class="bordure">
						</td>
						</tr>
						
						<tr>
						<td height="40" style="padding-left:10px;">
						Titre:
						</td>
						<td>
						 <input name="titre" type="text" disabled="disabled" class="bordure">
						</td>
						</tr>
						
						
						<tr class="content-border">
						<td colspan="4" align="center" height="30"  class="titre">
						Détail de la formation
						</td>
						</tr>
						
						<tr>
						<td  align="center" height="50" style="padding-left:10px; padding-top:20px;">
						Rubrique:
						</td>
						<td  colspan="3" style="padding-top:20px; font-weight:100">
						<?php echo $raw1[1];?>
						</td>
						</tr>
						
						<tr>
						<td  align="center" height="50" style="padding-left:10px; ">
						Thème:
						</td>
						<td colspan="3" style="font-weight:100 ">
						<?php echo $raw[2];?>
						</td>
						</tr>
						
						<tr>
						<td  align="center" height="50" style="padding-left:10px;">
						Période:
						</td>
						<td style="font-weight:100 ">
						<?php echo $raw[3]?>
						</td>
						</tr>
						
						<tr>
						<td  align="center" height="50" style="padding-left:10px;">
						Coût:
						</td>
						<td style="font-weight:100 ">
							<label id="couts"></label><label><?php echo' '.$_GET['id4']; ?></label>
						</td>
						</tr>
						
						<tr>
						<td  align="center" height="40" style="padding-left:10px;">
						Lieu:
						</td>
						<td style="font-weight:100 ">
						<?php echo $raw[5];?>
						</td>
						</tr>
						
						<tr class="content-border">
						<td colspan="4" align="center" height="30"  class="titre">
						Modalités de paiement
						</td>
						</tr>
						
						<tr>
						<td  align="left" height="40" style="padding-left:10px; padding-top:20px;">
						<input name="radio" type="radio" value="especes">
						</td>
						<td colspan="3" style="padding-top:20px;">
						en espèces le 1er jour au cours de la formation
						</td>
						</tr>
						
						<tr>
						<td  align="left" height="40" style="padding-left:10px;">
						<input name="radio" type="radio" value="bancaire: Ecobank">
						</td>
						<td colspan="3">
						par virement bancaire au compte de Ecobank Burkina
						</td>
						</tr>
						
						<tr class="content-border">
						<td  align="right" height="40" colspan="2" style="padding-left:10px; padding-top:20px;">
						<button name="annuler" value="Annuler" onClick="location.href='formation.php'" type="button">Annuler</button>
						</td>
                        
						<td style="padding-top:20px; padding-left:10px;" >
						<button name="envoyer" id="envoyer" type="submit" value="Envoyer" >Envoyer</button>
                        </td>
                        </tr>
						<tr>
						<td colspan="4" align="center">
						<div style="color:#FF0000">Les champs suivis de * sont obligatoires</div>
						</td>
						</tr>
						
						</table>
						</form>
						
                            <br>
                            
						<div id="paysok" align="center"><?php include("insert.php"); ?></div>

						
                </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        
   
<!--==============================footer=================================-->
   <footer  style="background:#000000; height:1px"> 
       <div align="center">             
		<p>Copyright © 2011 PM-Projects. Tous droits réservés.</p>
       </div>  
    </footer> 	  
		 </section> 
  </div><ul id="navigationbas"><li class="finfo"><a href="#"  title="Plaquette de la société">T&eacute;l&eacute;chargez la plaquette 2015</a></li></ul>   
</body>
</html>