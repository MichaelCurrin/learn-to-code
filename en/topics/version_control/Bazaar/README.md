# Bazaar

## About

- Homepage: https://bazaar.canonical.com/en/
    > Bazaar is a version control system that helps you track project history over time and to collaborate easily with others.

Before I knew about `git`, I learnt to use Bazaar at work. Bazaar works on a _centralized_ version control system, so you have to be online to make commits. And branching isn't so nice. So I'll probably never go back to Bazaar. But here are notes for others interested.

Note that the `master` branch in `git` is called _trunk_ in Bazaar.


## Common commands

```sh
bzr status

bzr log -l2

bzr update

bzr diff
bzr diff PATH

bzr commit -m "My commit message"

bzr revert PATH

bzr ignore 
```

```sh
bzr whoami --email
```
