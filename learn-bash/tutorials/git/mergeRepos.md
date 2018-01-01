# Merge Repositories While Keeping Histories

My guide on how to merging two git repos (oldRepoA and oldRepoB) into a new one (newRepo) while keeping the
tracking history of the original repos.

Thanks to approach and commands from these articles:
 - [Merging Two Git Repositories Into One Repository Without Losing File History](https://saintgimp.org/2013/01/22/merging-two-git-repositories-into-one-repository-without-losing-file-history/)
 - [Merging Two Git Repositories](https://blog.doismellburning.co.uk/merging-two-git-repositories/) - in particular for the flag to allow unrelated histories


1. Clone the target main repo after choosing one or creating it on Github/Bitbucket.

    ```bash
    # Make the repos dir or choose your preferred dir.
    $ cd ~/repos
    $ git clone git@github.com:myUsername/newRepo.git
    ```
    You should have now the remote origin pointing to that remote repo URI.

    Optionally create README.md describing your repo.
    ```bash
    $ cd newRepo
    $ touch README.md
    $ git commit README.md -m "Create README.md"
    ```

2. Prepare oldRepoA for merging

    This step is optional.

    Follow this step if you want to oldRepoA to be in its own dir called oldRepoA in the newRepoA 
    and if you prefer to the moving before the merge when it is simpler.

    ```bash
    $ git clone git@github.com:myUsername/oldRepoA.git
    # Go to the repo.
    $ cd oldRepoA
    # Create a dir of the same name
    $ mkdir oldRepoA
    # Move everything in oldRepoA/ to oldRepoA/oldRepoA/, though you will get a harmless error 
    saying the dir could not be moved into itself.
    $ mv * oldRepoA
    $ git add .
    $ git commit -m "Move all oldRepoA objects into oldRepoA dir.
    $ git push
    ```
  
    Commit message will be something like `Merge remote-tracking branch 'oldRepoA/master'`.

    Using this style, each old repo will have its README.md file in the same subdir as other files.
    So you can use one short top-level README.md file for the newRepo which can describe the repo.
    
    Consider that your rules in .gitignore might need modification at this point, if they are 
    relative to the top level dirs which are now one level down.

3. Add oldRepoA as remote on the newRepo

    ```bash
    $ cd ~/repos/newRepo
    # -f flag will do a fetch
    $ git remote add -f oldRepoA git@github.com:myUsername/oldRepoA.git
    ```

4. Merge oldRepoA into newRepo

    ```bash
    # Use no fastforward flag to preserve history (I usually do this for merginng branches, 
    # not sure if it makes a difference when merging repos).
    # You will get an error that the histories are different with no commits in common, so 
    # add a flag to ignore this.
    $ git merge oldRepoA/master --no-ff --allow-unrelated-histories
    ```
    All the objects in oldRepoA will now be in the top level of newRepo, with their tracking
    history. They still exist in oldRepoA.

5. Repeat steps 2 to 4 for oldRepoB.

6. View the commit history tree visually.

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

7. Continue working in newRepo

    In newRepo you can continue to update files, do commits and push.
    
    ```bash
    $ git push -u origin master
    ```
    
    Delete the old repos on Github and on your machine, if you are sure you don't need them anymore.
