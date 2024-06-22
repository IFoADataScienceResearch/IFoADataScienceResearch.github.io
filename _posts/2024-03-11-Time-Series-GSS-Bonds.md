---
title: "Time series analysis of GSS bonds"
author_profile: false 
classes: wide
comments: true
sidebar:
  - title: "Debashish Dey"
categories:
  - Research Papers
tags:
  - Climate
  - CNN
  - GRU
  - LSTM
  - Neural Networks
  - Time Series
  - XGBoost
---

Originally published by The British Actuarial Journal, March 2024. © The British Actuarial Journal. <br>
<a href="https://blog.actuaries.org.uk/time-series-analysis-of-s-p-green-bond-index/"> Link to original post.</a> <br>
<a href="https://www.cambridge.org/core/journals/british-actuarial-journal/article/time-series-analysis-of-gss-bonds/A9D25C2A123EA01C91E5C61557FC609F"> Read online full publication</a> <br>
{: .notice}

<b> Abstract </b>
The market for green bonds, and environmentally aligned investment solutions, is increasing. As of 2022, the market of green bonds exceeded USD 2 trillion in issuance, with India, for example, having issued its first-ever sovereign green bonds totally R80bn (c.USD1bn) in January 2023. This paper lays the foundation for future papers and summarises the initial stages of our analysis, where we try to replicate the S&P Green Bond Index (i.e. this is a time series problem) over a period using non-traditional techniques. The models we use include neural networks such as CNNs, LSTMs and GRUs. We extend our analysis and use an open-source decision tree model called XGBoost. For the purposes of this paper, we use 1 day’s prior index information to predict today’s value and repeat this over a period of time. We ignore for example stationarity considerations and extending the input window/output horizon in our analysis, as these will be discussed in future papers. The paper explains the methodology used in our analysis, gives details of general underlying background information to the architecture models (CNNs, LSTMs, GRUs and XGBoost), as well as background to regularisation techniques specifically L2 regularisation, loss curves and hyperparameter optimisation, in particular, the open-source library Optuna.



