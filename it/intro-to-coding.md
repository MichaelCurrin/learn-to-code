# 🤷 Introduzione assoluta alla programmazione

Bloccato su cosa dover imparare, in che ordine impararlo e come le cose si adattano nel mondo della tecnologia? Questa guida è per te.

## Panoramica della tecnologia

Di seguito sono riportati alcuni dipartimenti o carriere all'interno della tecnologia con cui ho familiarità. Queste descrizioni sono molto semplificate ma mirano a fornire informazioni a qualcuno che inizia con una carriera tecnologica o qualcuno con un background aziendale che vuole capire meglio i propri colleghi tecnici o imparare una determinata tecnologia.

### Programmazione

- Come modo centrale per iniziare, "programmazione", "sviluppo", "ingegneria del software" e "coding" sono la stessa cosa. Tuttavia, si potrebbe sostenere che uno _sviluppatore_ si concentra semplicemente sulla base delle specifiche fornite, mentre un _ingegnere_ esamina l'architettura più ampia prima di decidere una soluzione.
- Come con altre carriere, si può passare da junior a medio livello (o intermedio) a senior engineer. Più si diventa senior, maggiore è l'influenza e la responsabilità che si hanno sul dipartimento e sull'azienda, sulla gestione degli altri e sul mentoring degli altri. Si potrebbe decidere di seguire la strada di una directory di ingegneria e fare molta meno programmazione e più gestione delle persone rispetto a un ingegnere senior.
- La programmazione generalmente riguarda la creazione di qualcosa per risolvere un problema, che si tratti di uno strumento, un gioco, un rapporto, un sito Web o un'automazione di attività.

#### Linguaggi di programmazione

