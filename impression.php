<?php 
		include("dbconnect.php");

		$reponse = $bdd->query('SELECT * FROM inscription');

		while ($donnees = $reponse->fetch())
		{
		?>
		<p>
		<strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />

		<?php
		}
		$reponse->closeCursor(); // Termine le traitement de la requ�te
include ("librairie_html2pdf");
 
ob_start();
//ICI Tout le contenu que tu veux dans le pdf
$content = str_replace('�', '&agrave;', ob_get_clean()); // On r�cup�re le contenu en transformant les "�" il g�re tous les accents sauf celui la :/
 
//et on cr�� le PDF
try
{
    $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
    $html2pdf->pdf->IncludeJS("print(true);");
    $html2pdf->writeHTML($content);
    $html2pdf->Output();
}
catch(HTML2PDF_exception $e) {
    echo $e;
    exit;
}
?>