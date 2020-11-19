# Merge Repositories While Keeping Histories
> Guide on how to merge two git repos into a new one while keeping the tracking history of the original repos.

**TD;DR**

1. Create a new repo locally with git.
1. Add a remote for old repo A
1. Merge it into the new repo, but with a flag to allow unrelated histories (since their initial commits are different but we are happy to stick the merged in repo's history on top of the current history.
1 Repeat steps 2 and 3 for old repo B etc.


(oldRepoA and oldRepoB)
Note: this lesson requires git version 2.11 or higher, for access to the `--allow-unrelated-histories` flag on git merge. This is fine on Debian. But Linux lite and certain Ubuntu distributions only have older versions of git at time of writing, so you might want to add alternative sources for your package updates.

With thanks to these articles for the approach and commands which I based this lesson on:
 - [Merging Two Git Repositories Into One Repository Without Losing File History](https://saintgimp.org/2013/01/22/merging-two-git-repositories-into-one-repository-without-losing-file-history/)
 - [Merging Two Git Repositories](https://blog.doismellburning.co.uk/merging-two-git-repositories/) - in particular for `--allow-unrelated-histories` flag

There is probably a way to do the same thing in the lesson using rebase to make two repos appear to share a sequential history when merged. But I am wary of doing a rebase without any experience with that.


1. Create the newRepo on GitHub/Bitbucket and create a REAMD.md file there.

2. Get a local copy of it.

    ```bash
    # This is my preferred directory.
    $ cd ~/repos
    $ git clone git@github.com:myUsername/newRepo.git
    ```
    You should have now the origin remote pointing to that remote repo URI.

3. Prepare oldRepoA for merging

    This step is optional but is recommended. It ensures the contents of repo oldRepoA are moved to its own directory named oldRepoA. This is especially useful to do _before_ the merge, since any files with shared names across the repos (e.g. README.md) will be placed in separate directories so they will not conflict.

    ```bash
    $ git clone git@github.com:myUsername/oldRepoA.git
    # Go to the repo.
    $ cd oldRepoA
    # Create a dir of the same name
    $ mkdir oldRepoA
    # Move everything in oldRepoA/ to oldRepoA/oldRepoA/, though you will get a harmless error
    # saying the dir could not be moved into itself.
    $ git mv * oldRepoA/
    # Hidden files need to moved separately.
    $ git mv .gitignore oldRepoA/
    $ git commit -m 'Move all oldRepoA objects into oldRepoA dir.'
    $ git push
    ```

4. Add oldRepoA as remote on the newRepo

    ```bash
    $ cd ~/repos/newRepo
    # -f flag will do a fetch
    $ git remote add -f oldRepoA git@github.com:myUsername/oldRepoA.git
    ```

5. Merge oldRepoA into newRepo

    ```bash
    # You could get an error that the histories are different with no commits in common, therefore
    # add a flag to ignore this.
    $ git merge oldRepoA/master --allow-unrelated-histories
    ```
    All the objects in oldRepoA repo will now be in the top level of the newRepo repo, with their tracking
    history. They will still exist in oldRepoA.

6. Repeat steps 3 to 5 for oldRepoB.

7. Optionally view the commit history tree visually.

    Example ouput:

    ```bash
    $  log --graph --decorate --pretty=oneline --abbrev-commit
    *   10473f8 (HEAD -> master, origin/master) Merge remote-tracking branch 'oldRepoB/master'
    |\
    | * e21ea58 (oldRepoB/master) Move all objects in oldRepoB to oldRepoB dir.
    | * 3498d95 Create myFile.py
    | * 1fd7a6c Initial commit # oldRepoB
    *   696c2f5 Merge remote-tracking branch 'oldRepoA/master'
    |\
    | * 48e8819 (oldRepoA/master) Move all object in oldRepoA to oldRepoA dir.
    | * 5fb5e05 create file2.py
    | * c0aed49 create file1.py
    | * c0ae124 Initial commit # oldRepoA
    * 379a6bd Initial commit # newRepoA
    ```

8. Continue working in newRepo

    In newRepo you can continue to update files, do commits and push.

    You will probably want to combine the README.md, LICENCE and .gitignore files from the subdirectories into single files for the new repo.

    ```bash
    $ git push -u origin master
    ```

9. Optionally delete the local and remote copies of your old repos which are no longer needed.
