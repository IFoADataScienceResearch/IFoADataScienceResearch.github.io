---
title: "From raw to processed tweets"
author_profile: false 
classes: wide
comments: true
sidebar:
  - title: "John Ng"
    image: /assets/images/bio/john.jfif
categories:
  - Blog
tags:
  - NLP
---

This is a first of a two part series in the data processing phase of our NLP pipeline. <br>
{: .notice}

## Step 1: Reading in the data
The first step is to read in the the raw tweets data that has been hydrated using a Twitter API. Two minor processing steps are performed to substitute ' and - from the tweets. A sample output from DF_tweets_train$text_clean is shown below.

```html
DF_tweets_train <-  read_excel(paste0(path_dir, "\\tweets_train.xlsx"))
text_processed_train <- DF_tweets_train$text_clean

## Remove curly apostrophe (additional processing)
text_processed_train <- gsub("'", "", text_processed_train)
text_processed_train <- gsub("-", "", text_processed_train)
```
<img src="/assets/images/NLP/df_tweets_train.PNG" style="width: auto; height: auto">

## Step 2: 


```html
it_train <- itoken(text_processed_train, 
                   preprocessor = tolower, 
                   tokenizer =  word_tokenizer,
                   n_chunks = 10,
                   progressbar = FALSE
)

stop_words = c("i")
vocab <- create_vocabulary(it_train,
                           ngram = c(1,1),
                           stopwords = stop_words
) ## 14492

# parameters derived from cross-validation above
pruned_vocab <- prune_vocabulary(vocab, 
                                 term_count_min = 2, 
                                 doc_count_min = 2,
                                 doc_proportion_max = 0.9,
                                 #doc_proportion_min = 0.0001, 
                                 vocab_term_max = nrow(vocab)
) ## 6144

## Vectorisation - transform list of tokens into vector space
vectorizer <- vocab_vectorizer(pruned_vocab)

# create dtm_train with new pruned vocabulary vectorizer
dtm_train  <- create_dtm(it_train, vectorizer)
dim(dtm_train) ##7000x6141
```
