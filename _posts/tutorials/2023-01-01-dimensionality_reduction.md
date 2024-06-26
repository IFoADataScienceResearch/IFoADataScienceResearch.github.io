---
classes: wide
title: "Dimensionality Reduction"
author_profile: false
toc: false
sidebar:
  title: "Contents"
  nav: tutorial-nav
categories:
  - Tutorial
tags:
  - Unsupervised Learning
  - Dimensional Reduction
---


![image-left]({{ site.url }}{{ site.baseurl }}/assets/images_for_tutorials/tutorial.jpg){: .align-left}


<h3>Background</h3>
<i>Dimensional reduction</i> is a common unsupervised learning approach.  It reduces the number of features (input variables) to a manageable size, whilst ensuring that the remaining data is meaningful.  Sometimes the number of input variables is too high or adds little value to the model.  Further, more features make the modelling more complex - sometimes unncessarily complex.  Hence, <i>dimensional reduction</i> addresses this issue.

<h3>Main</h3>
<i>Dimensional reduction</i> is commonly used during the stage of preprocessing data stage.  The following are examples of <i>dimensional reduction</i> methods (found e.g. via sciKit-learn, see link below) are:


1. <b>Decomposition algorithms</b>
- Principal Component Analysis
- Kernel Principal Component Analysis
- Non-Negative Matrix Factorization 
- Singular Value Decomposition 

2. <b>Manifold learning algorithms</b>
- t-Distributed Stochastic Neighbor Embedding
- Spectral Embedding
- Locally Linear Embedding

3. <b>Discriminant Analysis</b>
- Linear Discriminant Analysis

Autoencoders are a type of unsupervised neural network which compresses input data to lower dimension before reconstructing the input back.

<h3>Advantages and Disadvatanges</h3>

Some advantages of dimensionality reduction include:

- Reduces the amount of data required and hence storage space.
- It may produce a more efficient learning algorithm model.
- It may remove "surplus" information.
- It tackles the "curse of dimensionality"

Disadvantages of dimensionality reduction:

- It may reduce the overall accuracy of the model produced.

<h3>Further reading / Links</h3>

- [IBM Cloud Hub](https://www.ibm.com/cloud/learn/unsupervised-learning)
- [Autoencoders](/unsupervised-learning/tutorial_autoencoders/) 
- [Scikit-learn](https://scikit-learn.org/)
