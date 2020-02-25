# GraphQL

GraphQL is a specification for requesting and returning resources using an API request to a single endpoint which only returns the objects and fields requested in the query. It was created by Facebook around 2012 and many services are migrating from using a REST API to GraphQL API for the easy of maintaining GraphQL API and consuming the data.

## How to use it

### Serve data

GraphQL is often implemented as a library in languages like Ruby, Python or Node. You can then install and import that library to act as a GraphQL server for local or network requests, similar to a REST API.

A GraphQL server can use anything as a datasource - a SQL or NoSQL database, a static file or even act as a wrapper pointing to external REST APIs.

The data is returned as JSON. The structure is dynamic - it is based on the user's input query. So objects can be nested and paginated.

### Request as a client

You can consume a GraphQL in various ways on the client side.

- Do a POST request using a command-line tool such as `curl`. Some APIs need an auth token to be provided for access to certain data.
- Use a [GraphiQL](https://github.com/graphql/graphiql#graphiql) explorer on the server (if it supposed) to make it easy to send queries and parameters (variables) in the browser interface. With extra interactive benefits like type hints, autocomplete, autoformatting, linting and help on the Schema model.
- Web application (HTML + JavaScript) or mobile application (Android / iOS)
    - Do a request and then show data on the frontend. The original usecase for GraphQL passing the Facebook newsfeed in for the Facebook iOS app.
    - Libraries
        - You can use a general requests **library** do to a POST request to the GraphQL endpoint (using query text and optionap parameters as data payload). 
        - Or you can use a more specialized GraphQL client library for additional features like error handling and schema validation (check the query is valid before doing the request).


## Resources

- [graphql.org](https://graphql.org/) homepage
- _GraphQL: The Documentary_
    - Watch on [Youtube](https://www.youtube.com/watch?v=783ccP__No8) or [Honeypot.io](https://videos.honeypot.io/graphql-documentary-2019/)
    - This covers the history of GraphQL starting in Facebook, around 2012 when they had to keep up with a major shift of their audience to mobile. 
    - I'd highly recommend this video for frontend developers as it makes API queries in React and mobile apps much easier. Or anyone looking to build a REST or GraphQL API.
