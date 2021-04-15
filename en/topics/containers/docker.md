# Docker


## Resources

- Wikipedia page
    - [Docker_(software)](https://en.wikipedia.org/wiki/Docker_(software))
        > Docker is a set of platform as a service products that uses OS-level virtualization to deliver software in packages called containers. Containers are isolated from one another and bundle their own software, libraries and configuration files; they can communicate with each other through well-defined channels.
- Docker site
    - [docker.com](https://docker.com) homepage
        > Docker: Empowering App Development for Developers
- Docker docs
    - [docs.docker.com](https://docs.docker.com/) homepage
    - [Download and install](https://docs.docker.com/get-docker/) guide.
    - [Samples](https://docs.docker.com/samples/)
    - References
        - [Build](https://docs.docker.com/engine/reference/commandline/build/)
        - [CMD](https://docs.docker.com/engine/reference/builder/#cmd)
- Find images
    - Docker hub
        - [https://hub.docker.com/](https://hub.docker.com/)
            > Docker Hub is the world's easiest way to create, manage, and deliver your teams' container applications.
        - Search for existing docker images to download and use.
        - Create a profile and upload your own.
    - Popular Docker images as provided on the docs
        - [Library references](https://docs.docker.com/samples/#library-references)
- Tutorials
    - Youtube video: [you need to learn Docker RIGHT NOW!! // Docker Containers 101](https://www.youtube.com/watch?v=eGz9DS-aIeY)
    - [Docker for beginners](https://github.com/docker/labs/tree/master/beginner/) (found through Docker docs)
    - [Best practices for writing Dockerfiles](https://docs.docker.com/develop/develop-images/dockerfile_best-practices/)


See also my own project with set up intructions, commands to run and sample projects.

- [MichaelCurrin/docker-quickstart](https://github.com/MichaelCurrin/docker-quickstart)


## Install Docker

Go to the [Get Docker](https://docs.docker.com/get-docker/) page.

You'll see links to instructions for macOS, Windows or Linux.

### macOS

To got this page:

- [Install Docker Desktop on Mac](https://docs.docker.com/docker-for-mac/install/)

For macOS there is a file to download from the browser. Drag the downloaded `Docker.app` to your _Applications_ as per the install instuctions and you'll get Docker app.

This install includes the `docker` CLI and the Docker app - the latter docks as an icon at the top of the screen and allows functionality like signing into Docker hub, changing Kubernetes environment.

### Linux

Follow instructions here

- [Debian](https://docs.docker.com/engine/install/debian/)
- [Ubuntu](https://docs.docker.com/engine/install/ubuntu/)
