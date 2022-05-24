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
            ['username' => 'tariotario', 'password' => Hash::make('tariotario'),'role' => 'locatario', 'name' => 'Giorgio', 'surname' => 'Verdi',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'localoca', 'password' => Hash::make('localoca'),'role' => 'locatore', 'name' => 'Mario', 'surname' => 'Rossi',
               'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['username' => 'adminadmin', 'password' => Hash::make('adminadmin'),'role' => 'admin', 'name' => 'Admin', 'surname' => 'Admin',
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
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_1.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Trilocale a Venezia in via Michelangelo','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_3.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Trilocale a Roma in via G. Vico','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 550, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_4.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Spazioso appartamento ad Ancona zona Tavernelle','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 800, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_5.jpg'],
            
            ['proprietario' => '2', 'titolo_annuncio' => 'Bilocale a Bologna','tipologia' => 'appartamento', 'inizio_disponibilita' => date("2022-09-01"), 
               'fine_disponibilita' => date("2023-08-01"), 'data_inserimento' => date("2022-05-23"),
                'descrizione' => 'Proponiamo un tranquillo appartamento composto da soggiorno con '
                . 'cucina all’americana, camera da letto con pratico soppalco praticabile, ingressino e bagno per ca. 52 mq commerciali. L’immobile riporta tutti i caratteri tipici degli '
                . 'alloggi del centro Storico. Alti soffitti travati di quasi quattro metri, ampie finestre, dotate di doppi vetri, per accogliere la luce, pavimentazione originale di fine '
                . '800 dipinta a mano. La proprietà, di recente ristrutturazione, è stata completamente climatizzata ed arredata con gusto ricercato. Il soppalco poi, il cui pavimento '
                . 'è frutto di un’opera di riuso di antichi portali cinesi dismessi, permette di essere sfruttato sia come zona studio che come cameretta per ospiti di passaggio. Nelle '
                . 'spese condominiali sono incluse anche tutte le utenze.', 'canone_affitto' => 750, 'citta' => 'Roma', 'provincia' => 'RO', 'indirizzo' => 'Via Giordano Bruno 26',
                'superficie_tot' => 52, 'posti_tot' => 2, 'n_camere' => 1, 'locale_ricreativo' => false, 'cucina' => true, 'genere_locatario' => 'M', 'eta_min_locatario' => 20,
                'eta_max_locatario' => 25, 'foto' => 'images/accommodations/Appartamento_6.jpg']
                
        ]);
        
    }

}

