# Clone URLs
> Approaches to cloning GitHub repos

Ensure you have [git](../Git/) installed first.


## Methods

Here are the options available on a GitHub repo to clone it:


### HTTPS

Use a repo's _https_ URL. e.g.

```sh
$ git clone https://github.com/MichaelCurrin/learn-to-code.git
```

- This way does not need any setup.
- It authenticates with HTTPS.
- For creating the clone of a public repo (yours or someone elses) and later pulling in updates, no credentials are needed.
- If the repo is private, you'll need to use your GitHub username and password.
- When you _push_ changes, each time you'll need to supply your GitHub username and password.
- It is recommended to set up [two-factor authentication](#two-factor-authentication) for you account - you'll then need to use a one-time pin when you do updates.
- This approach can get annoying as it interrupts your workflow. So you can set up `git` to cache the credentials for a period such as 5 minutes. Or go with [SSH](#ssh) approach below.


### SSH

Use a repo's SSH URL. e.g.

```sh
$ git@github.com:MichaelCurrin/learn-to-code.git
```

#### Setup

This approach requires more setup, though this only has to be done once:

1. Install SSH server locally.
2. Create SSH key.
3. Add SSH key to your account's GitHub SSH keys, with a name to identify the machine. This will apply to all repos relating to your GitHub account.

#### Usage

- When using SSH URL, you can clone or update any public or private URLs and push changes to your repos.
- But _without_ ever having to enter your username and password or one-time pin.

### Download

You can also do a once-off download of a repo - this does not need `git`.

Use the download URL on GitHub. e.g.

```
https://github.com/MichaelCurrin/learn-to-code/archive/master.zip
```

And unzip the file.


## Two-factor authentication

When you set up two-factor authentication (_2FA_), you will use your mobile device and a short-lived access code to control access to your account.

This is recommended to set up - it means that even if someone knows your username and uses your password by brute-force trial and error or stealing in, they still can't get into your GitHub account or push to your repos with HTTPS URLs unless they actually have your mobile device.

Once you set up 2FA, your account will be more secure including HTTPS pushes. So at the point HTTPS and SSH URLs are both secure but SSH URLs is just more convenient to use.


## Change remote

You can change a repo's remote URL locally - you can switch between HTTPS or SSH, or switch to a new repo name or switch between GitHub and Bitbucket.

```sh
$ git remote set-url origin <NEW_URL>
```
