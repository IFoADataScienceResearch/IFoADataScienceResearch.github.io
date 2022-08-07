---
permalink: /unsupervised-learning/tutorial_comparison/
classes: wide
title: "Comparison of Supervised, Unsupervised, Semi-Supervised and Reinforcement "
author_profile: false
toc: false
sidebar:
  title: "Contents"
  nav: unsupervised-nav
categories:
  - Tutorial
tags:
  - Unsupervised Learning
  - Supervised Learning
  - Semi-supervised Learning
  - Reinforcement Learning
---


![image-left]({{ site.url }}{{ site.baseurl }}/assets/images_for_wp/UL_tutorial.jpg){: .align-left}


<h3>Introduction</h3>
Supervised, unsupervised learning, semi-supervised and reinforced learning are 4 fundamental approaches of machine learning: <br />
-  <b>Supervised Learning</b> Builds a model based labelled data.<br />
-  <b>Unsupervised Learning</b> Builds a model based on a unlabelled data. <br />
-  <b>Semi-Supervised Learning</b> Builds a model based on a mix of labelled and unlabelled data.  This sits between supervised and unsupervised learning approaches.<br />
-  <b>Reinforcement Learning</b> This is a feedback-based learning method, based on a system of rewards and punishments for correct and incorrect actions respectively.  The aim is for the "learning agent" to receive maximum reward and hence improve its performance.<br />



<h3>Overview comparison between these methods</h3>

| Category                         | Supervised                       | Unsupervised                     | Semi-supervised                  | Reinforcement                     |
| -------------------------------- | -------------------------------- | -------------------------------- | -------------------------------- | -------------------------------- |
| Input data                       | All data is labelled             | All data is unlabelled           | Partially labelled               | No predefined data                       |
| Training?          | External supervision                              | No supervision                               |    ??                   | No supervision |
| Use                              | Calculate outcomes                       | Discover underlying patterns                   | ??                       | Learn a series of outcomes                       |
| Computational complexity      | Simple                      | Complex                   | Depends                       | ??                       |
| Accuracy      | Higher                      | Lesser                   | Lesser                       | ??                       |



<h3>Example algorithms under each approach</h3>
Below is a basic comparison table of the different approaches with a few example algorithms:

| Supervised                     | Unsupervised            | Semi-supervised                      | Reinforcement                     |
| ------------------------------ | ----------------------- | ------------------------------------ | --------------------------------- |
| Decision trees                 | K-means                 |  Generative adversial networks       |  Q-learning                       |
| Support Vector Machine         | A-priori                |  Self-trained Naïve Bayes classifier |  Model-based value estimation     |
| Linear regression              | Hierarchical clustering |  Low-density separation              |  Policy optimization              |
| Logistic regression            | K Nearest Neighbours    |  Laplacian regulation                |  State-Action-Reward-State-Action |
| Naive Bayes                    | Principal Component Analysis |  Heuristic approaches                |  Deep Q Network                   |

<h3>Example uses of each approach</h3>
Below is a basic comparison table of the different approaches with a few example uses:

| Supervised                          | Unsupervised                 | Semi-supervised                      | Reinforcement                  |
| ----------------------------------- | ---------------------------- | ------------------------------------ | ------------------------------ |
| Image recognition                   | Customer segmentation        |  Text document classifier            |  Playing games e.g. chess game |
| Market prediction e.g. house prices | Anomaly e.g. fraud detection |  Speech analysis                     |  Self-driving cars             |

<h3>Challenges using each approach</h3>

| Supervised                     | Unsupervised            | Semi-supervised                      | Reinforcement                                  |
| ------------------------------ | ----------------------- | ------------------------------------ | ---------------------------------------------- |
| Pre-processing of data may be time consuming                 | More time required by user e.g. for interpretation                 |  Complex iterative process      |  Choosing reward structures wisely             |
| Cannot give "unkown" information as per unsupervised learning         | May result in less accurate predictions compared to supervised learning                |  Self-trained Naïve Bayes classifier |  Fast learing given small samples              |
| Cannot handle "complex tasks"            | Computationally more complex that supervised learning |  Cannot handle more "complex tasks"                                 |  Not preferable for learning "simple problems" |

<h3>Further reading / Links</h3>


[IBM article](https://www.ibm.com/cloud/blog/supervised-vs-unsupervised-learning)
