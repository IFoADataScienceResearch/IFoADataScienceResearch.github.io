---
title: "Keyboard Warriors"
excerpt_separator: "<!--more-->"
author_profile: false 
sidebar:
  - title: "John Ng"
    image: /assets/images/bio/john.jfif
    text: "Senior data scientist at RGA and chair of IFoA Data Science Research Section"
  - title: "Melanie Zhang"
    image: /assets/images/bio/melanie.jfif
    text: "Senior portfolio manager at Ki Insurance"
categories:
  - Blog
tags:
  - Actuary Magazine
  - Twitter Sentiment
---

<b> John Ng and Melanie Zhang discuss how they analysed Twitter sentiment relating to COVID-19 and insurance – and how insurers could use such analysis </b>

Twitter offers the public the opportunity to give their real-time thoughts on world events by posting short texts known as ‘tweets’. The COVID-19 pandemic was the defining event of 2020, which makes it a great subject for sentiment analysis – the use of natural language processing to automatically determine the emotion a writer is expressing in a piece of text – or tweets. We wanted to see if we could use Twitter data relating to COVID-19 in the UK to uncover insights pertinent to public interest and the insurance industry.

<b> From unstructured data to sentiment prediction </b>

Twitter is a goldmine of big data, involving more than 1bn user accounts that generate around 500m daily tweets – roughly 200bn tweets per year. This data comes with challenges, such as use of unconventional language, potential biases, and lengthy processing time. There are also a number of steps involved in preparing the data, building models and making sentiment predictions.

<b> Step 1: Preparing the data </b>

Twitter data is openly accessible to developers via Twitter’s application programming interface (API). We used the Twitter identification numbers (IDs) from 1 January to 22 November 2020, which were published in the study ‘COVID-19 Twitter chatter dataset for scientific use’ by Georgia State University’s Panacea Lab.  

DocNow’s Hydrator was used to extract (‘hydrate’) the original tweets and metadata via these IDs. Twitter restricts the hydration rate, so we took a 25% sample of the full dataset and adopted a distributed approach to data mining. This resulted in 25m English tweets, for which hydration would take around 10 days using a single Twitter account.

User location data is noisy. We used techniques such as direct mapping, semi-structured mapping and Google’s Geocoding API to obtain 1.7m UK tweets.

<b> Step 2: Training machine learning models </b>

For supervised learning, a sentiment label needs to be assigned to each tweet. Manual labelling is labour-intensive, so we applied an automated binary classification approach based on tweets containing positive or negative emoticons – labelled ‘positive’ (eg positive emojis) or ‘negative’ (eg negative emojis) accordingly. Only a small subset of tweets contained strong sentiment emoticons. We used 7,000 emoticon-labelled tweets for training and manually labelled 3,000 tweets for testing, taken from 1 January to 26 April 2020.

We augmented our training set with the ‘sentiment140’ dataset, a non-COVID-19 labelled Twitter dataset; this brought our enriched training set to 200,000 labelled tweets, with equal numbers of positive and negative labels. This contributed to a larger vocabulary and could improve predictive performance.

Next, we carried out the pre-processing and encoding steps depicted in Figure 1. Encoding is the feature extraction step that converts a set of words (‘tokens’) into numerical vectors (‘features’).

For each dataset, we explored a variety of machine learning algorithms and encodings to predict binary classification of positive (+1) or negative (-1) sentiment. The model performance metric is ‘area under the ROC curve’ (AUC), an aggregate measure of performance across all classification thresholds. We compared these against simple baseline models – SentiWordNet and TextBlob (open-source tools ready for ‘out-of-the-box’ use).

Based on results in Table 1, run-time and simplicity, our final selected model is regularised logistic regression with TF-IDF encoding trained on the enriched dataset. This achieved a 0.859 AUC. Fine-tuning machine learning models on a COVID-19-specific Twitter dataset can significantly outperform open-source tools.

<img src="/assets/images/keyboard-warriors/figure1.png" style="width: auto; height: auto;max-width: 500px;max-height: 500px">
