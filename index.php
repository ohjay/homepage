<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Owen Jow</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/ohjay/ohjay.github.io/master/images/favicon.png" />
</head>
<body>
  <div id="wrapper">
    <br>
    <div class="row">
      <div id="profile-img" class="col-prof-pic"></div>
      <div class="col-bio">
        <h1>Owen Jow</h1>
        <p>I'm a master's student at <a href="https://cse.ucsd.edu">UC San Diego</a>, specializing in computer graphics and vision and working with Ravi Ramamoorthi. I did my undergrad at <a href="https://eecs.berkeley.edu/">UC Berkeley</a>, along the way conducting VR/robotics research in Pieter Abbeel's group. During the summers of 2018 and 2019, I worked at <a href="https://research.adobe.com/">Adobe Research</a> with Duygu Ceylan, Krishna Mullia, and Miloš Hašan.</p>
      </div>
    </div>

    <div class="row heading">
      <h2>Publications</h2>
    </div>

    <div class="row">
      <div class="col-proj-pic"><img src='img/inside_vr.png'></div>
      <div class="col-proj-desc">
        <a href="https://arxiv.org/pdf/1710.04615.pdf">Deep Imitation Learning for Complex Manipulation Tasks from Virtual Reality Teleoperation</a>
        <br>
        Tianhao Zhang*, Zoe McCarthy*, <b>Owen Jow</b>, Dennis Lee, Xi Chen, Ken Goldberg, Pieter Abbeel
        <br>
        <em>IEEE International Conference on Robotics and Automation (ICRA)</em>, 2018
        <p class="enfilade">
          <a class="button" href="https://arxiv.org/abs/1710.04615">arXiv</a>
          <a class="button" href="http://sites.google.com/view/vrlfd">Website</a>
        </p>
      </div>
    </div>

    <div class="row heading">
      <h2>Teaching</h2>
    </div>

    <div class="row">
      <div class="col-proj-pic"><img src="img/photometric_stereo.png"></div>
      <div class="col-proj-desc">
        <p class="teaching-desc">
          <b>UC San Diego</b> &middot; Fall 2019
          <br>
          <a href="https://cseweb.ucsd.edu/classes/fa19/cse252A-a">CSE 252A: Computer Vision I</a>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-proj-pic"><img src="img/hanoi.png"></div>
      <div class="col-proj-desc">
        <p class="teaching-desc">
          <b>UC San Diego</b> &middot; Winter 2019
          <br>
          <a href="https://sites.google.com/a/eng.ucsd.edu/cse-21-winter-2019">CSE 21: Math for Algorithms</a>
          <span class="largescr-only">&nbsp;</span><br class="smallscr-only">
          <a class="button" href="https://owenjow.xyz/cse21">Section Page</a>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-proj-pic"><img src="img/similartri.jpg"></div>
      <div class="col-proj-desc">
        <p class="teaching-desc">
          <b>UC San Diego</b> &middot; Fall 2018, Spring 2019
          <br>
          <a href="https://ucsd-cse-152.github.io">CSE 152: Introduction to Computer Vision</a>
          <span class="largescr-only">&nbsp;</span><br class="smallscr-only">
          <a class="button" href="https://owenjow.xyz/cse152">Section Page</a>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-proj-pic"><img src="img/dominating.png"></div>
      <div class="col-proj-desc">
        <p class="teaching-desc">
          <b>UC Berkeley</b> &middot; Spring 2018
          <br>
          <a href="https://inst.eecs.berkeley.edu/~cs170/sp18">CS 170: Efficient Algorithms &amp; Intractable Problems</a>
          <span class="largescr-only">&nbsp;</span><br class="smallscr-only">
          <a class="button" href="https://owenjow.xyz/cs170">Section Page</a>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-proj-pic"><img src="img/ant_firequeen.gif"></div>
      <div class="col-proj-desc">
        <p class="teaching-desc">
          <b>UC Berkeley</b> &middot; Spring 2016, Fall 2016, Spring 2017
          <br>
          <a href="http://www-inst.eecs.berkeley.edu/~cs61a/sp17">CS 61A: Structure &amp; Interpretation of Computer Programs</a>
          <span class="largescr-only">&nbsp;</span><br class="smallscr-only">
          <a class="button" href="https://owenjow.xyz/cs61a">Section Page</a>
        </p>
      </div>
    </div>

    <div class="row heading">
      <h2>Contact</h2>
      <p>Feel free to email me: owen [at] eng.ucsd.edu.</p>
    </div>

    <div class="row">
      <p align="right">
        <em>This website is based on <a href="https://jonbarron.info/">Jon Barron's</a>.</em><br>
        <?php
        $file = __FILE__;
        $lastmod = date("M d, Y \a\\t h:i A O", filemtime($file));
        echo "<em>Last updated: ".$lastmod.".</em>";
        ?>
      </p>
    </div>
  </div>
</body>
</html>
