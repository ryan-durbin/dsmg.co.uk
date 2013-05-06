<div class="page-header">
  <h1><?php echo $page_title; ?></h1>
</div>

<h2>What Is Bootstrap Website?</h2>
<p>Bootstrap Website is a <a href="https://github.com/twitter/bootstrap">Bootstrap</a> based website template featuring a protected members section.</p>
<p>Bootstrap Website includes some code by Panique. His original repository can be found <a href="https://github.com/panique/php-login">here</a>.</p>
<p>Bootstrap Website is licensed under the MIT license available <a href="https://github.com/GrahamCampbell/Bootstrap-Website/blob/master/LICENSE.md">here</a>.</p>
<p>Bootstrap Website, in its current form, it is maintained by <a href="https://github.com/GrahamCampbell">Graham Campbell</a>.</p>

</br>

<h2>The Source Code</h2>
<p>The latest and greatest source can be found on <a href="https://github.com/GrahamCampbell/Bootstrap-Website">GitHub</a>.</p>
<ul>
  <li>It is not necessary to compile the source, but you will need to setup the sql server for logins.</li>
  <li>There is an option in the config to disable logins and/or member sign up.</li>
</ul>

</br>

<h2>Updating Your Fork</h2>
<p>Before submitting a pull request, you should ensure that your fork is up to date.</p>
<p>You may fork the Bootstrap Website:</p>
<pre><code>git remote add upstream git://github.com/GrahamCampbell/Bootstrap-Website.git
</code></pre>
<p>The first command is only necessary the first time. If you have issues merging, you will need to get a merge tool such as <a href="http://perforce.com/product/components/perforce_visual_merge_and_diff_tools">P4Merge</a>.</p>
<p>You can then update the branch:</p>
<pre><code>git pull --rebase upstream master
git push --force origin &lt;branch_name&gt;
</code></pre>
<p>Once it is set up, run <code>git mergetool</code>. Once all conflicts are fixed, run <code>git rebase --continue</code>, and <code>git push --force origin &lt;branch_name&gt;</code>.</p>

</br>

<h2>Copyrights</h2>
<p>Copyright © <a href="https://github.com/GrahamCampbell">Graham Campbell 2013</a>.</p>
<p>Copyright © <a href="https://github.com/panique">Panique 2012-2013</a>.</p>
<p>Copyright © <a href="https://github.com/twitter">Twitter 2011-2013</a>.</p>
