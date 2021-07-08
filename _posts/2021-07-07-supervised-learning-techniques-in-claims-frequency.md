---
title: "Supervised learning techniques in claims frequency modelling"
author_profile: false 
classes: wide
comments: true
sidebar:
  - title: "Neptune Jin"
categories:
  - Blog
tags:
  - Actuary Magazine
  - Supervised Learning
---

Originally published by The Actuary, July 2021. © The Institute and Faculty of Actuaries. <br>
<a href="https://www.theactuary.com/2021/07/02/supervised-learning-techniques-claims-frequency-modelling"> Click here to read the original article</a>.
{: .notice}

<b> Neptune Jin shares the Data Science Research Working Party’s work looking at the merits of different supervised learning techniques for claim frequency modelling. </b>

Using historic data to estimate future claims is a central part of actuarial work, and accurate predictions are essential for risk management. With the development of data science, machine learning techniques have become readily available for improved prediction performance.

Supervised learning models, where algorithms are trained on a labelled dataset to solve classification or regression problems, have wide applications in the insurance industry. Many apply one or more algorithms to boost performance for different purposes – one of which is the prediction of future claim frequencies of policies.

We looked at some of the commonly used supervised learning algorithms – including decision tree, random forest, gradient boosted machine (GBM), neural network and naive Bayes models – and compared their performance when predicting the number of claims for a subset (10% of data, referred to as test or out-of-sample data) of French motor insurance policies (with 90% of data being used for training). We also explored ways to improve performance respectively, showcasing the details and features of each application.

<img src="/assets/images/supervised-learning-techniques/Figure-1.jpg" style="width: auto; height: auto;max-width: 500px;max-height: 500px">

<b> Exploratory data analysis </b>





<b> Baseline model </b>

<b> Supervised learning models </b>

<b> Tree-based models </b>

<b> Gradient boosting machines </b>

<b> Neural networks </b>

<b> Naive bayes </b>
Finally, a naive Bayes Bernoulli formula was used as a prediction of frequency. Naive Bayes has been shown to be a good estimator for imbalanced probabilistic problems.

The classifier is limited to binary outcomes, so prediction of more than one claim is lacking. The testing data RMSE turned out to be 0.2502, which is not ideal. We also tried to bucket all non-zero claim frequencies together to create a binary label, but the performance returned was worse, so it was dropped.

While naive Bayes has delivered many strongly performing models in use cases such as separating normal emails from spam and sentimental analysis applications, its claim frequency prediction accuracy falls short of expectations.

Thanks to the IFoA Data Science Research Section’s supervised learning workstream. Team members: Neptune Jin (lead), Usenthini Rajasekar, Jonathan Bowden, Tom Lambert, Hemant Rupani.

<b> Results </b>
A table of comparison between the baseline model and the strongest candidate from each genre of supervised learning algorithms crowned GBM as the best model, followed by the neural network as the runner-up. Apart from naive Bayes models, all others outperformed the basic Poisson GLM in predicting the claim frequencies.

This study shows the possible applications of a large variety of supervised learning techniques in general insurance. While some experiments outperformed others, in this example there was by no means a one-size-fits-all recipe. Actuarial professionals are encouraged to expand their toolkits and be ready to pick up the best fitting algorithms.





<ul>
  <li>
There are at least two parties interested in jointly building an ML model. Each party holds some data that will be contributed to training the model
  </li>

<li>
In the model-training process, the data does not leave the parties 
</li>

<li>
The model can be transferred in a secured way (each party cannot re-engineer the data) under an encryption scheme
</li>

<li>
The resulting model is a good approximation of the hypothetical ideal model trained from centralised data. 
</li>

</ul>

