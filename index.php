<?php
include "header.php";


/* Izaberi kurs */
	include "classes/okursu.class.php";
	$kurs= new UpoznavanjeSaKursom();
	$kurs->izaberiKurs();	
/* kraj Izaberi kurs */


/* Instruktor */
	include "classes/instruktor.class.php";
	$ins= new Instructor();
	$ins->oInstruktoru();
/* kraj Instruktor */

	
/* Opis */
	$kurs->opis();
/* kraj Opis */


/* Za koga je kurs */
	$kurs->zaKogaJe();
/* kraj Za koga je kurs */
	

/* Detalji Lightbox */
	$kurs->detaljiLightbox();
/* kraj Detalji lightbox */
	

/* Video */
	$kurs->videoUvod();
/* kraj video */

	
/* Kartice */
	$kurs->kartice();
/* kraj Kartice */


/* Šta kažu o kursu */
	$sldr->staKazu();
/* kraj Šta kažu o kursu */


/* Kontakt */
	include "classes/kontakt.class.php";
	$kntkt= new Kontakt();
	
	error_reporting(E_ALL);
ini_set('display_errors', 1);

	$kntkt->prikazForme();
/* kraj Kontakt */


include "footer.php";