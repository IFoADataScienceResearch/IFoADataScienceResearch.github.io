---
title: "Application of Federated Learning in Predictive Maintenance to Predict Remaining Useful Life"
author_profile: false 
classes: wide
comments: true
sidebar:
  - title: "Chan Zhang Lian"
categories:
  - Publications
tags:
  - Federated Learning
---

Submitted in partial fulfillment of the requirements for the MSc degree in Computing Science of Imperial College London, September 2021<br>
[Link to document](https://github.com/IFoADataScienceResearch/IFoADataScienceResearch.github.io/blob/master/assets/pdfs/FL_predictive_maintenance.pdf)<br>
{: .notice}

<b> Abstract </b>

Data have and will continue to be at the centre of Prognostics and Health Management systems in training efficient machine learning models to predict remaining useful life of critical equipment. For example, remaining time to the next degradation in turbofan engines can be confidently predicted such that proactive maintenance can be scheduled to minimise downtime.

However, the data available to train such models - though large in quantity - are privately sensitive in nature and often exist in silos. Hence, access to these data remains a key hurdle to unlock their true potential in improving operational efficiency and reducing resource wastage.

To tackle this, the concept of federated learning was introduced in recent years to leverage the vast pool of data to train predictive models whilst preserving privacy. In this report, we show how federated learning can be practically applied using open-source packages in Python to predict the remaining useful life of turbofan engines.

Specifically, we applied two separate federated learning packages - FATE and dc_federated - and demonstrated the impact of balanced and imbalanced data sets on the perfor- mance of these models. We compared the results with baseline centralised models
to show that despite the privacy preserving nature of the federated models, they are able to offer comparable predictive performance as centralised models.
