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
        <div class="container_12" >
          <div class="grid_12">
            <div class="wrap pad-3">
               
                <div class="block-6" align="left">
                    <h3 class="p6" id="att" align="left" >LISTE DES FORMATIONS PROPOSEES </h3>
             
					<br>
					 <p class="p6" align="justify" style="width:700px">Pour les formations en Côte d'Ivoire, les participants bénéficieront d'un ordinateur portable chacun et visiteront des sites touristiques de Côte d'Ivoire tels que la Basilique Notre Dame de la Paix de Yamoussoukro, le Parc d'Abokouamékro, les belles plages d'Assinie et Grand-Bassam, et bien d'autres sites célèbres.</p>
                    <form>
							<label>Année:&nbsp;&nbsp;</label><br><select name="annee" id="annee" onchange='go()'  class="ui-widget-content ui-corner-all">
							<option selected="selected" value="-1">Choississez l'année:</option>
							  <?php
							   $annee=Date("Y");
							  	  for ($i=0; $i<=3 ; $i++)
							        {
									$date_deconnect=$annee + $i;
									?>
									<option value="<?php echo $date_deconnect; ?>"><?php echo $date_deconnect; ?></option>
									<?php
									}
							  ?>
							</select>
						</p>	
							<div id='paysok1'>
							<label>Formation:&nbsp;&nbsp;</label><br>
							<select name="rubrique" id="rubrique" onchange='go()' class="ui-widget-content ui-corner-all">
							<option selected="selected" value="-31" style="height:20px;">Choississez une rubrique:</option>
								<?php
									include("dbconnect.php");
									mysql_query("SET NAMES UTF8");
									
									$res = mysql_query("SELECT * FROM `formation` WHERE 1");
									while($row = mysql_fetch_assoc($res))
									{
										?>
											<option value="<?php echo $row['ID_FORMATION']; ?>"><?php echo $row["FORMATION"]; ?></option>
										<?php

									}
								?>
							</select>
							</div>
							</form>
                            <br>
						<div id="paysok" align="center"><b></b></div>
                </div>0
            </div>
          </div>
          <div class="clear"></div>
        </div>
        
   
<!--==============================footer=================================-->
     <footer> 
       <div align="center" >             
		<p>Copyright © 2011 PM-Projects. Tous droits réservés.</p>
       </div>  
    </footer> 
		 </section> 
  </div><ul id="navigationbas"><li class="finfo"><a href="#"  title="Plaquette de la société">T&eacute;l&eacute;chargez la plaquette 2015</a></li></ul>
  	  
</body>
</html>