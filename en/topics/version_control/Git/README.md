# Git

## What is Git?

> Git is a type of version control system (VCS) that makes it easier to track changes to files. For example, when you edit a file, git can help you determine exactly what changed, who changed it, and why. - [source](https://hackernoon.com/understanding-git-fcffd87c15a3) 

Git is a command-line tool for managing files, maintaining history and who made the changes. This makes it easy to see when a bug or feature was introduced and by whom. 

When you make a change (such as add, remove or modify or more files), you have the chance to _commit_ the changes to version control. These can then be shared - typically by _pushing_ the changes to a remote repository (Github typically) and then _pulling_ the changes down onto another dev machine or a machine used for deployment.

Commits means you can choose to deploy a certain version of your code (sometimes marked with a _tag_ for ease. And roll back to a certain commit.

- Git homepage - [git-scm.com](https://git-scm.com/)


## Commands

See the Reference section on [Git docs](https://git-scm.com/doc).


## Branches

[learngitbranching.js.org](https://learngitbranching.js.org/)

### What is trunk-based development?

If you do all development on your `master` branch and commit directly to it, that is trunk-based development. This is convenient for small pieces of work or if you are working alone, as the admin of managing a feature branch and Pull Request might outweight the benefit of just getting a new change in.

### What is feature branch development?

Create a new branch starting from `master`, make changes (bug fixes or feature), add the changes as commits on your branch (keeping `master` clean) and then merge back to `master` when you are ready. The flow usually involves pushing the feature branch to Github, creating a Pull Request and getting it reviewed by others, then only after it has passsed reviews you merge the Pull Request (and therefore merging the feature branch to `master`. Even alone, it is still good practice to go through the Pull Request in the browser though you can't actually leave a review on your own Pull Request. It is usually safe to delete the feature branch after that. Any new development will probaby be done on a new branch name.

The advantange of a feature branch and Pull Request is that is all related work across many commits is grouped together. Which is easy to review before merging. Also Pull Requests do not get deleted even if feature branches do, so you can always go back to an old Pull Request and see what happened in it. 

It also makes it easier to manage work when multiple people are working on a project and their might be clashes. A Pull Request will put the new work on top of `master` (and previosuly merged Pull Requests). While if everything is doing development in `master`, you end up with interleaving commits by different people making it harder to view and rollback.

### A recommended strategy

1. For new projects, start by making changes directly on `master` branch. 
    - If you are prototyping and it is not in production yet, this is fine. 
    - If there are multiple people working together, you can still use `master`. You should just do a rebase with `git pull --rebase` _before_ pushing your local commits. If you leave off the `--rebase` flag, you'll need a merge commit pulling in remote changes, which can be messy.
2. When the project is more stable if there is risk in deploying or the changes are to big to manage on `master`, then you can choose to start using a feature branch for each feature (or bug). As covered below.
    - Create a feature branch locally before committing or pushing changes. On Github, when editing a file, choose the new branch option and use a sensible name e.g. `feat-add-foo`. You might use a number (`docs-1`) or date (`docs-march-2020`) if there is no room to apply a sensible name.
    - You can still make changes on `master` directly. This is useful for changes to a few lines or one file, where a feature branch feels like unnecessary admin and where the risk is low.
    - You can even enforce a rule on Github to prevent editing directly on the `master` branch, requiring a pull request. 
        - This is useful to avoid contributors committing to `master` when that is unwanted. If you use automated tests (Github actions) and restrict a PR to only be mergeable when the tests pass, this also means that `master` will always be in a passing state (no work-in-progress or buggy work).

### How to add branch protection rules

- Go to Settings page for the repo, then Branches and add or edit a branch protection rule for `master`.
- _Require pull request reviews before merging_ - This might be good for working with collaborators or non-collaborator pull requests, however if this option is on it is also enforced for you as the repo owner. And since you cannot review your own pull request, it becomes impossible to merge a PR alone.
- _Require status checks to pass before merging_ - A more useful option that ensures all checks on commit pass before merging (more practically, the Pull Request's latest commit must pass the check).. This works well if you have Github Actions setup, such as linting and unit tests for a Python project, or Github Pages build check (which can run on a feature branch even if not actually deployey to a live site. You can check one or more check options below. I find sometimes that the same check can appear multiple times with slighltly different names, so this should be cleaned up manually sometimes.
- _Include administrators_ - I recommended keeping this ticked too, so that the rule applies to you as the owner.
- Note that on the free tier that some you cannot apply _any_ branch protection rules. You can add private collaborators, but make sure you trust them as you can't stop them from deleting branches, force-pushing to master or adding to master without a Pull Request.
       
### Squash merging

Another approach is to do trunk-based development but put a large amount of changes in each commit. Either by adding a lot of changes before committing, or squashing a bunch of commits (on master or a feature branch) into a single commit. You can even use the Squash Merge option on a Pull Request.

The problem is that you lose the granularity of changes made and you can't roll back to a certain point in the change feature or see when a bug was introduced, since everything is reduce to a single commit with one message explaning the whole feature.


## Tagging

The git tool and the online version control systems let you add a _tag_ to a specific commit. This is usually to mark a certain commit on `master` with a label such as `v1.2.0`. This is a way to mark a working state of your code with a milestone, usually including one or more significant changes since the previous tag.

A tag is immutable (cannot be edited), though it can be deleted and recreated (both locally and on Github), though you should generally think of a tag as permanent.

While deploying `master` will give you the latest changes, deploying a certain _tag_ allows you to pick a commit on `master` that is safe (considered ready for deployment).

Tagging also helps when making your project installable as a versioned package. If you mark your code as version `v1.2.0` and publish that code on a Ruby or Python package index under the same version, then other projects can install that version and choose to lock their project to use a specific tag. Which means you can keep adding to `master` and keep creating new tags which might cause breaking changes for backwards-compatibility, but other projects will only get a newer tag if they choose to. Say you release `v2.0.0` with a breaking changing, then another project can update their package list to pull in `v2.0.0`. But the project owners will make sure it works with their project properly before committing to the new locked version.

Omitting a tag version when installing external dependencies means the latest version on `master` will be used whenever you deploy or install - this is fine for some hobby projects but introduces risk for more important projects that people rely on (whether the end-product or the code).
