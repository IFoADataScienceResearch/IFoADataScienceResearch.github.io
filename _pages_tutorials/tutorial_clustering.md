---
permalink: /unsupervised-learning/tutorial_clustering/
classes: wide
title: "Clustering"
author_profile: false
toc: false
sidebar:
  title: "Contents"
  nav: unsupervised-nav
categories:
  - Tutorial
tags:
  - Unsupervised Learning
  - Clustering
---

![image-left]({{ site.url }}{{ site.baseurl }}/assets/images_for_wp/UL_tutorial.jpg){: .align-left}

<h3>Introduction</h3>
Clustering is an unsupervised learning method and is a technique which groups unlabelled data based on their similarities. 

<h3>Main</h3>
Clustering algorithms are used to process raw, unclassified data into groups which are represented by structures and patterns in the information. 

<span style="color:red">Please see diagram below:</span>
<span style="color:red">ADD IN JPEG</span>

The clustering algorithms are classified into following different types:

- <b>Exclusive clustering:</b> Exclusive clustering does not allow for a data point to exist in multiple clusters hence called 'hard clustering'.  A widely used clustering algorithm 'k-means clustering' is an example of exclusive clustering. 
- <b>Overlapping clustering:</b> Overlapping clusters allow one data point to exist in multiple clusters.  It is also called 'soft clustering'.
- <b>Hierarchal clustering:</b> Heirarichal clustering is divided into two types, 'agglomerative' or 'divisive'. <i>Agglomerative clustering</i> follows a bottom-up approach, where the data points are isolated as separate groupings initially, and then they are merged together iteratively on the basis of similarity until one cluster has been achieved.  <i>Divisive clustering</i> can be defined as the opposite of agglomerative clustering; instead it takes a top-down approach.  In this case, a single data cluster is divided based on the differences between data points. 
-	<b>Probabilistic clustering:</b> In probabilistic clustering, data points are clustered based on the likelihood that they belong to a particular distribution.  The Gaussian Mixture Model (GMM) is the one of the most commonly used probabilistic clustering methods.

<h3>Example uses</h3>
Example uses of clustering include:

-	"Recommender systems" such as grouping similar viewing patterns on Netflix, in order to recommend similar content.
-	Anomaly detection such as fraud detection, detecting defective mechanical parts.
-	Genetics analysis such as clustering DNA patterns to analyze evolutionary biology.
-	Customer segmentation in oder to understand different customer segments to devise marketing strategies.

<h3>Example algorthims</h3>
Example clustering algorithms, as discuss e.g. in Sci-Kit Learn include:

- K-means
- Affinity propogation
- Mean-shift
- Spectral clustering
- Ward hierarchical clustering
- Agglomerative clustering
- DBSCAN
- OPTICS
- Gaussian mixtures
- BIRCH
- Bisecting K-Means

<h3>Advantages and Disadvantages</h3>

<h3>Further reading</h3>

- [IBM Cloud](https://www.ibm.com/cloud/learn/unsupervised-learning)
- [Sci-Kit](https://scikit-learn.org/stable/modules/clustering.html)
