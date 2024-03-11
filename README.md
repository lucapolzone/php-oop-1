# Esercizio: PHP OOP (04/03/2024)
nome repo: `php-oop-1`

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file `index.php` in cui è definita una classe `Production`.

All'interno della classe dovrete gestire un <b>titolo</b>, una <b>lingua</b> e un <b>voto</b> (su una scala da 1 a 10). La classe deve avere le sue variabili d'istanza, il costruttore e i metodi.

Istanziate poi almeno due oggetti `Production` e stampate a schermo i loro valori.

## BONUS 1
Creare un layout completo per stampare a schermo una lista di produzioni.

Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare `db.php`
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare `Models`
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

## BONUS 2
Create una classe `Genre` (gli attributi potrebbero essere <b>nome</b> e <b>descrizione</b>) e fate in modo che la classe Production accetti un genere nel costruttore. Aggiornate le informazioni stampate a schermo con il genere.

<br/><br/>

# Esercizio: PHP OOP (05/03/2024)
nome repo: `php-oop-1` (stessa repo)

Aggiungete al lavoro di ieri le classi `Movie` e `TVSerie`
- La classe <b>Movie</b> gestisce due proprietà: `profitti` e `durata`
- La classe <b>TVSerie</b> gestisce il `numero di stagioni`.

Hey 👀 Se vuoi aggiungere altre proprietà alle due classi, fai pure! Queste sono solo indicazioni.

Facciamo in modo che <b>Movie</b> e <b>TVSerie</b> ereditino le proprietà di base dalla classe <b>Production</b>. <br/>
Creiamo delle istanze di <b>Movie</b> e </b>TVSerie</b> e stampiamo le informazioni a schermo.

## BONUS
Facciamo in modo che la classe <b>Production</b> accetti <b>più di un genere</b>

