<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */

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
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_1.jpeg'],

            ['proprietario' => '2', 'titolo_annuncio' => 'Posto letto a Milano in zona Navigli','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Posto_letto_2.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Trilocale a Venezia in via Michelangelo','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/default.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Trilocale a Roma in via G. Vico','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 550, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_2.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Spazioso appartamento ad Ancona zona Tavernelle','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_3.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Bilocale a Bologna','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 750, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_4.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Posto letto a Venezia in via D.Alighieri','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Posto_letto_3.jpg'],
            
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Posto letto a Napoli in via G.Leopardi','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Posto_letto_1.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Posto letto a Roma nei pressi della facoltà di Medicina','tipologia' => 'posto letto', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/default.jpg']
                
        ]);
        
        /*DB::table('messages')->insert([
            ['id' => 1, 'mittente' => 1,
                'destinatario' => 4, 'letto' => true,
                'testo' => 'salve, vorrei chiederle sÃ¨ possibile trattare sul prezzo dellâ€™alloggio', 'data' => curdate(''), 'ora' => curtime('')],
            ['id' => 1, 'mittente' => 4,
                'destinatario' => 2, 'letto' => true,
                'testo' => 'Buongiorno, per lâ€™alloggio in questione non penso che il prezzo possa essere trattabile, dato che la sua posizione la rende parcchio richiesta.'
                , 'data' => curdate(''), 'ora' => curtime('')],
            ['id' => 3, 'mittente' => 1,
                'destinatario' => 4, 'letto' => true,
                'testo' =>'capisco, possiamo chiederle se la data di scadenza possa essere anticipata di un mese', 'data' => curdate(''), 'ora' => curtime('')],
            ['id' => 4, 'mittente' => 4,
                'destinatario' => 1, 'letto' => true,
                'testo' => 'certo, non ci sarebbero problemi,basta che lâ€™alloggio sia completamente libero per quella data', 'data' => curdate(''), 'ora' => curtime('')],
        ]);
        
        DB::table('faqs')->insert([
            ['domanda'=>'Come ci si registra al sito?','risposta'=>'Per la registrazione al sito, bisogna premere sul pulsante registrati,che si trova nella home'
                . ' e anche nella parte superiore della pagina. Per completare la tua registrazione il sito avrà  bisogno di alcuni tuoi dati; inoltre, dovrai specificare '
                . 'se vuoi registrarti come locatore o locatario'],
            ['domanda'=>'Che servizi offre il sito?','risposta'=>'Il sito permette di offrire i tuoi alloggi e ricevere porposte dâ€™affitto, questo come locatore. Come potenziale locatario il sito ti mostra un catalogo con tutte le offerte disponibili, inoltre una volta scelto un alloggio, ti permette di fare una proposta al locatore o  di messaggiarci direttamente.'],
            ['domanda'=>'Cosa si intende per locatore?','risposta'=>'Nel sito per locatore si intente, coloro che hanno a disposizione uno o piu alloggi e vogliono affitarlo per un periodo di tempo.'],
            ['domanda'=>'Cosa si intende per potenziale locatario','risposta'=>'Nel sito un potenziale locatario Ã¨ colui che Ã¨ alla ricerca di un alloggio,che puoâ€™ essere un posto letto o un appartamento.Inoltre ha la possibilitaâ€™ di fare un proposta e fare un contratto attrverso il sito.'],
            ['domanda'=>'Che cos\'è il catalogo','risposta'=>'Il catalogo è una pagina dedicata nel sito, dove sono presenti le varie offerte a disposizione.Un potenziale locatario ha a disposizione dei filtri che facilitano la loro ricerca.'],
            ['domanda'=>'Come si invia una proposta?','risposta'=>'Una volta che un potenziale locatario avrÃ  trovato un alloggio che soddisfa le proprie esigenze.Potraâ€™ inviare direttamente la sua prosposta al locatore attraverso il sito, premento il pulsante â€™invia una propostaâ€™ nella finestra dedicata dellâ€™alloggio'],

        ]);
        
        DB::table('contracts')->insert([
            ['alloggio'=>1,'locatore'=>2,'locatario'=>1,'data'=>curdate('')]
         
        ]);
         * 
         */
        
        DB::table('services')->insert([
            ['descrizione'=>'fibra ottica'],
            ['descrizione'=>'posto auto riservato'],
            ['descrizione'=>'lavatrice'],
            ['descrizione'=>'aria condizionata'],
            ['descrizione'=>'impianto di allarme'],
            ['descrizione'=>'porta blindata'],
        ]);
        
        DB::table('included_services')->insert([
            ['servizio'=>1,'alloggio'=>1],
            ['servizio'=>2,'alloggio'=>1],
            ['servizio'=>3,'alloggio'=>1],
            ['servizio'=>4,'alloggio'=>1],
            ['servizio'=>4,'alloggio'=>2],
            ['servizio'=>6,'alloggio'=>2],
            ['servizio'=>2,'alloggio'=>3],
            ['servizio'=>3,'alloggio'=>3],
            ['servizio'=>4,'alloggio'=>3],
            ['servizio'=>5,'alloggio'=>3],
            ['servizio'=>6,'alloggio'=>3],
            ['servizio'=>1,'alloggio'=>4],
            ['servizio'=>2,'alloggio'=>5],
            ['servizio'=>3,'alloggio'=>5],
            ['servizio'=>6,'alloggio'=>5],
            ['servizio'=>1,'alloggio'=>6],
            ['servizio'=>3,'alloggio'=>6],
            ['servizio'=>2,'alloggio'=>7],
            ['servizio'=>5,'alloggio'=>7],
            ['servizio'=>2,'alloggio'=>9],
            ['servizio'=>4,'alloggio'=>9],
            ['servizio'=>5,'alloggio'=>9]
        ]);
        
        /*DB::table('proposals')->insert([
            ['mittente'=>4,'alloggio'=>1,'stato'=>'libero','testo'=>'Richiedo la prioritÃ  dellâ€™appartamento in locazione Roma(Ro),Via Giordano Bruno 13  con il canone di affitto 800 euro/mese e disponibile dal 01-09-2022 al 01-08-2023', 
            'data'=>curdate(''),'ora'=>curtime('')]
         * 
         */

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