- Tradizionalmente, i programmatori imparavano il linguaggio di programmazione [C](topics/scripting_languages​​/C) o un linguaggio di programmazione di tipo "funzionale", che di solito non è adatto per i principianti.
- I linguaggi di programmazione più moderni sono di solito "orientati agli oggetti", il che può renderli più naturali da concettualizzare (gli oggetti potrebbero mappare entità del mondo reale come utenti e immagini).
- Nota che ci sono oltre 200 linguaggi di programmazione e generalmente possono svolgere compiti simili. Alcuni semplicemente rendono più facile o conveniente fare determinate cose. Alcuni hanno molto supporto in termini di meetup, forum online e documentazione e sviluppo continuo (correzioni e funzionalità). Una parte importante della scelta di un linguaggio è sapere se ci sono librerie open source da scaricare e utilizzare nell'applicazione per evitare di doverla scrivere da soli. I linguaggi più recenti o quelli con un seguito minore di solito hanno meno librerie.
- Ecco alcuni linguaggi moderni popolari o comunemente usati:
	- [Ruby](topics/scripting_languages/Ruby) - per lo sviluppo Fullstack o Backend.
	- [PHP](topics/scripting_languages/PHP) - anche Fullstack o Backend.
	- C# (C Sharp) - also Fullstack or Backend.
	- Java - per lo sviluppo Fullstack o Backend. Applicazioni lato server e interfacce utente desktop, anche per server web e API.
	- [Python](topics/scripting_languages/Python) - come sopra per Java, ma con particolare interesse crescente negli ultimi anni per le applicazioni di Data Science, web scraping, automazione, Machine Learning e Internet of Things (IoT).
	- C++ (C Plus Plus) -  spesso utilizzato per giochi o il computing ad alte prestazioni.
	- [JavaScript](topics/scripting_languages/JavaScript) - Nato come un linguaggio che poteva essere eseguito solo nel browser, ora gli sviluppatori utilizzano JavaScript anche per applicazioni lato server, ad esempio con Node o NodeJS. Quindi ora JavaScript può essere utilizzato per il backend, per il frontend o per entrambi. Può anche essere utilizzato per applicazioni desktop (utilizzando [Electron](topics/scripting_languages/JavaScript/frameworks.md#electron)) o per applicazioni mobile (utilizzando [React Native](topics/scripting_languages/JavaScript/frameworks.md#react-native)).

### Sviluppo web

- Include la creazione di siti Web e app mobili.

#### Backend

- Lo sviluppo del backend potrebbe essere la mansione principale dello sviluppatore.
- La logica è che l'utente non può vedere quello che accade sul server e nel database. È qui che è possibile gestire la logica e la sicurezza aziendale, per mantenere le informazioni private.
- Si potrebbe lavorare su attività relative a query di database, le richieste degli utenti o gestire la registrazione degli utenti e la modifica dei propri dettagli.
- Le abilità di programmazione sono varie, ma ecco alcune scelte popolari:
	- C# (C sharp)
	- Java
	- [Python](topics/scripting_languages/Python)
	- Node ([JavaScript](topics/scripting_languages/JavaScript) that runs on a server).

#### Frontend

- Lo sviluppo del frontend potrebbe essere la mansione principale di uno sviluppatore.
- il Frontend rappresenta la parte che l'utente vede, ovvero la pagina web che l'utente vede nel browser o l'app mobile che scarica e utilizza sul proprio dispositivo mobile.
- Questa area copre l'interfaccia utente (UI), ovvero gli elementi che l'utente vede e interagisce. Così come l'esperienza utente (UX) che si occupa del movimento intorno alla pagina e del movimento tra le pagine dell'applicazione, è qui che si parla del flusso o del percorso e del design del cliente.
- Le attività potrebbero comportare l'aggiornamento degli elementi visivi, l'aggiunta di un nuovo flusso, la modifica di stili o immagini, l'aggiornamento del contenuto, la risoluzione di problemi di stile su determinate dimensioni dello schermo o dispositivi o rendere il movimento dell'applicazione semplice e fluido.
- Le capacità di programmazione per lo sviluppo basato su browser sono generalmente
	- HTML
		- Per il **contenuto**
		- Questa è la base della struttura, degli elementi e dell'aspetto di un sito web.
	- CSS
		-  Per definire lo **stile**.
		- Questo aggiunge stile al sito web, come un font specifico, un colore, una immagine di sfondo o un determinato layout.
		- Lo stile può essere aggiunto su un determinato elemento o nella parte superiore della pagina, ma spesso uno stile CSS di base viene applicato all'intero sito web. Utilizzando un tema esistente o personalizzato.
	- [JavaScript](topics/scripting_languages/JavaScript)
		- Per definire il **comportamento**
		- Questo aggiunge interattività al sito web. Significa che puoi fare cose come elaborare richieste come invii di moduli, ricerche e scorrere le immagini su un feed, il tutto senza dover ricaricare l'intera pagina, ma solo la parte che deve essere modificata.
		- Mentre HTML ha elementi che possono eseguire la convalida (come un nome utente deve corrispondere a un pattern regex), JavaScript può essere utilizzato per eseguire la convalida che è più complessa e fornire feedback in tempo reale. Ad esempio, puoi digitare un nome utente per registrarti e le richieste web vengono attivate in background per verificare se esiste e quindi ottieni un indicatore verde che dice che non è stato preso, il tutto prima di fare effettivamente clic su un pulsante di invio.
		- JavaScript è anche ciò che crea pop-up (piacevoli o fastidiosi) e gestisce i cookie su un sito web.
		- Some JavaScript frameworks go in the direction of [Progress web apps](https://en.wikipedia.org/wiki/Progressive_web_application)  e consentono di navigare all'interno di una "shell", proprio come un'applicazione mobile, in modo tale che qualsiasi pagina venga caricata sono senza soluzione di continuità. Queste applicazioni e tutta la sua pagina potrebbero anche funzionare completamente offline una volta caricata la pagina iniziale, anche se ovviamente perderai la possibilità di inserire il contenuto più recente o di inviare modifiche al contenuto o al profilo.
		- Alcuni siti Web sono costruiti facendo affidamento su JavaScript, in modo che la pagina possa perdere la sua funzionalità principale e potrebbe persino essere ridotta o una pagina bianca o un'icona segnaposto (vedi Instagram con JavaScript disabilitato). A volte c'è un messaggio che dice che devi abilitare JavaScript.
- Per lo sviluppo di app mobili, ci sono molte scelte.
	- App Android 
		- Java (il linguaggio Android tradizionale)
		- Kotlin (un linguaggio più recente, creato da Google a causa di problemi legali relativi all'utilizzo e alla modifica del codice Java).
	- App iOS 
		- Objective C (il linguaggio iOS tradizionale)
		- Swift (un nuovo linguaggio sviluppato da Apple).
	- [React Native](topics/scripting_languages/JavaScript/frameworks.md#react-native)
		-  Framework basato su JavaScript [React](topics/scripting_languages/JavaScript/frameworks.md#react).
		- Crea app Android e iOS performanti utilizzando una singola base di codice. Funziona anche su desktop.
	- [Dart](topics/scripting_languages/Dart)
		- Il linguaggio Dart include Flutter, una libreria per creare app mobili e componenti UI.
		- Il punto di forza è che Dart può compilare un codice Android e iOS performante utilizzando una singola base di codice. Può anche essere eseguito su desktop.

#### Frontend

- Lo sviluppo fullstack sta diventando sempre più comune - è qui che lavori nel backend e nel frontend di un servizio (o prodotto). Ciò significa che devi capire come lavorare nelle aree di backend e frontend descritte sopra.
- Linguaggi di programmazione
	- [Python](topics/scripting_languages/Python)
		- Utilizzo di librerie come Jinja e Flask, o Django, per creare modelli
	- [Ruby](topics/scripting_languages/Ruby)
		- "Ruby on Rails" - questo approccio comune significa utilizzare il popolare framework _Rails_ per costruire il database di backend, la logica del server e anche il frontend.
	- [PHP](topics/scripting_languages/Python)
		- PHP è l'ultima lettera della sigla "stack LAMP" costituita da Linux, Apache, MySQL e PHP.
		- PHP viene spesso utilizzato in questo ordine:
			1. Una richiesta arriva ad Apache e viene gestita da PHP.
			2. Se sono presenti dati sulla richiesta (come la creazione di un account o di un post), viene convalidato e inserito nel database.
			3. Ottenere dati dal database.
			4. Leggere un modello HTML per la pagina da restituire.
			5. Inserire i dati nel modello.
			6. Restituire la pagina come HTML finito.
		- Potrebbe esserci un pannello di amministrazione che consente agli utenti autorizzati di creare e modificare le pagine web.
		- WordPress è una libreria open source disponibile per la creazione di un blog, che puoi ospitare da qualche parte o sul sito Web di WordPress stesso.
		- Moodle è simile a WordPress.

### Design

- Dal punto di vista visivo, un'azienda potrebbe avere alcune persone specializzate nel design.
- Potrebbero creare immagini e grafica 2D, che gli sviluppatori web suddividono e trasformano in un sito web.
- Oppure i designer potrebbero effettivamente creare un mock-up che funziona effettivamente come sito Web o app di base, o almeno serve come un design che può essere convertito in HTML e CSS.
- Esistono strumenti che ti consentono di concentrarti completamente sul design e sui contenuti senza dover programmare. Questi sono ottimi anche per la prototipazione rapida. Per esempio:
	- [Wordpress](https://wordpress.com)
	- [Wix](https://wix.com)
- Seguendo la sezione [Frontend](#frontend) sopra, potresti avere persone specializzate in posizioni che includono "User Experience" o simili nel titolo.

### Data Science

- I data scientist si occupano di **estrarre** dati da una varietà di origini dati che potrebbero essere cose come file di testo o file CSV, fogli Google, immagini su un server, risposte a sondaggi, dati API esterni (spesa pubblicitaria Google, social media menzioni) e dati del database interno (tali dati di marketing o dati sui clienti o sulle vendite).
- Gran parte del lavoro è spesso **elaborare** i dati - capire la struttura e pulirla in modo che sia coerente e facile da lavorare.
- I data scientist creano report dai dati in modo che possano dargli un senso e fornire raccomandazioni, oppure rendono i dati disponibili per l'utilizzo da parte di altri reparti. L'output potrebbe essere un CSV, un report Web o dashboard, grafici, un PDF o un report e-mail.
- Con Data Science, potresti anche trovare posizioni più specializzate come Data Engineer o Data Analysts.
- A un Data Scientist potrebbe essere richiesto di fare previsioni utilizzando grafici o tecniche statistiche, come l'utilizzo di dati esistenti per fare una previsione sulle prestazioni future, raggruppare i clienti in categorie o consigliare prodotti ai clienti.
- Un Data Scientist in genere impara alcuni dei seguenti:
	- Software di statistiche
		- Questi hanno un'interfaccia visiva e producono grafici e report e potrebbero essere necessarie alcune abilità di programmazione per eseguire script.
		- Ad esempio: Stata, Statistica
		- [Elenco di software per la Statistica](https://en.wikipedia.org/wiki/List_of_statistical_software)
	- Strumenti di dashboard
		- Ad esempio: Fogli Google, Tableau, Google Data Studio
	- Linguaggi di scripting
		- [R](topics/scripting_languages/R)
		- [Python](topics/scripting_languages/Python)

### Intelligenza artificiale

- All'interno della Data Science c'è il campo dell'Intelligenza Artificiale o _AI_. Ciò richiederà ancora molte tecniche statistiche e anche il recupero e l'elaborazione dei dati. L'output potrebbe essere un rapporto o una raccomandazione, oppure uno script o un servizio di sito Web che può fornire risposte a un problema utilizzando gli input forniti dall'utente e utilizzando la logica ei dati su cui è stato addestrato l'algoritmo.
- L'intelligenza artificiale copre cose come il rilevamento di anomalie, previsioni finanziarie, previsioni del tempo, riconoscimento di immagini, auto a guida autonoma, robot e rilevamento di errori nelle linee di produzione.
- Una parte dell'intelligenza artificiale è Machine Learning o _ML_, che di solito significa addestrare un algoritmo per generare un punteggio o probabilità o classificare un elemento. Di solito c'è un risultato definito e qualche regola che un essere umano scrive e modifica. È possibile eseguire molte operazioni di Machine Learning utilizzando tecniche di statistiche vecchie di decenni. Un modo per iniziare è utilizzare la libreria Python [Scikit-Learn](https://scikit-learn.org/).
- Un'area più recente dell'IA sono le reti neurali, che si occupa di un tipo di apprendimento simile al modo in cui le connessioni si creano tra i neuroni nel cervello durante l'allenamento e quindi quando una condizione viene soddisfatta in seguito, i neuroni si attivano. Questo è utile per le attività che sono difficili da definire utilizzando le regole.
- Esistono molti approcci all'addestramento degli algoritmi.
	- Apprendimento supervisionato significa che gli esseri umani etichettano i dati di addestramento e quindi l'algoritmo deve diventare accurato e fare previsioni basate su quei dati.
	- L'apprendimento senza supervisione consente all'algoritmo di individuare autonomamente i modelli nei dati. Ciò è utile quando i dati sono difficili da etichettare. Oppure non sai cosa stai cercando tra centinaia di colonne di dati, ma vuoi fare il data mining in cui l'algoritmo capisce cosa è importante e come i punti dati si relazionano tra loro.
	- L'apprendimento per rinforzo è un sistema basato sulla ricompensa in cui all'algoritmo viene assegnato un obiettivo e quando ci si avvicina viene premiato e quindi il comportamento viene rinforzato. Ad esempio, addestrare un'auto robotica a guidare alla giusta velocità, svoltare in curva e riconoscere oggetti per ottenere il tempo sul giro più veloce e non schiantarsi.


### DevOps

- I membri DevOps di un'organizzazione si occupano di _Developer Operations_.
- Semplificano la vita degli sviluppatori, come la configurazione e la gestione dell'infrastruttura su server fisici o server remoti (come AWS).
- Il modo di fare infrastruttura sta cambiando, quindi gli ingegneri DevOps ora devono anche essere in grado di gestire sicurezza, container e applicazioni serverless.
	- Se sei interessato alle applicazioni serverless, questo è ciò che devi sapere:
		- Funzionano ancora su un server da qualche parte, lo tratti semplicemente come da qualche parte nel cloud.
		- Puoi farne girare quanti ne vuoi, specialmente per un volume elevato di richieste.
		- Le applicazioni serverless sono basate su attività.
		- Vengono eseguiti in base a un evento, ad esempio un determinato orario o quando vengono attivati ​​da una richiesta web.
		- Il server è usa e getta e viene spento quando non è necessario, il che consente di risparmiare sui costi di funzionamento continuo di un server anche quando non è necessario.
		- Il server è gestito dalla configurazione - se c'è qualcosa che non va o devi cambiare la versione di una libreria, non modifichi il server. Si modifica la configurazione, si abbatte il server e quindi si avvia un altro server.
	- Vedi link:
		- [AWS Lambda](https://aws.amazon.com/lambda/) - elaborazione serverless basata su eventi.
		- [Backend come servizio](https://backendless.com/)
		- [Serverless](https://serverless.com)
		- [Backend come blog post](https://www.cloudflare.com/learning/serverless/glossary/backend-as-a-service-baas/) su [cloudflare.com](https://www.cloudflare.com)
		- [Zeit](https://zeit.co/)
