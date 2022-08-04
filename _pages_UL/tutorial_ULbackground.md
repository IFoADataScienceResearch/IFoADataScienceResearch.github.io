---
permalink: /unsupervised-learning/tutorial_ULbackground/
classes: wide
title: "Tutorial: Unsupervised Learning background"
author_profile: false
toc: false
sidebar:
  title: "Contents"
  nav: unsupervised-nav
categories:
  - Tutorial
tags:
  - Unsupervised Learning
  - Machine Learning
---


![image-left]({{ site.url }}{{ site.baseurl }}/assets/images_for_wp/UL_tutorial.jpg){: .align-left}


<h3>Introduction</h3>
In some instances, labelled data is unavailable or costly to obtain.  The true labels may even be unknown.  In these cases, and those when labelled data is unnecessary for the task at hand, unsupervised learning is often the machine learning technique of choice.  Unsupervised learning is a branch of machine learning that works with unlabelled data and finds the patterns within the data.  The data is typically structured data, text, or images.  The models in this branch are primarily used to cluster, i.e. group data and perform exploratory data analysis.

<h3>Use cases</h3>
Since unsupervised learning models can be used to group data and identify trends, it lends itself to applications in areas such as anomaly detection, recommendation systems and objection recognition. For example, given a sufficiently large dataset of financial transactions an unsupervised model can identify transactions that deviate from the trends in the dataset.  This could help a financial services provider identify potential fraudulent transactions to investigate without having to undergo the potential expensive process of labelling transactions in the training data as fraudulent or not. 

<h3>Clustering</h3>
A prominent use for unsupervised learning is clustering.  Clustering algorithms take unlabelled data as an input and output a grouping of that data based on the learned similarities and differences between the data points.  There are numerous types of clustering algorithms, namely exclusive, overlapping, hierarchical and probabilistic.  An example of an exclusive clustering algorithm, i.e. one requiring that each data point belong only to one cluster, is the ubiquitous k-means clustering.  K-means clustering divides the dataset into k clusters, where k is specified by the user. 

<h3>Association rules and dimensionality reduction</h3>
Unsupervised learning is also commonly used for association rules and dimensionality reduction.  Association rules are used to determine the relationships between variables in the data.  This technique can be used to determine which news articles are frequently read by the same readers in order to recommend articles to users based on their reading habits.  Dimensionality reduction techniques, such as "principal component analysis" (PCA) reduce the number of data points or features without making a material difference in the quality of the results produced by the model.

<h3>Further reading</h3>
[IBM Cloud Learn Hub](https://www.ibm.com/cloud/learn/unsupervised-learning)
