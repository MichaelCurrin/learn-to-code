# Git

## What is Git?

> Git is a type of version control system (VCS) that makes it easier to track changes to files. For example, when you edit a file, git can help you determine exactly what changed, who changed it, and why. - [source](https://hackernoon.com/understanding-git-fcffd87c15a3)

- [Git docs](https://git-scm.com/doc)

Git is a command-line tool for managing files, maintaining history and who made the changes. This makes it easy to see when a bug or feature was introduced and by whom. 

When you make a change (such as add, remove or modify or more files), you have the chance to _commit_ the changes to version control. These can then be shared - typically by _pushing_ the changes to a remote repository (Github typically) and then _pulling_ the changes down onto another dev machine or a machine used for deployment.

Commits means you can choose to deploy a certain version of your code (sometimes marked with a _tag_ for ease. And roll back to a certain commit.

## Version control hosting services

You can use an online service to interact with a `git` repository and use that service to share your work publically or in a private team. A public project can optionally allow open-source contributions from the dev community.

Github is the most well-known, but there are few options. These tools work similar to Github:

- You can view and manage repos, including editing code.
- Users can be managed.
- They all work with `git` version control. 
- Available for free, with additional benefits on subscription.

See services below.

### Github

GitHub is a web-based hosting service for version control using Git. Mostly it is used for computer code. It offers all of the distributed version control and source code management functionality of Git, as well as adding its own features. Such as reviewing the code of other contributors.

- [Github guides](https://guides.github.com/) hosted by Github
- [Github pricing](https://github.com/pricing)

Github on the free tier lets you have unlimited repos and contributors on your projects (great for open source projects). You are limited to 3 contributors on private repos (previously this was zero, before the acquisition by Microsoft). You also get o

### BitBucket

- [bitbucket.org](https://bitbucket.org/) homepage.
- [Pricing](https://bitbucket.org/product/pricing).
- [Self-hosted](https://bitbucket.org/product/enterprise) option

### Gitlab

- [gitlab.com](https://gitlab.com) homepage.
- [Pricing](https://about.gitlab.com/pricing/).
- [Self-hosted](https://about.gitlab.com/pricing/#self-managed) option.


## Trunk-based development vs feature branches

A recommended strategy:

1. For new projects, start by making changes directly on `master` branch. 
    - If you are prototyping and it is not in production yet, this is fine. 
    - If there are multiple people working together, you can still use `master`. You should just do a rebase with `git pull --rebase` _before_ pushing your local commits. If you leave off the `--rebase` flag, you'll need a merge commit pulling in remote changes, which can be messy.
2. Once the project is more stable, use feature branches for changes.
    - Create a feature branch locally before committing or pushing changes. On Github, when editing a file, choose the new branch option and use a sensible name e.g. `feat-add-foo`. You might use a number (`docs-1`) or date (`docs-march-2020`) if there is no room to apply a sensible name.
    - You can still make changes on `master` directly. This is useful for changes to a few lines or one file, where a feature branch feels like unnecessary admin and where the risk is low.
    - You can even enforce a rule on Github to prevent editing directly on the `master` branch, requiring a pull request. 
        - This is useful to avoid contributors committing to `master` when that is unwanted. If you use automated tests (Github actions) and restrict a PR to only be mergeable when the tests pass, this also means that `master` will always be in a passing state (no work-in-progress or buggy work).

How to add branch protection rules:

- Go to Settings page for the repo, then Branches and add or edit a branch protection rule for `master`.
- _Require pull request reviews before merging_ - This might be good for working with collaborators or non-collaborator pull requests, however if this option is on it is also enforced for you as the repo owner. And since you cannot review your own pull request, it becomes impossible to merge a PR alone.
- _Require status checks to pass before merging_ - A more useful option that ensures all checks on commit pass before merging (more practically, the Pull Request's latest commit must pass the check).. This works well if you have Github Actions setup, such as linting and unit tests for a Python project, or Github Pages build check (which can run on a feature branch even if not actually deployey to a live site. You can check one or more check options below. I find sometimes that the same check can appear multiple times with slighltly different names, so this should be cleaned up manually sometimes.
- _Include administrators_ - I recommended keeping this ticked too, so that the rule applies to you as the owner.
