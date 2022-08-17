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
---


![image-left]({{ site.url }}{{ site.baseurl }}/assets/images_for_wp/UL_clustering.jpg){: .align-left}


<h3>Overview / Background</h3>

<h3>Main</h3>
Clustering is a technique which groups unlabeled data based on their similarities and differences. These algorithms are used to process raw, unclassified data into groups which are represented by structures and patterns in the information. 

The clustering algorithms are classified into following different types:
•	Exclusive clustering – Exclusive clustering does not allow for a data point to exist in multiple clusters hence called “hard clustering”. A widely used clusteing algorithm ‘k-means clustering” is an example of exclusive clustering. 
•	Overlapping clustering - Overlapping clusters allow one data point to exist in multiple clusters. It is also called “soft clustering”.
•	Hierarchal clustering – Heirarichal clustering is divided into two types, agglomerative or divisive. Agglomerative clustering follows a “bottom up approach” where the data points are isolated as separate groupings initially, and then they are merged together iteratively on the basis of similarity until one cluster has been achieved. Divisive clustering can be defined as the opposite of agglomerative clustering; instead it takes a “top-down” approach. In this case, a single data cluster is divided based on the differences between data points. 
•	Probabilistic clustering – In probabilistic clustering, data points are clustered based on the likelihood that they belong to a particular distribution. The Gaussian Mixture Model (GMM) is the one of the most commonly used probabilistic clustering methods.


<h3>Use cases</h3>
•	Recommender systems such as grouping together users with similar viewing patterns on Netflix, in order to recommend similar content
•	Anomaly detection such as fraud detection, detecting defective mechanical parts
•	Genetics such as clustering DNA patterns to analyze evolutionary biology
•	Customer segmentation such as understanding different customer segments to devise marketing strategies

<h3>Conclusion</h3>

<h3>Further reading</h3>
[IBM Cloud](https://www.ibm.com/cloud/learn/unsupervised-learning)
