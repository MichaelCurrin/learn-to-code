# 🌐 Recommended
> External links to repos, websites and tools which I enjoy and would like share with others.


## 🤩 Popular repos

Lists of Github repos, sorted by various criteria.

- Repos I have [starred](https://github.com/MichaelCurrin?tab=stars) 
- [Most starred](https://github.com/search?q=stars%3A%3E100&s=stars&type=Repositories) on all Github.
- [Most forked](https://github.com/search?o=desc&q=stars:%3E1&s=forks&type=Repositories) on all Github.
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

A free cloud-based IDE that runs Github repos. Edit code with a VS Code editor, run in the terminal and save your changes to Github. Also includes a way to view and manager Pull Requests. Runs in a container environment and can be configured with a Git Pod file in your repo.

### Python Anywhere

- [PythonAnywhere.com](https://pythonanywhere.com)

Free Python hosting. Includes web server with easy configuration along with a MySQL database if you need. Run cron jobs, edit files editing and use consoles for Python, Bash and SQL.

### Github pages

- [pages.github.com](https://pages.github.com/)

Free hosting for static sites built with Jekyll or plain HTML

### StackEdit

- [StackEdit.io](https://stackedit.io/) site

Edit markdown files on Github using your browser. 

- Features
- Import your Github repos
	- The editor makes it easy to apply formatting using buttons rather than typing it up. 
	- It includes a preview alongside the edit view, unlike Github's editor which switches between edit and preview modes. 
	- It has buttons for bold, italics, hyperlink, etc.
	- It autosaves every few minutes (committing any changes), which takes the friction out of saving files.
- Edit and sync files on the following platforms
	- Dropbox
	- Github - When you link these, you can choose to include or exclude private repo access.
	- Gitlab
	- Google Drive
- How to edit a repo:
	1. Go to [stackedit.io](https://stackedit.io/). You will start at a welcome page.
	2. Sign in with Github.
	3. From the menu on the right, select Workspaces.
	4. Select "Add a Github workspace".
	5. Enter a repo path. Optionally set folder path and branch.
	6. You will see your folder tree on the left. Note that files will give a data error initially while content is being pulled in.
	7. Edit files. You do not have to press save - changes will be saved and synced for you and these will appear as commits in Github.
	8. You may add more repos using steps above and then switch between then.

Usage notes:

- You can undo and redo and the keyboard shortcuts work for this.
- Indentation is done with tabs.
- The `.md` extension will be hidden.
- Files which are not markdown files will be hidden from the folder view.
- If a file is deleted, it goes to Trash (and in Github to a trash folder).
- If a file is renamed, StackEdit will actually delete the file and create a few file at the commit level, so you will lose history within a file.
- Although the Welcome file shows in the tree, it is not actually stored in the repo. You can delete it from the editor view, but it can be useful to keep open as a quick reference.
- For help, select Table of Contents from the menu on the right.
- You do not have save - it autosaves for you. Auto sync defaults to 90 seconds and the minimum is 60 seconds. Every sync which contains changes causes a commit, so you might want to make this less frequent like every 5 minutes. You can also click the sync button in the top right to force a sync, in case you need to view the results on Github.
- Click Settings in the right menu. You can override default settings.
- Use `CTRL+SHIFT+V` in the docs to paste *without* formatting - I found this necessary to avoid unnecessary open lines when copying code from an IDE into a markdown codeblock. When not using a codeblock, you may want to keep the pasted line breaks, as the double spacing is needed for line breaks to render in Markdown.


## API testing

Easy way to do GET or POST request with data through an application with a user-friendly GUI.

- [Insomnia](https://insomnia.rest/)
	- Downloadable
	- Do API requests from the application.
- [Postman](https://www.postman.com/)
	- Downloadable
	- Do API requests from the application.

## Public URL testing with Ngrok

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

There are some limitations especially on the free tier - like the URL is random each time and only one user can connect.


### Setup

1. [Signup](https://ngrok.com/) for an account.
2. [Download](https://ngrok.com/download) the binary executable.
	- Example path: `/usr/local/bin/ngrok`
3. Configure Ngrok with your account credentials.
	- [Configuration docs](https://ngrok.com/docs#config-location)

### Usage

1. Start your webserver. e.g.
	```sh
	$ python3 -m http.server 8000
	```
2. Start Ngrok. e.g.
	```sh
	$ ngrok http 8000
	```
3. You'll be shown a URL - access this from the same or another device - from anywhere in the world.
4. <kbd>CTRL+C</kbd> to stop the server.
	
Command help sample:

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
