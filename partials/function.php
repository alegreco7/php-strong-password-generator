<?php
    // Funzione per generare una password casuale di lunghezza specificata
    function pswGen($pswLen) {
        // Definisci tutti i caratteri possibili che possono essere utilizzati nella password
        $allCar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-_+<>[]{}';

        // Mescola i caratteri in modo casuale per rendere la password più sicura
        $shfl = str_shuffle($allCar);

        // Restituisci una sottostringa della lunghezza desiderata dalla stringa mescolata
        return substr($shfl, 0, $pswLen);    
    }
?>
