<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prove sulla cifratura dei messaggi.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $messaggio = "Questo è un messaggio segreto!";
        $messaggioCifrato = "4zRcuaACF7zMOIG5Ma51bHloMGFvUVN1a2JVcW82cGlrc2dqK2lhZ1BMMjB4aFV4NUZxUnc5UnhOTUU9";
        $messaggioCifrato2 = "o4Bni3no89OnpOKpUgZ/9HdXV2xwV0N1R0NGU3FYZ1pGR1lsYlltb1NjcWw4RGE5Z2Y3UzRzUXFBQk09";
        $chiave = "UnaChiaveSegreta";

        $messaggioCifrato = $this->decifraMessaggio($messaggioCifrato2, $chiave);

        echo "Messaggio cifrato: " . $messaggioCifrato;

    }
    function cifraMessaggio($messaggio, $chiave) {
        // Imposta l'algoritmo di cifratura
        $algoritmo = 'aes-256-cbc';

        // Genera un vettore di inizializzazione casuale
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($algoritmo));

        // Cifra il messaggio utilizzando la chiave e il vettore di inizializzazione
        $messaggioCifrato = openssl_encrypt($messaggio, $algoritmo, $chiave, 0, $iv);

        // Restituisci il messaggio cifrato e il vettore di inizializzazione
        return base64_encode($iv . $messaggioCifrato);
    }
    function decifraMessaggio($messaggioCifrato, $chiave) {
        // Decodifica il messaggio cifrato
        $messaggioCifrato = base64_decode($messaggioCifrato);

        // Estrae il vettore di inizializzazione dal messaggio cifrato
        $ivLength = openssl_cipher_iv_length('aes-256-cbc');
        $iv = substr($messaggioCifrato, 0, $ivLength);

        // Estrae il messaggio cifrato (senza il vettore di inizializzazione)
        $messaggioCifrato = substr($messaggioCifrato, $ivLength);

        // Decifra il messaggio utilizzando la chiave e il vettore di inizializzazione
        $messaggioOriginale = openssl_decrypt($messaggioCifrato, 'aes-256-cbc', $chiave, 0, $iv);

        // Restituisci il messaggio decifrato
        return $messaggioOriginale;
    }

}
