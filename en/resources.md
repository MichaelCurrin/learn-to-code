# 📚 Resources
> Outline of some key dev ideas with external links to dive deeper

## How to use this guide

This guide assumes you already are familiar coding concepts and want to do something like the following:

- You want to explore some areas you have heard of but don't know much about. Or
- You learnt tech by doing and want to find some more formal definitions and explanations. Or,
- You want find out what there is to know and how these things fit together.

In my experience in software engineering interviews (both being interviewed and giving interviews), these are the kind of topics that come up a lot and so knowing about these at least at a conceptual level will help you greatly.

You do not have to actually code in all of these topics, but ideally you should know what most of these items are and when and why you would use them. Where links are not provided below, you can look these up yourself on Wikipedia, blogs or tutorials.


## Topics


### 💡 Software design concepts

- Operating system
	- Unix
	- Linux
	- macOS
	- Windows
- Shell
	- Bash
	- ZSH
	- PowerShell
- Functional programming
- [Object-orientated programming](https://en.wikipedia.org/wiki/Object-oriented_programming)
- [SOLID](https://en.wikipedia.org/wiki/SOLID) principles for Object-orientated programming
    - Single responsibility principle
    - Open-close principle
    - Liskov substitution principle
    - Interface segregation principle
    - Dependency inversion principle
- Linux philosophy
    - [The 9 major tenets and how they affect you](https://opensource.com/business/15/2/how-linux-philosophy-affects-you)
    - The list
        - Small is Beautiful
        - Each Program Does One Thing Well
        - Prototype as Soon as Possible
        - Choose Portability Over Efficiency
        - Store Data in Flat Text Files
        - Use Software Leverage
        - Use Shell Scripts to Increase Leverage and Portability
        - Avoid Captive User Interfaces
        - Make Every Program a Filter
- Databases
    - SQL
    - NoSQL
    - ORM
- Web application design
    - RESTful API
    - [GraphQL](GraphQL/) API
    - Model View Controller (MVC)
    - Server-side rendering (SSR)
        - Such as PHP and Python applications.
    - Client-side rendering (CSR), such JavaScript Single-Page Application (SPA)
    - Single-page application
- [There are only two hard things in programming](https://www.martinfowler.com/bliki/TwoHardThings.html)
    - Cache invalidation
    - Naming things
    - [Off-by-one errors](https://en.m.wikipedia.org/wiki/Fencepost_error)
- Cookies
	- [Cookies](https://flaviocopes.com/cookies/) section on Flavio Copes' blog.

### ↔️ Backend vs frontend

See a blog post I wrote [here](https://michaelcurrin.github.io/coding-blog/2020/02/20/backend-vs-frontend.html) which explains the difference between these two areas.


### 🌸 Design patterns

> In software engineering, a software design pattern is a general, reusable solution to a commonly occurring problem within a given context in software design. It is not a finished design that can be transformed directly into source or machine code. Rather, it is a description or template for how to solve a problem that can be used in many different situations. Design patterns are formalized best practices that the programmer can use to solve common problems when designing an application or system. [Wikipedia](https://en.wikipedia.org/wiki/Software_design_pattern)

- [Design Patterns](topics/scripting_languages/Python/README.md#design-patterns) in Python.
- [Design Patterns in Java Tutorial](https://www.tutorialspoint.com/design_pattern/index.htm) on Tutorials Point website - see the patterns listed on the sidebar menu there.


### 🏟 Architecture

- [Software Architecture Fundamentals](https://learning.oreilly.com/videos/software-architecture-fundamentals/9781491998991/9781491998991-video316989) on O’Reilly Online Learning. 9 hour course.

#### 🗼 Domain-driven design

- [Domain-Driven Design Fundamentals](https://app.pluralsight.com/library/courses/domain-driven-design-fundamentals/table-of-contents) on Pluralsight. 4 hour course.
- [Software Architecture - Domain Driven Design](https://www.linkedin.com/learning/software-architecture-domain-driven-design/) on LinkedIn Learning. 1 hour course.


### 🔁 Rosetta code

The [Rosetta Code](https://rosettacode.org/) website provides tasks solved in various languages for easy comparison. This can be useful whether you are a new or familar with a language. The examples here tend to be minimal and follow a similar pattern, for example if you understand what the Python one is doing you can make sense of the equivalent logic in Ruby or PHP.

Topics:

- [Hello world text](https://rosettacode.org/wiki/Hello_world/Text)
- Web
    - [Web server](https://rosettacode.org/wiki/Hello_world/Web_server) hello world
    - [Web scraping](https://www.rosettacode.org/wiki/Web_scraping)
    - [HTTPS/Auth](https://rosettacode.org/wiki/HTTPS/Authenticated)

See also, "Hello, world" program on [Wikipedia](https://en.wikipedia.org/wiki/%22Hello,_World!%22_program).


### 📏 Test Driven Development

- [Test-driven development](https://en.wikipedia.org/wiki/Test-driven_development) on Wikipedia.
- [kata-bootstraps](https://github.com/swkBerlin/kata-bootstraps) - If you are interested in writing unit tests, you might find some bootstrap code here for a certain language.
- [Test Driven Development (TDD): Example Walkthrough](https://technologyconversations.com/2013/12/20/test-driven-development-tdd-example-walkthrough/) blog post.
- [Introduction to Test Driven Development (TDD)](http://agiledata.org/essays/tdd.html) essay on Agile Data website.


### 🖌 Code style

Learn how to write code that follows the style guide for the language or project/team.

- [Programming style](https://en.wikipedia.org/wiki/Programming_style)
- [Why coding style matters](https://www.smashingmagazine.com/2012/10/why-coding-style-matters/) blog post
- [Style guides for Google-originated open-source projects](https://github.com/google/styleguide)

### 🔍 Code review

Learn to review other developers' code.

- [Code review skills for people](https://speakerdeck.com/nnja/code-review-skills-for-people) slide deck.
- [Code review](https://github.com/features/code-review/) feature guide GitHub.


## Shell programming on Linux

- [GNU Bash](https://www.gnu.org/software/bash/) homepage. Bash can run on Linux, macOS and other Unix-like systems.
- Linux
	- [linux.org](https://www.linux.org/) homepage.
	- [Linux](https://en.wikipedia.org/wiki/Linux) on Wikipedia.
- Linux subsystem on Windows.
	- [Overview](https://docs.microsoft.com/en-us/learn/modules/get-started-with-windows-subsystem-for-linux/)
	- [Enable and Install](https://docs.microsoft.com/en-us/learn/modules/get-started-with-windows-subsystem-for-linux/2-enable-and-install)
- Ubuntu (a Linux flavor)
	- [ubuntu.com/](https://ubuntu.com/) homepage
	- [Ubuntu](https://en.wikipedia.org/wiki/Ubuntu) on Wikipedia
- Help
	- [askubuntu.com](https://askubuntu.com/)
