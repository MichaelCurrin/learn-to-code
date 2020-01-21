# R

## What is R?

> R is a programming language and free software environment for statistical computing and graphics... Source: [Wikipedia](https://en.wikipedia.org/wiki/R_(programming_language))

> R is a statistical computing language. It has lots of libraries for uploading and cleaning data sets, running statistical procedures, and making graphs. Source: [learnxinyminutes](https://learnxinyminutes.com/docs/r/)

### What kind of stats?

According to [Wikipedia](https://en.wikipedia.org/wiki/R_(programming_language)), _R_ and its libraries include the following stats techniques:

- linear and nonlinear modeling
- classical statistical tests
- time-series analysis
- classification
- clustering

### Why R?

> One of R’s strengths is the ease with which well-designed publication-quality plots can be produced... Source: [r-project](https://www.r-project.org/about.html)

## Resources

- [Official site](https://www.r-project.org/)
- [R Programming](https://en.wikibooks.org/wiki/R_Programming) guide on Wikibooks
- Tutorials
    - [Learn R in Y minutes](https://learnxinyminutes.com/docs/r/)
    - [R Tutorial ](https://www.statmethods.net/r-tutorial/index.html)
    - [R Tutorial for Beginners: A Quick Start-Up Kit](https://www.datasciencecentral.com/profiles/blogs/r-tutorial-for-beginners-a-quick-start-up-kit)
- Courses
    - Codecademy - [Learn R](https://www.codecademy.com/learn/learn-r)
    - Datacamp - [Free Introduction to R](https://www.datacamp.com/courses/free-introduction-to-r)
    - Udemy - [R Courses](https://www.udemy.com/topic/r-programming-language/)
    - Coursera - [R Programming](https://www.coursera.org/learn/r-programming) free introductory course.
    - Edx - [R Programming courses](https://www.edx.org/learn/r-programming)
- Blog
    [Data Feed Toolbox](http://datafeedtoolbox.com/)

## Download

### Programming language

_R_ can be installed on Windows, Linux and Mac. From the official site, there is a link to a [download](https://cran.r-project.org/mirrors.html) page.

See also this guide - [How to install R on Windows, Mac OS X and Ubuntu](https://www.datacamp.com/community/tutorials/installing-R-windows-mac-ubuntu).

Using a package manager:

- Linux
    ```sh
    $ sudo apt-get update
    $ sudo apt-get install r-base
    ```
- macOS
    ```sh
    $ brew install r
    ```

### IDE

Download [R Studio](https://rstudio.com/products/rstudio/download/) - a programming environment for R.

## How to run

### IDE

Open a script in R Studio and press the run button.

### Online

- [rdrr.io](https://rdrr.io/snippets/)
- [repl.it](https://repl.it/languages/rlang)
- [Tutorials Point](https://www.tutorialspoint.com/execute_r_online.php)

### Command-line

#### Interactive mode

```sh
$ r
>
```

Exit with `CTRL+D` or `q()`.

#### Scripts

Given executable script `main.r`:

```r
#!/usr/bin/env Rscript
sayHello <- function(){
   print('hello')
}

sayHello()
```

Execute using one of these commands:

```sh
Rscript main.r
./main.r
```

You can also run one-liner commands without a script file.

```sh
Rscript -e "getwd()"

Rscript -e 'install.packages(c("package1", "package2"))'
```

## Example code

These examples are copied from the [Online](#online) section's links.


```r
## Draw a histogram.
x <- rnorm(1000)
hx <- hist(x, breaks=100, plot=FALSE)
plot(hx, col=ifelse(abs(hx$breaks) < 1.669, 4, 2))
```

```r
## Print greeing and make two plots.
library(ggplot2)

# Use stdout as per normal...
print("Hello, world!")

# Use plots...
plot(cars)

# Even ggplot!
qplot(wt, mpg, data = mtcars, colour = factor(cyl))
```

```r
## Generate a random sample of 100 numbers from a normal distribution
## with mean 10 and standard deviation of 2
oneHundred <- rnorm(100, mean=10, sd=2)

print(typeof(oneHundred))
print(median(oneHundred))
print(mean(oneHundred))

print(oneHundred)

hist(oneHundred, col="red")
```

```r
## Import external CSV
externalData <- read.csv("https://data.nasa.gov/resource/y77d-th95.csv")

print(head(externalData))

## Get average of a column within a dataset with multiple columns and omit NA rows:
print(mean(externalData$mass,na.rm=TRUE))
```

## Packages

Packages are stored on the CRAN - the [Comprehensive R Archive Network](https://cran.r-project.org/).

Download then load a package.

```r
install.packages("data.table")
require(data.table)
```
