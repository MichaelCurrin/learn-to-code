# MongoDB

## What is Mongo?

> MongoDB is a document database with the scalability and flexibility that you want with the querying and indexing that you need [source](https://www.mongodb.com/what-is-mongodb)


## Resources

- [Official site](https://www.mongodb.com/)
- Tutorials
    - [MongoDB Tutorial for Beginners: Learn in 7 Days ](https://www.guru99.com/mongodb-tutorials.html)
- Mongo in the cloud
    - [Mongo Atlas](https://www.mongodb.com/cloud/atlas)
        > Available on AWS, Azure, and GCP.
        > Flexible and scalable document database. Available as a fully managed service.


## Quickstart

### Python

[source](https://www.mongodb.com/what-is-mongodb)

#### Connect

Here we are connecting to a locally hosted MongoDB database called test with a collection named restaurants.

```python
# Connect to MongoDB instance running on localhost
client = pymongo.MongoClient()

# Access the 'restaurants' collection in the 'test' database
collection = client.test.restaurants
```

#### Insert a document

2 documents are being inserted into the restaurants collection. Each document represents a restaurant with a name, star rating, and categories (stored as an array).

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

#### Create a query

In this example, we run a simple query to get all of the documents in the restaurants collection and store them as an array.

```python
for restaurant in collection.find():
    pprint.pprint(restaurant)
```


#### Build an index

Indexes in MongoDB are similar to indexes in other database systems. MongoDB supports indexes on any field or sub-field of a document in a collection. Here, we are building an index on the name field with sort order ascending.

```python
collection.create_index([('name', pymongo.ASCENDING)])
```

#### Aggregate

Using MongoDB’s aggregation pipeline, you can filter and analyze data based on a given set of criteria. In this example, we pull all the documents in the restaurants collection that have a category of Bakery using the $match operator and then group them by their star rating using the $group operator. Using the accumulator operator, $sum, we can see how many bakeries in our collection have each star rating.

```python
pipeline = [
    {"$match": {"categories": "Bakery"}},
    {"$group": {"_id": "$stars", "count": {"$sum": 1}}}
]

pprint.pprint(
    list(collection.aggregate(pipeline))
)
```
