---
permalink: /working-parties/
layout: splash
title: "Research Working Parties"
header:
  overlay_image: /assets/images/working-parties.jpg
  caption: "Photo credit: [**Unsplash**](https://unsplash.com)"
author_profile: false
toc: true

---

<html>

<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height: 100vh;
  background: #f8f8f9;
}

body .container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 40px 0;
}

body .container .card {
  position: relative;
  min-width: 320px;
  height: 440px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
}


body .container .card:nth-child(1) .box .content a {
  background: #2196f3;
}

body .container .card:nth-child(2) .box .content a {
  background: #e91e63;
}

body .container .card:nth-child(3) .box .content a {
  background: #23c186;
}

body .container .card:nth-child(4) .box .content a {
  background: #f37c21;
}

body .container .card:nth-child(5) .box .content a {
  background: #a91ee9;
}

body .container .card:nth-child(6) .box .content a {
  background: #18caee;
}

body .container .card:nth-child(7) .box .content a {
  background: #3feb0b;
}

body .container .card:nth-child(8) .box .content a {
  background: #9f4c68;
}

body .container .card:nth-child(9) .box .content a {
  background: #dadd11;
}

body .container .card:nth-child(10) .box .content a {
  background: #0d1b26;
}

body .container .card:nth-child(11) .box .content a {
  background: #2e0f19;
}

body .container .card:nth-child(s) .box .content a {
  background: #c1232316;
}
      
body .container .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #2a2b2f;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

body .container .card .box:hover {
  transform: translateY(-50px);
}

body .container .card .box:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.03);
}

body .container .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container .card .box .content h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 6rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container .card .box .content h3 {
  font-size: 1.2rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container .card .box .content p {
  font-size: 0.8rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

body .container .card .box .content a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
}
body .container .card .box .content a:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
  background: #fff;
  color: #000;
}

    </style>
</head>

<body>
    <div class="container">
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>01</h2>
              <h3>Supervised Learning</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/supervised-learning/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>02</h2>
              <h3>Federated Learning</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/federated-learning/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>03</h2>
              <h3>Natural Language</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/nlp/">Read More</a>
            </div>
          </div>
        </div>
      
      <div class="card">
          <div class="box">
            <div class="content">
              <h2>04</h2>
              <h3>Unsupervised Learning</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/unsupervised-learning/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>05</h2>
              <h3>Deep Learning</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/deep-learning/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>06</h2>
              <h3>Explainable AI</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/explainable-ai/">Read More</a>
            </div>
          </div>
        </div>
      
      <div class="card">
          <div class="box">
            <div class="content">
              <h2>07</h2>
              <h3>Data Visualisation</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/data-visualisation/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>08</h2>
              <h3>Contents and Pages</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/contents-webpages/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>09</h2>
              <h3>Embedded Insurance</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/embedded-insurance/">Read More</a>
            </div>
          </div>
        </div>
      
       <div class="card">
          <div class="box">
            <div class="content">
              <h2>10</h2>
              <h3>Statistical Learning</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/statistical-learning/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>11</h2>
              <h3>Algorithmic Fairness</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/algorithmic-fairness/">Read More</a>
            </div>
          </div>
        </div>
      
        <div class="card">
          <div class="box">
            <div class="content">
              <h2>12</h2>
              <h3>Bayesian Methods</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, totam velit? Iure nemo labore inventore?</p>
              <a href="/bayesian-methods/">Read More</a>
            </div>
          </div>
        </div>
      
      
      </div>

</body>

</html>
