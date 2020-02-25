# GraphQL

<img width="100px" src="https://raw.githubusercontent.com/graphql/graphql-spec/master/resources/GraphQL%20Logo.svg?sanitize=true">
<!-- Image link from Wikipedia icon: https://en.wikipedia.org/wiki/GraphQL -->

## What is GraphQL?

GraphQL is a **specification** - is not a coding or query language or framework.

It is a specification for requesting and returning resources using an API request to a single endpoint which only returns the objects and fields requested in the query. It was created by Facebook around 2012 and many services are migrating from using a REST API to GraphQL API for the easy of maintaining GraphQL API and consuming the data.

From [graphql.org/](https://graphql.org/):

> GraphQL is a query language for APIs and a runtime for fulfilling those queries with your existing data. GraphQL provides a complete and understandable description of the data in your API, gives clients the power to ask for exactly what they need and nothing more, makes it easier to evolve APIs over time, and enables powerful developer tools.

From [Wikipedia](https://en.wikipedia.org/wiki/GraphQL)
> GraphQL is an open-source data query and manipulation language for APIs, and a runtime for fulfilling queries with existing data.[2] GraphQL was developed internally by Facebook in 2012 before being publicly released in 2015

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
- Tutorials
    - [graphql.org](graphql.org/)
        - [Introduction to GraphQL](https://graphql.org/learn/)
        - [Tutorials](https://www.graphql.com/tutorials/) on general, server and client topics.
            > This is your GraphQL study guide. Learn the fundamentals of schemas and queries, then implement some apps with hands-on step-by-step tutorials.
    - [How to build a web app with GraphQL and React](https://www.sitepoint.com/how-to-build-a-web-app-with-graphql-and-react/) on Sitepoint.
- Courses
    - [GraphQL with React](https://www.udemy.com/course/graphql-with-react-course) on [Udemy](www.udemy.com).
    - [How to GraphQL](https://www.howtographql.com/)
        - [Introduction](https://www.howtographql.com/basics/0-introduction/) course on fundamentals.
        - See also their menu for advanced GraphQL, frontend or backend courses. 
    - [GraphQL scalable APIs](https://www.pluralsight.com/courses/graphql-scalable-apis) on PluralSight
