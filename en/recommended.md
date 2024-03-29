# 🌐 Recommended
> External links to repos, websites and tools which I enjoy and would like share with others


## 🤩 Popular repos

Lists of GitHub repos, sorted by various criteria.

- Repos I have [starred](https://github.com/MichaelCurrin?tab=stars)
- [Most starred](https://github.com/search?q=stars%3A%3E100&s=stars&type=Repositories) on all GitHub.
- [Most forked](https://github.com/search?o=desc&q=stars:%3E1&s=forks&type=Repositories) on all GitHub.
- [Git most wanted](http://gitmostwanted.com/) - covers the most interesting repos on [GH Archive](https://www.gharchive.org/)

Some links above sourced from [here](https://stackoverflow.com/questions/19855552/how-to-find-out-the-most-popular-repositories-on-github).

## ⭐ My favorite websites and blogs

- [OpenSource.com](https://opensource.com)
- [Free Code Camp](http://freeCodeCamp.org)
- [dev.to](https://dev.to)
- [Medium.com](https://medium.com) topics
    - [Programming](https://medium.com/topic/programming)
    - [Software engineering](https://medium.com/topic/software-engineering)
    - [Data Science](https://medium.com/topic/data-science)
- [Towards Data Science](https://towardsdatascience.com/) (see topics like Data Science, AI, Python, Machine Learning)
- [Flowing Data](https://flowingdata.com)


## 🛠 Online tools

### Git Pod

- [GitPod.io](https://gitpod.io)

A free cloud-based IDE that runs GitHub repos. Edit code with a VS Code editor, run in the terminal and save your changes to GitHub. Also includes a way to view and manager Pull Requests. Runs in a container environment and can be configured with a Git Pod file in your repo.

### Python Anywhere

- [PythonAnywhere.com](https://pythonanywhere.com)

Free Python hosting. Includes web server with easy configuration along with a MySQL database if you need. Run cron jobs, edit files editing and use consoles for Python, Bash and SQL.

### GitHub pages

- [pages.github.com](https://pages.github.com/)

Free hosting for static sites built with Jekyll or plain HTML

### StackEdit

- [StackEdit.io](https://stackedit.io/) site

Edit markdown files on GitHub using your browser.

- Features
- Import your GitHub repos
	- The editor makes it easy to apply formatting using buttons rather than typing it up.
	- It includes a preview alongside the edit view, unlike GitHub's editor which switches between edit and preview modes.
	- It has buttons for bold, italics, hyperlink, etc.
	- It autosaves every few minutes (committing any changes), which takes the friction out of saving files.
- Edit and sync files on the following platforms
	- Dropbox
	- GitHub - When you link these, you can choose to include or exclude private repo access.
	- Gitlab
	- Google Drive
- How to edit a repo:
	1. Go to [stackedit.io](https://stackedit.io/). You will start at a welcome page.
	2. Sign in with GitHub.
	3. From the menu on the right, select Workspaces.
	4. Select "Add a GitHub workspace".
	5. Enter a repo path. Optionally set folder path and branch.
	6. You will see your folder tree on the left. Note that files will give a data error initially while content is being pulled in.
	7. Edit files. You do not have to press save - changes will be saved and synced for you and these will appear as commits in GitHub.
	8. You may add more repos using steps above and then switch between then.

Usage notes:

- You can undo and redo and the keyboard shortcuts work for this.
- Indentation is done with tabs.
- The `.md` extension will be hidden.
- Files which are not markdown files will be hidden from the folder view.
- If a file is deleted, it goes to Trash (and in GitHub to a trash folder).
- If a file is renamed, StackEdit will actually delete the file and create a few file at the commit level, so you will lose history within a file.
- Although the Welcome file shows in the tree, it is not actually stored in the repo. You can delete it from the editor view, but it can be useful to keep open as a quick reference.
- For help, select Table of Contents from the menu on the right.
- You do not have save - it autosaves for you. Auto sync defaults to 90 seconds and the minimum is 60 seconds. Every sync which contains changes causes a commit, so you might want to make this less frequent like every 5 minutes. You can also click the sync button in the top right to force a sync, in case you need to view the results on GitHub.
- Click Settings in the right menu. You can override default settings.
- Use <kbd>CTRL</kbd>+<kbd>SHIFT</kbd>+<kbd>V</kbd> in the docs to paste _without_ formatting - I found this necessary to avoid unnecessary open lines when copying code from an IDE into a markdown codeblock. When not using a codeblock, you may want to keep the pasted line breaks, as the double spacing is needed for line breaks to render in Markdown.


### Screen sharing

- [screen.so](https://screen.so) - Like Zoom but different. Works on web and as a downloaded desktop app.


### Code challenges

- [leetcode.com](https://leetcode.com/)
    - Complete coding challenges online in your chosen language. To help you with alogorithms and interviews.
    - > LeetCode is the best platform to help you enhance your skills, expand your knowledge and prepare for technical interviews.

### Mentoring

#### Coding projects

- Code Mentor
    - [codementor.io/](https://www.codementor.io/) homepage
    - [Dev Projects](https://www.codementor.io/projects)
        - Dev Projects is a community with free real-world projects in multiple coding languages and tech stacks. The website also includes solutions from other developers and discussion board for all users to participate in. Apart from the projects, solutions, and discussion board, users can also reach out to mentors on Code Mentor for paid help. However, the latter bit is not compulsory or forced.

#### Exercism

- [exercism.io/](https://exercism.io/)

> Code practice and mentorship for everyone
>
> Level up your programming skills with 3,423 exercises across 52 languages, and insightful discussion with our dedicated team of welcoming mentors. Exercism is 100% free forever.

### Free Code Camp

- Learn to code at home.
- Build projects.
- Earn certifications.

> Since 2014, more than 40,000 freeCodeCamp.org graduates have gotten jobs at tech companies including:

- [freecodecamp.org](https://www.freecodecamp.org) homepage.
- [Learn](https://www.freecodecamp.org/learn) page - Curriculum of tutorials by language and topic 


## Database GUI tools

- Postgres
    - Postico
        - [Homepage](https://eggerapps.at/postico/)
        - > A Modern PostgreSQL Client for the Mac
    - pgAdmin 
    - See also [article](https://retool.com/blog/best-postgresql-guis-in-2020/).
- MySQL
    - MySQLWorkbench
        - [Homepage](https://www.mysql.com/products/workbench/)
        

## API testing

Easy way to do GET or POST request with data through an application with a user-friendly GUI.

- [Insomnia](https://insomnia.rest/)
	- Downloadable
	- Do API requests from the application.
- [Postman](https://www.postman.com/)
	- Downloadable
	- Do API requests from the application.
- VS Code extensions
    - [REST Client](https://marketplace.visualstudio.com/items?itemName=humao.rest-client)
    - [Postman Runner](https://marketplace.visualstudio.com/items?itemName=eridem.vscode-postman) - Run Postman tests directly from your VSCode. There are similar "Postman" extensions in the marketplace.
    - [reVerb](https://marketplace.visualstudio.com/items?itemName=reverb-api.reverb) - "it's like Postman"


## Host your local server on temporary public IP 

Using Ngrok

Use Ngrok to access your web server publically on a temporary, public, random URL on the Ngrok domain.

Example URL:

```
92832de0.ngrok.io
```

### Resources

- [ngrok.com/](https://ngrok.com/) homepage
	> - Public URLs for exposing your local web server
	> - Public URLs for sending previews to clients.
	> - Public URLs for SSH access to your Raspberry Pi.
- [Product page](https://ngrok.com/product)
	- > ngrok exposes local servers behind NATs and firewalls to the public internet over secure tunnels.
	- The sample commands and feature list there is great.
- [Docs](https://ngrok.com/docs)

### About

Normally if you want to share you application on the network, you find your IP and share on a port then connect from another device on the network. You also have to make sure you are sharing on `0.0.0.0` not `localhost` and your firewall allows the port.

Now Ngrok makes it easy to test your web server or mobile app backend without setting up a firewall to allow ports, or setting up an IP or port forwarding for access publically. Plus you get the benefit of SSL - for HTTPS domain.

Ngrok runs as an application locally and connects with the Ngrok servers, then any visitors who come to the URL on the Ngrok site get forward to your application, but only on the port you allow and while both Ngrok and your application are running.

There are some limitations, especially on the free tier - like the URL is random each time and only one user can connect at a time.

### Setup

1. [Signup](https://ngrok.com) for an account.
2. [Download](https://ngrok.com/download) the binary executable.
	- Example path: `/usr/local/bin/ngrok`
3. Configure Ngrok with your account credentials.
	- Set token.
		```sh
		ngrok authtoken <YOUR_AUTHTOKEN>
		```
	- See the [Configuration docs](https://ngrok.com/docs#config-location). This describes the OS-specific location of the one-line config file set using the command above.

### Usage

1. Start your webserver. e.g.
	```sh
	$ python3 -m http.server 8000
	```
2. Start Ngrok. e.g.
	```sh
	$ ngrok http 8000
	```
3. You'll be shown a random URL (e.g. `92832de0.ngrok.io`). You can access this from the same or another device - from anywhere in the world. Sample output in the terminal:
	```
	ngrok by @inconshreveable

	Tunnel Status                 online
	Version                       2.0/2.0
	Web Interface                 http://127.0.0.1:4040
	Forwarding                    http://92832de0.ngrok.io -> localhost:8000
	Forwarding                    https://92832de0.ngrok.io -> localhost:8000

	Connnections                  ttl     opn     rt1     rt5     p50     p90
				      0       0       0.00    0.00    0.00    0.00
	```
4. <kbd>CTRL+C</kbd> to stop the server.

A sample of the CLI help:

```sh
$ ngrok
```
```
NAME:
   ngrok - tunnel local ports to public URLs and inspect traffic

DESCRIPTION:
    ngrok exposes local networked services behinds NATs and firewalls to the
    public internet over a secure tunnel. Share local websites, build/test
    webhook consumers and self-host personal services.
    Detailed help for each command is available with 'ngrok help <command>'.
    Open http://localhost:4040 for ngrok's web interface to inspect traffic.
...
```
