
<?php

						include("dbconnect.php");
						if(isset($_REQUEST["idContinent"]) and isset($_REQUEST["idContinent1"]))
						{
						
						
						mysql_query("SET NAMES UTF8");
						
						$result1 = mysql_query("SELECT * FROM formation where ID_FORMATION ='".$_REQUEST["idContinent"]."'");
						$row = mysql_fetch_array($result1);
						
						
						
						echo"<table width='880' class='ui-widget-content ui-corner-all' style='font-size:17px; font-family: 'Open Sans', sans-serif; font-weight:600px; color:#e87f2c; padding-top:10px;'>";
					
					    echo"<tr>";
						
						echo"<td style='color:#e87f2c; height:30px; padding-top:10px;' >";
						echo $row[1];
						echo'</td>';
						
						echo"<td style='color:#e87f2c; height:30px; padding-top:10px;'>";
						echo $row[2];
						echo'</td>';
						
						echo"</tr>";
						
						echo'</table>';
						
						echo"<table width='880' border='1' class='ui-widget-content ui-corner-all'>";
						echo"<tr>";

						echo"<td width='260' class='color-1'>";
						echo 'Formation';
						echo'</td>';
						
						echo"<td width='110' class='color-1'>";
						echo '&nbsp;&nbsp;&nbsp;&nbsp;'.'Dur&eacute;e (j)';
						echo'</td>';
						
						echo"<td width='150' class='color-1'>";
						echo 'Lieu';
						echo'</td>';
						
						echo"<td width='140' class='color-1'>";
						echo 'Montant';
						echo'</td>';
						
						echo"<td width='100' class='color-1'>";
						echo 'Date';
						echo'</td>';
						
						echo"<td width='80' class='color-1'>";
						echo "Inscription";
						echo'</td>';
						
						echo'</tr>';
						
						echo'</table>';
						
						mysql_query("SET NAMES UTF8");
                         $result = mysql_query("SELECT * FROM programmes where ANNEE='".$_REQUEST["idContinent1"]."' AND ID_FORMATION='".  $_REQUEST["idContinent"]."'");
						 
						while($raw = mysql_fetch_array($result)){
						
						echo"<table width='880' border='1' class='ui-widget-content ui-corner-all'>";
						echo"<tr>";
						
						echo"<td width='40' class='color-1'>";
						echo $raw[1];
						echo'</td>';
						
						echo"<td width='260' height='70'>";
						echo $raw[2];
						echo'</td>';
						
						echo"<td width='110'>";
						echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$raw[4];
						echo'</td>';
						
						echo"<td width='150'>";
						echo $raw[5];
						echo'</td>';
						
						echo"<td width='120'>";
						echo $raw[6].'  '.$raw[7];
						echo'</td>';
						
						echo"<td width='120'>";
						echo $raw[3];
						echo'</td>';
						
						echo"<td width='80'>";
						?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a name="place" id="place" href="inscription.php?id=<?php echo $raw[1]; ?>&id1=<?php echo $raw[8]; ?>&id2=<?php echo $raw[5]; ?>&id3=<?php echo $raw[6]; ?>&id4=<?php echo $raw[7]; ?>#form" ><img src="images/stylo.png"/></a>
						<?php
						echo'</td>';
						
						echo'</tr>';
						echo'</table>';
						}
						}
						?>