---
title: "All together now: modelling claims using federated learning"
author_profile: false 
classes: wide
comments: true
sidebar:
  - title: "Małgorzata Śmietanka"
  - title: "Dylan Liew"
  - title: "Claudio Giorgio Giancaterino"
categories:
  - Blog
tags:
  - Actuary Magazine
  - Federated Learning
---

Originally published by The Actuary, September 2021. © The Institute and Faculty of Actuaries. <br>
<a href="https://www.theactuary.com/2021/08/31/all-together-now-modelling-claims-using-federated-learning"> Click here to read the original article</a>.
{: .notice}

<b> Małgorzata Śmietanka, Dylan Liew and Claudio Giorgio Giancaterino demonstrate how to model claims anonymously using federated learning. </b>

As machine learning techniques become more common in the insurance world, it is important to understand that the benefits of artificial intelligence (AI) can only be harnessed through access to very large amounts of data. When the amount of data is limited, simpler traditional techniques such as generalised linear models (GLMs) outperform complicated methods.

However, harvesting more data is easier said than done, even in the era of big data. Data protection requirements are getting increasingly stringent as the world becomes more aware of data privacy and rights.

This article demonstrates how to fit a claims frequency model when the underlying experience data is private, using federated learning to solve the problem of insufficient training data for claims modelling.

<b> The sample data </b>
<br>
We used the ‘freMTPL2freq’ French third-party motor claims available on OpenML. This dataset contains the number of claims made on 678,013 car insurance policies, along with various features that are commonly used in underwriting, such as vehicle age, driver age and region. We considered a typical actuarial problem: predicting the number of claims.

Typically, a single insurer will not have access to all datapoints if these represent the entire industry. We therefore assumed that there were 10 insurers in the market and split the data equally among them. The question was how to build an accurate model for the entire dataset with access to only 10% of the population.

<b> Start with a simple model </b>
<br>
We built a neural network in PyTorch, but only training on 10% of the data. In practice, insurers might first try a GLM before going into neural networks, but it can be shown that GLMs are special cases of neural networks, and PyTorch could also be used to build a ‘traditional’ Poisson GLM.

While this model’s input data was small, we robustly trained it to make the scenario realistic:
<ul>
  <li> Data was split into training and validation sets, in order to avoid overfitting and reduce bias </li>
  <li> Performance was evaluated only against the unseen validation data </li>
  <li> Hyperparameters (number of layers in a network, number of nodes, learning rate, structure of the network) were tuned using a Bayesian search algorithm </li>
</ul>

This is a rigorous model pipeline, akin to what a data scientist might do in practice. Unsurprisingly, this partially trained model’s performance is still poor when compared to the global dataset. For example, its predictions compared to the actual claims frequency are poor when looking at the prediction of claims frequency by vehicle age (Figure 1).

In comparison, if we have all of the data and not just 10%, this model yields predictions that are significantly closer to the actual test frequency (Figure 2).

<img src="/assets/images/federated-learning/All-together-now_Figure-1-2_0.jpg" style="width: auto; height: auto;max-width: 500px;max-height: 500px">

<b> Collaboration with competitors </b>
<br>
The alternative would be working with competitors to overcome this insufficient data problem, perhaps using a centralised trusted body to pool data. This is not unfamiliar territory to insurers – think of sending mortality experience to the CMI to produce life tables, or using guidance from a reinsurance company that has the experience of many players in the market. Similarly, a collaboratively trained model could guide a company’s local model.

However, sending sensitive claims experience externally is not ideal. There may be no suitable centralised bodies that have the ability and capacity to perform calculations at speed before the experience is no longer relevant. Perhaps, due to funding arrangements, there are practical issues in setting such a body up. Or there may be issues around trust, data security and data privacy requirements.

<img src="/assets/images/federated-learning/All-together-now_Figure-3.jpg" style="width: auto; height: auto;max-width: 500px;max-height: 500px">

<b> Pooling model parameters instead of data </b>
<br>
An alternative is to share model parameters, rather than data, using federated learning. The steps in the model training pipeline (Figure 3) are as follows:
<ol>
<li> Initialisation step: All companies in the network agree on the same initial starting set of parameters, hyperparameters (such as learning rate <img src="https://latex.codecogs.com/svg.image?\eta&space;" title="\eta " />), loss function (L), and model architecture. Companies initialise the global model and define starting value of model parameters <img src="https://latex.codecogs.com/svg.image?\theta&space;_{0}^{shared}" title="\theta _{0}^{shared}" />. </li>

We then perform the following training steps:

<li> Every company ¡ ​stores a local copy of this industry shared model. We denote any variables unique to them using subscript ¡ . Any variables shared by all the companies in the network are denoted by superscript shared. </li>
<li> Each Company¡ tests this shared model against its historic experience by comparing the model’s predicted number of claims against the actual number of claims. </li>
<li> Using the mutually agreed loss function L,Company¡  calculates model errors or residuals on its data – call it . The size and sign of these errors inform each Company¡ whether this shared initial model’s parameters are too big or small and need to be updated. Importantly,  has not sent any data or output externally at this point. </li>
<li> Rather than having each Company¡  use its error¡ to directly update its parameters, it is typical in machine learning to use the gradient with respect to some error cost function (such as sum of squares, Poisson deviance, and so on). The gradient measures how the output of this function changes with respect to changes in input. </li>

</ol>




<b> Małgorzata Śmietanka </b> is a PhD researcher in computer science at UCL
<b> Dylan Liew </b> is a qualified pricing actuary at Bupa Global
<b> Claudio Giorgio Giancaterino </b> is an actuary and a data science enthusiast






