#PHP
##Variabili in PHP

Le variabili sono una delle strutture fondamentali della programmazione. Vengono utilizzate per memorizzare dati, come stringhe di testo e numeri.
Come quasi tutti i linguaggi di programmazione anche PHP utilizza le variabili per consentire l'elaborazione dei dati.
Una variabile in PHP è una locazione di memoria temporanea dove sono memorizzate delle informazioni, di conseguenza il ciclo di vita di una variabile dura fino al termine dell'esecuzione del programma.
#Creazione
Una variabile in PHP è costituita da due parti: il nome e il valore.
Come altri linguaggi anche PHP prevede delle regole per la denominazione delle variabili:
* Tutte le variabili iniziano con il simbolo del dollaro $, seguito dal nome della variabile.
* Il nome della variabile deve iniziare con una lettera o un underscore _, i restanti caratteri possono essere lettere, numeri o underscore.
* Il nome della variabile non può cominciare con un numero e non può contenere spazi.
L'esempio seguente mostra nomi di variabili in PHP perfettamente validi:
<?php
$name = 'Flavio';
$age = 36;
$_country = 'Italia';
$car1 = 'Clio';
echo "Mi chiamo $name, vivo in $_country, ho $age anni e guido una $car1";

// Mi chiamo Flavio, vivo in Italia, ho 36 anni e guido una Clio

I nomi di variabili sono case sensitive, quindi $name e $Name sono due variabili distinte e rappresentano due locazioni di memoria differenti.

È consigliabile assegnare alle variabili un nome comprensibile che ne descriva il comportamento all'interno del programma.

Se il nome della variabile è composto da due o più parole (Es. "is checked" oppure "my first name"), per convenzione si utilizza la notazione camelCase, quindi presi i due esempi in parentesi avremo $isChecked e $myFirstName.

Quando si crea una variabile è importante considerare anche il tipo di dato che le si assegna, ovvero il tipo di contenuto della variabile.
Visibilità

La visibilità (o scope) di una variabile indica il contesto in cui essa è accessibile all'interno di un programma.

In PHP la maggior parte delle variabili ha uno scope globale, ovvero è raggiungibile in qualsiasi punto del programma. Le variabili contenute all'interno di funzioni hanno invece visibilità locale, nel senso che possono essere utilizzate solo all'interno di quella funzione.

Vedremo nel dettaglio l'argomento scope variabili quando parleremo di funzioni PHP.
Casting

In un linguaggio di programmazione, l'esecuzione di calcoli aritmetici richiede che le variabili siano dello stesso tipo di dati. Con PHP questo non è necessario, in quanto l'interprete del linguaggio si occupa di effettuare il casting in automatico.

Fare il casting di una variabile vuol dire convertire una variabile o un valore da un tipo di dato a un altro.

Nonostante questo processo in PHP sia automatizzato, esiste la possibilità di fare un casting esplicito. Vediamo meglio con un esempio

<?php
$var1 = 10;
$var2 = 6.5;

var_dump($var1 + $var2); // float(16.5)

$var2 = (int) 6.5;

var_dump($var1 + $var2); // int(16)

Nell'esempio precedente abbiamo eseguito, tramite l'operatore aritmetico +, la somma delle variabili $var1 e $var2, il cui tipo è rispettivamente integer (numero intero ) e float (virgola mobile).

Il risultato della somma viene mostrato a video tramite la funzione var_dump(), che stampa sia il valore che il tipo di dato.

Alla riga 7 facciamo un casting esplicito a integer della variabile $var2 indicando tra parentesi tonde la keyword int. Questo converte il tipo da float e integer. Il risultato mostrato alla riga 9 è un valore di tipo integer.
