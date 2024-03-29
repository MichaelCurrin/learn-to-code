# 🤷 Absolute intro to coding

Stuck with what to learn to, what order to learn it and how things fit together in the world of tech? This guide is for you.

## Overview of tech

Below are some departments or careers within tech that I am familiar with. These descriptions are very simplified but aims to give info someone starting out with a tech career, or someone with a business background to wants to understand their tech colleagues better or pick a technology to learn.

### Programming

- As a central way to start, "programming", "development", "software engineering" and "coding" are all the same thing. Though, one could argue that a _developer_ just develops based on specifications they are given, while an _engineer_ looks at the wider architecture before deciding on a solution.
- As with other careers, one can progress from junior to mid-level (or intermediate) to senior engineer. The more senior you become, the influence and responsibility you have over the department and company, managing others and mentoring others. One could decide to go the route of a directory of engineering and do a lot less coding and more people-management compared with a senior engineer.
- Programming generally is about building something to solve a problem, whether it is a tool, a game, a report, a website, or some automation of tasks.

#### Programming languages

- Traditionally, programmers learnt the [C](topics/scripting_languages/C) programming language or a "functional" programming language. These are typically not beginner-friendly.
- More modern languages are usually "object-oriented", which can make them more natural to conceptualize (the objects might map to real-world entities like users and images). These are usually easier to pick-up.
- Note that there are over 200 programming languages and they can generally are do similar tasks. Some just make it easier or convenient to do certain things. Some have a lot of support in terms of meetups, online forums and documentation and continued development (fixes and features). An important part of choosing a language is knowing if there are open-source libraries for you to download and use in your application to save you having to write it yourself. Newer languages or those with a smaller following usually have fewer libraries.
- Here are some popular or commonly used modern languages are:
	- Java - for Fullstack or  Backend development. Server-side applications and desktop user interfaces, also for web servers and APIs.
	- C# (C Sharp) - also Fullstack or Backend. This is based on Java but with some more features.
    - [Python](topics/scripting_languages/Python) - as above for Java, but with particular growing interest in recent decades around Data Science, web scraping, automation, Machine Learning and the Internet of Things (IoT) like using a Raspberry Pi.
	- C++ (C Plus Plus) - often used for games, or high-performance time-sensitive computing like computers for machinery and vehicles.
	- [JavaScript](topics/scripting_languages/JavaScript) - This started as a language that can only run in the browser, but now developers are using JavaScript on the server side, known as Node or NodeJS. So now JavaScript can be used on the backend, or frontend, or both. It can also be used for desktop applications (such as using [Electron](topics/scripting_languages/JavaScript/frameworks.md#electron)) or mobile applications (such using [React Native](topics/scripting_languages/JavaScript/frameworks.md#react-native)).
	- [Ruby](topics/scripting_languages/Ruby) - for Fullstack or Backend development. Rails or "Ruby on Rails" is the most famous Ruby package or "gem".
	- [PHP](topics/scripting_languages/PHP) - also Fullstack or Backend. WordPress is the typical case here.
	
### Web development

- This includes building websites and mobile apps.

#### Backend

- Backend development might be a developer's focus.
- The logic that happens on the server and the database that the user can't see. This is where your business logic and security can be handled, to keep it private.
- In a web dev role, one might work on tasks around database queries, serving requests to users or handling users signing up and changing their details.
- I'd say most languages can be used for a backend system. Since they just need to run on a machine without dealing with frontend browser display.
- For a visual route outside of web dev, you can of course build a terminal tool that takes commands or is interactive. Or even make a full application can be installed and run on desktop or mobile.
- Here are some popular choices:
	- C# (C sharp). Traditional associated with .NET (Dotnet) in the Microsoft ecosystem, so my guess is you'll work on building enterprise applications for larger corporations (such as a billing tool or data management tool, something only used by the company's own employees). And not making web apps or mobile apps or work in a startup.
	- Java
	- [Python](topics/scripting_languages/Python) - for API web servers, automation tools and data science.
	- Node ([JavaScript](topics/scripting_languages/JavaScript) that runs on a server) - for API web servers and desktop and mobile applications (which is kind of fullstack but without a browser).

#### Frontend

- Frontend development could be a developer's focus.
- This is the part that the user does see. This is the web page that user sees in the browser, or the mobile app they download and use on their mobile device.
- This areas covers User Interface (UI) which is the elements the user see and interacts. As well as User Experience (UX) which deals with the movement around the page and movement between pages of the application - this is where one talks about the flow or the customer journey and design.
- The tasks might involve updating the visual elements, add a new flow, changing styles or images, updating content,  fixing styling problems on certain screen sizes or devices or making the movement around the application smooth and easy.
- The programming skills for browser-based development are usually
	- HTML
		- For defining **content**
		- This is the base of the structure, elements and appearance of a website.
	- CSS
		- For defining **styling**.
		- This adds styling to the website, such font, color, background image, layout.
		- Styling can be added on a certain element or at the top of the page, but often some base CSS styling is applied to the entire website. Using an existing or custom-built theme.
	- [JavaScript](topics/scripting_languages/JavaScript)
		- For defining **behavior**
		- This adds interactivity to the website. It means you can do things like process requests like form submissions, searches and scrolling through images on a feed, all without having to reload the entire page, but just the part that needs to change.
		- While HTML has elements which can do validation (such as a username must match a regex pattern), JavaScript can be used to do validation which is more complex and give you live feedback. For example, you can type a username to register and web requests are fired in the background to check if it exists and then you get a green indicator say that it is not taken, all before you actually click a submit button.
		- JavaScript is also what creates pop-ups (pleasant or annoying) and manages cookies on a website.
		- Some JavaScript frameworks go in the direction of [Progress web apps](https://en.wikipedia.org/wiki/Progressive_web_application) and allow to navigate within a "shell", much like a mobile application, such that any page loads are seamless. These application and all its page may even work completely offline once the initial page has loaded, though you will of course lose the ability to pull in the latest content or push content or profile changes.
		- Some websites are built with such as reliance on JavaScript that the page may lose its main functionality and it may even be reduced or a white page or placeholder icon (see Instagram with JS disabled). Sometimes there is a message which says you need to enable JavaScript.
- For mobile app development, there are many choices.
	- Android apps
		- Java (The traditional Android language)
		- Kotlin (A newer language, which Google created because of legal issues of using and modifying Java code).
	- iOS apps
		- Objective C (The traditional iOS language)
		- Swift (A newer language also by Apple).
	- [React Native](topics/scripting_languages/JavaScript/frameworks.md#react-native)
		- Based on the JavaScript [React](topics/scripting_languages/JavaScript/frameworks.md#react) framework.
		- Build performant Android and iOS apps using a single codebase. It runs on desktop too.
	- [Dart](topics/scripting_languages/Dart)
		- The Dart language includes Flutter - a library for making mobile apps and UI components.
		- The strength is that Dart can compile to performant Android and iOS code using a single codebase. It can also run on desktop.

#### Frontend

- Fullstack development is becoming more common - this is where you work in the backend and the frontend of one service (or product). This means you have to understand how to do the backend and frontend areas covered above.
- Programming languages
	- [Python](topics/scripting_languages/Python)
		- Using libraries like Jinja and Flask, or Django, to do templating
	- [Ruby](topics/scripting_languages/Ruby)
		- "Ruby on Rails" - this common approach means using the popular _Rails_ framework to build the backend database and server logic and also the frontend.
	- [PHP](topics/scripting_languages/Python)
		- PHP is the last part of the "LAMP stack" of Linux, Apache, MySQL and PHP.
		- PHP is often used with this flow:
			1. A request comes in to Apache, which PHP handles.
			2. If there is an data on the request (such as creating an account or post), validate and insert it into the database.
			3. Get data from the database.
			4. Read an HTML template for page to return.
			5. Insert the data into the template.
			6. Return the page as finished HTML.
		- There may be an admin view which for authorized users to create and edit web pages.
		- WordPress is an open-source library available for building a blog, which you can host somewhere or on the WordPress website itself.
		- Moodle is similar to WordPress.

### Design

- On the visual side, a company might have some people who specialize in design.
- They might make flat images and graphics, which the web developers slice up and turn into a website.
- Or the designers might actually make a mock-up that actually works as basic website or app, or a least serves as a design that can be converted into HTML and CSS.
- There are tools out there which allow you to focus completely on the design and content without having to code. These are also great for prototyping quickly. For example:
	- [Wordpress](https://wordpress.com)
	- [Wix](https://wix.com)
- Following from the [Frontend](#frontend) section above, you might have people who specialize in the positions which include "User Experience" or similar in the title.

### Data Science

- Data Scientists deal with **pulling** in data from a variety of data sources which might be things like text files or CSV files, Google Sheets, images on a server, survey answers, external API data (Google Ad spend, social media mentions) and internal database data (such marketing data or customer or sales data).
- A lot of the work is often **processing** the data - understanding the structure and cleaning it so it is consistent and easy work with.
- Data Scientists create reports from the data so that they can make sense of it and give recommendations, or they make the data available for other departments to use. Output might be a CSV, a web report or dashboard, graphs, a PDF or an email report.
- With Data Science, you might also find more specialized positions like Data Engineers or Data Analysts.
- A Data Scientist may be required to make predictions using graphs or statistical techniques, such as using existing data to make a forecast on future performance, grouping customers into categories or recommending products to customers.
- A Data Scientist typically learns some of the following:
	- Stats software
		- These have a visual interface and produce graphs and reports and some programming skills may be needed to run scripts.
		- For example: Stata, Statistica
		- [List of Statistical Software](https://en.wikipedia.org/wiki/List_of_statistical_software)
	- Dashboarding tools
		- For example: Google Sheets, Tableau, Google Data Studio
	- Scripting languages
		- [R](topics/scripting_languages/R)
		- [Python](topics/scripting_languages/Python)

### Artificial Intelligence

- Within Data Science is the field of Artificial Intelligence or _AI_. This will still involve a lot of statistical techniques and  also fetching and processing data. The output might be a report or recommendation, or it might a script or a website service which can give answers to a problem using inputs you give it and using the logic and data which the algorithm was trained on.
- AI covers things like anomaly detection, financial forecasting, weather prediction, image recognition, self-driving cars, robots and detecting errors in production lines.
- One part of AI is Machine Learning or _ML_, which usually means training an algorithm to generate a score or probability or categorize an item. Usually there is a define outcome and some rule which a human writes and tweaks. A lot of Machine Learning can be done using stats techniques which are decades old. One way to get started is using the Python [Scikit-Learn](https://scikit-learn.org/)  library.
- A newer area of AI is Neural Networks, which deals with a kind of learning which is similar to how connections build up between neurons in the brain in training and then when a condition is met later then the neurons fire. This is good for tasks which are hard to define using rules.
- There are many approaches to training algorithms.
	- Supervised learning means that humans label the training data and then the algorithm has go get accurate and making predictions based on that data.
	- Unsupervised learning lets the algorithm figure out patterns in the data by itself. This is good when the data is difficult to label. Or you don't know what you are looking for out of hundreds of columns of data but you want to do data mining where algorithm figures out what is important and how data points relate to each other.
	- Reinforcement learning is a reward-based system where the algorithm is given a goal and when it gets closer to that it is rewarded and so the behavior is reinforced. For example, training a robot car to drive at the right speed, turn corners and recognize objects in order to get the fastest lap time and not crash.

### DevOps

- The DevOps members of an organization deal with _Developer Operations_.
- They make the lives of developers easier, such as setting up and managing infrastructure on physical servers or remote servers (such as on AWS).
- The way to do infrastructure is changing, so DevOps engineers now also have to be capable of handling security, containers and serverless applications.
	- If you are interesting in serverless applications - this is what you need to know:
		- They still do run on a server somewhere, you just treat is as somewhere in the cloud.
		- You can spin up as many as needed especially for a high volume of requests.
		- Serverless applications are task-based.
		- They run based on event - such as a certain time or when triggered by a web request.
		- The server is disposable and is turned off when it is not needed, which saves on the cost of running a server continuously even when not needed.
		- The server is managed by configuration - if there is something wrong or you need to change the version of a library, you don't modify the server. You modify the config, tear down the server and then start another server.
	- See links:
		- [AWS Lambda](https://aws.amazon.com/lambda/) - event-driven serverless computing.
		- [Backend as a Service](https://backendless.com/)
		- [FaunaDB](https://fauna.com/)
		- [Hasura](https://hasura.io/)
		    > Instant realtime GraphQL on all your data
		- [Serverless](https://serverless.com)
		- [Backend as a service blog post](https://www.cloudflare.com/learning/serverless/glossary/backend-as-a-service-baas/) on [cloudflare.com](https://www.cloudflare.com)
		- [Vercel](https://vercel.com/) - previously known as "Zeit". Host your static site, Node app or Python app in the cloud for free. It will turn your backend server into a bunch of serverless endpoints, giving you speed and efficient resources and without having to rewrite your app as a ton of Lambdas.
		
 
