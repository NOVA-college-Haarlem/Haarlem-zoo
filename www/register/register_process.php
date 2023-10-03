<?php
/*
 * Stap 1: Controleer of de gebruiker al bestaat in de database
 * Als dit zo is, stuur dan de gebruiker terug naar de registratiepagina
 * Als dit niet zo is, ga dan door naar stap 2
 */

/* Stap 2: Hier wordt  met behulp van de functie generateConfirmationKey() een confirmation key gegenereerd
* sla deze uiteindelijk ook op in de database bij de gebruiker in de tabel confirmation_keys
*/
include '../helpers.php';
$confirmationKey = generateConfirmationKey(20);

/**
 * Stap 3: De opgegeven gegevens worden opgeslagen in de database
 */


/**
 * Stap 4: De gebruiker krijgt een email met een link om de registratie te bevestigen
 * 
 */
include 'mail.php';


/** 
 * Stap 5: De gebruiker wordt doorgestuurd naar de confirmatiepagina
 */


// Controleer of de key is opgeslagen in de database
// Als dit zo is, stuur dan de gebruiker de confirmatiepagina
// Als dit niet zo is, stuur dan de gebruiker terug naar de registratiepagina
