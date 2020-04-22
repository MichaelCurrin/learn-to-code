# MongoDB

## Che cos'è Mongo?

> MongoDB è un database di documenti che ti offre la scalabilità e la flessibilità che desideri insieme agli indici e alle query di cui hai bisogno [fonte](https://www.mongodb.com/it/what-is-mongodb)


## Risorse

- [Sito ufficiale](https://www.mongodb.com/it)
- Tutorials
    - [Tutorial MongoDB per principianti: impara in 7 giorni ](https://www.guru99.com/mongodb-tutorials.html)
- Mongo nel cloud
    - [Mongo Atlas](https://www.mongodb.com/cloud/atlas)
        > Disponibile su AWS, Azure e GCP. 
        > Database di documenti flessibile e scalabile. Disponibile come servizio completamente gestito.


## Quickstart

### Python

[fonte](https://www.mongodb.com/it/what-is-mongodb)

#### Connessione

Qui ci stiamo collegando a un database MongoDB ospitato localmente chiamato test con una raccolta denominata restaurants (ristoranti).

```python
# Connessione all'istanza MongoDB in esecuzione su localhost
client = pymongo.MongoClient()

# Accedi alla raccolta "restaurants" nel database "test"
collection = client.test.restaurants
```

#### Inserisci un documento

2 documenti sono stati inseriti nella collezione dei restaurants. Ogni documento rappresenta un ristorante con un nome, con una valutazione a stelle e la categoria del ristorante stesso (memorizzato come un array).

```python
new_documents = [
    {
        "name": "Sun Bakery Trattoria",
        "stars": 4,
        "categories": ["Pizza", "Pasta", "Italian", "Coffee", "Sandwiches"]
    },
    {
        "name": "Blue Bagels Grill",
        "stars": 3,
        "categories": ["Bagels", "Cookies", "Sandwiches"]
    }
]

collection.insert_many(new_documents)
```

#### Crea una query

In questo esempio, eseguiamo una semplice query per ottenere tutti i documenti nella raccolta restaurants e archiviarli come array.

```python
for restaurant in collection.find():
    pprint.pprint(restaurant)
```


#### Build an index

Gli indici in MongoDB sono simili agli indici in altri sistemi di database. MongoDB supporta gli indici su qualsiasi campo o sottocampo di un documento in una raccolta. Qui, stiamo costruendo un indice sul campo del nome in ordine crescente.

```python
collection.create_index([('name', pymongo.ASCENDING)])
```

#### Aggregazione

Utilizzando la pipeline di aggregazione di MongoDB, puoi filtrare e analizzare i dati in base a una determinata serie di criteri. In questo esempio, estraiamo tutti i documenti nella raccolta di restaurants che hanno una categoria di prodotti da forno usando l'operatore $match e li raggruppiamo in base alla loro valutazione a stelle usando l'operatore $group. Usando l'operatore accumulatore, $sum, possiamo vedere quante panetterie(bakeries) ci sono nella nostra collezione e quelle che hanno una classificazione a stelle.

```python
pipeline = [
    {"$match": {"categories": "Bakery"}},
    {"$group": {"_id": "$stars", "count": {"$sum": 1}}}
]

pprint.pprint(
    list(collection.aggregate(pipeline))
)
```
