Bootstrap-Site
==============

This is a Bootstrap based website template

http://dev.mineuk.com/


Copyright © [Graham Campbell 2013](https://github.com/GrahamCampbell)  
Copyright © [Panique 2012-2013](https://github.com/panique)  
Copyright © [Twitter 2011-2013](https://github.com/twitter)  



## What Is Bootstrap Website?

Bootstrap Website is a [Bootstrap](https://github.com/twitter/bootstrap) based website template featuring a protected members section.  
Bootstrap Website includes some code by Panique. His original repository can be found [here](https://github.com/panique/php-login).  
Bootstrap Website is licensed under the MIT license available [here](https://github.com/GrahamCampbell/Bootstrap-Site/blob/master/LICENSE.md).  
Bootstrap Website, in its current form, it is maintained by [Graham Campbell](https://github.com/GrahamCampbell).  



## Compiling The Source

The latest and greatest source can be found on [GitHub](https://github.com/GrahamCampbell/Bootstrap-Site).  

* It is not necessary to compile the source, but you will need to setup the sql server for logins.  
* There is an option in the config to disable logins and/or member sign up.  
* PHP 5.3.2+ or php 5.4.x is required.  


## Updating Your Fork

Before submitting a pull request, you should ensure that your fork is up to date.  

You may fork the Bootstrap Website:  

    git remote add upstream git://github.com/GrahamCampbell/Bootstrap-Site.git

The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as [P4Merge](http://perforce.com/product/components/perforce_visual_merge_and_diff_tools).  

You can then update the branch:  

    git pull --rebase upstream master
    git push --force origin <branch_name>

Once it is set up, run `git mergetool`. Once all conflicts are fixed, run `git rebase --continue`, and `git push --force origin <branch_name>`.  
