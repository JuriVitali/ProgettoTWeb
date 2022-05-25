<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    public function run() {


        DB::table('users')->insert([
            ['username' => 'lariolario', 'password' => Hash::make('lariolario'),'role' => 'locatario', 'name' => 'Giorgio', 'surname' => 'Verdi',
               'genere' => 'M', 'data_nascita' => date("1998-03-02"), 'citta' => 'Ancona', 'provincia' => 'AN', 'indirizzo' => 'Via Giotto 67',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'lorelore', 'password' => Hash::make('lorelore'),'role' => 'locatore', 'name' => 'Mario', 'surname' => 'Rossi',
               'genere' => 'F', 'data_nascita' => date("1978-10-05"), 'citta' => 'Milano', 'provincia' => 'MI', 'indirizzo' => 'Via Bolzano 7',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'adminadmin', 'password' => Hash::make('adminadmin'),'role' => 'admin', 'name' => 'Admin', 'surname' => 'Admin',
                'genere' => 'M', 'data_nascita' => date("1979-10-05"), 'citta' => 'Firenze', 'provincia' => 'FI', 'indirizzo' => 'Via PAscoli 4A',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")]
        ]);
        
        DB::table('accommodations')->insert([
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Bilocale a Roma in via Giordano Bruno','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Trilocale a Venezia in via Michelangelo','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Trilocale a Roma in via G. Vico','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 550, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Spazioso appartamento ad Ancona zona Tavernelle','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Bilocale a Bologna','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 750, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25]
                
        ]);
        
        DB::table('faqs')->insert([
            ['domanda' => 'Come ci si registra al sito?', 'risposta' => 'La registrazione al sito serve per accedere ai principali servizi che offre TrovAffito.
                Per registrarsi basta premere sul bottone Registrati presente sulla home del sito oppure premere il tasto Accedi della barra di navigazione.'],
            ['domanda' => 'Che dati richiede la registrazione?', 'risposta' => 'La registrazione richiede vari campi da inserire: il nome, il cognome, la data di nascita,
                il sesso,la città, la provincia, indirizzo, il nome utente e la password'],
            ['domanda' => 'Che servizi offre il sito?', 'risposta' => 'Il sito offre servizi sia per gli utenti registrati sia per quelli non registrati. Gli utenti
                senza registrazione possono accedere solo alla sezione pubblica del sito che comprende la sezioni:
                chi siamo, faqs, condizioni di uso e il servizio visualizza catalogo. Gli utenti registrati si divido in due classi utente: il locatore e  il potenziale locatario.
                Gli utenti registrati oltre a poter usufruire di tutte le sezioni pubbliche, hanno specifici servizi in base al tipo di utente.
                I locatori modificare il loro profilo utente, inserire/cancellare/modificare di alloggi, visualizzare le richieste ricevute per ciascun alloggio, comunicare con i potenziali locatari 
                che hanno opzionato un’offerta, attraverso un sistema di messaggistica interna al sito,assegnare alloggio a un locatario.
                I potenziali locatari possono modificare il loro profilo utente, ricercare un’alloggio in base alle proprie esigenze,
                opzionare un alloggio, comunicare con i locatori, attraverso il sistema di messaggistica del sito.'],
            ['domanda' => 'Cosa si intende per locatore?', 'risposta' => 'Per locatore si intende la persona che dà in locazione un bene, cioè che affitta un appartamento o un posto letto. '],
            ['domanda' => 'Cosa si intende per potenziale locatario?', 'risposta' => 'Per potenziale locatario si intende la persona che prende in locazione un appartamento o un posto letto.'],
            ['domanda' => 'Che cosa è il catalogo?', 'risposta' => 'Il catalogo è un elenco ordinato di una o più serie di annunci di locazione, con le indicazioni specifiche per ogni inserzione'],
            ['domanda' => 'FAQ#6', 'risposta' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard '],
            ['domanda' => 'FAQ#7', 'risposta' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard '],
            ['domanda' => 'FAQ#8', 'risposta' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard '],
            ['domanda' => 'FAQ#9', 'risposta' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard '],
            ['domanda' => 'FAQ#10', 'risposta' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard '],
            ['domanda' => 'FAQ#11', 'risposta' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard '],
        ]);
        
    }

}

/**
     * id	proprietario	titolo_annuncio	tipologia	inizio_disponibilita	fine_disponibilita	data_inserimento
     * descrizione	canone_affitto	citta	provincia	indirizzo	superficie_tot	posti_letto	n_camere
 * 	locale_ricreativo	cucina	posti_tot	posti_per_stanza	angolo_studio	superficie_camera	genere_locatario	eta_min_locatario	eta_max_locatario
 * 
     * @return void
     */
