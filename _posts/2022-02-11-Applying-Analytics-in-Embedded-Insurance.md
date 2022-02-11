---
title: "Applying Analytics in Embedded Insurance"
author_profile: false 
classes: wide
comments: true
sidebar:
  - title: "Zack Chan"
  - title: "Xin Yung Lee"
  - title: "Niharika Anthwal"
categories:
  - Blog
tags:
  - Analytics in Embedded Insurance
---
<b> Introduction <b>
The past decade has seen the rise of technology penetration in our everyday lives, from ride-hailing, food delivery, e-commerce, digital banks to telemedicine and teleconsultation services. At the centre of these developments remains a core need to manage risk and protect users of these services, fulfilled via Embedded Insurance products.

<b> What is Embedded Insurance? <b>
Embedded Insurance is a recent global development that has become more pervasive with the increased penetration of technology in our everyday lives. This will be the next natural development in insurance distribution, risk management and actuarial data analytics given the wide reach and vast volume of data collected.

The term Embedded Insurance refers to the act of introducing relevant insurance coverage or protection during a customer’s purchase journey of another product or service [<a href="https://www.mapfre.com/en/insights/innovation/embedded-insurance//">1</a>]. Customers here can refer to a provider and/or consumer of service of an online platform, such as a driver and a passenger. While other definitions of Embedded Insurance may exist, characteristics of embedded insurance common across these definitions include:

  ●	Use of personalised data to provide relevant insurance coverage and premium
  ●	Offering of insurance at a relevant point in time during a user’s purchase journey
  ●	Affordable and bite-sized premium
  ●	Fuss free underwriting and claims process

We have seen Embedded Insurance products already being offered by major technology companies. For example, Uber introduced motor insurance for rideshare drivers and delivery people [<a href="https://www.uber.com/us/en/drive/insurance//">2</a>]. Amazon has also started offering third-party sellers product liability insurance [<a href="https://www.insurancebusinessmag.com/us/news/specialty-insurance/amazon-reveals-massive-insurance-partnership-301827.aspx">3</a>] and contents insurance [<a href="https://www.reuters.com/world/uk/amazon-start-offering-insurance-uk-businesses-broker-2021-09-27/">4</a>] in the UK. More famously, Tesla has also started hiring actuaries as it seeks to build insurance offerings into its vehicle ecosystem.

<b> Data Analytics in Embedded Insurance <b>
The emergence of Embedded Insurance is without a doubt the next evolution in the insurance industry. However, traditional actuarial analytics methodology such as pricing and risk management are still slow to adopt and leverage the large volume of alternative data collected. Examples include:

  ●	Using e-commerce shoppers’ purchase behaviour to estimate their lifestyle and needs to introduce and price relevant insurance
  ●	Adjust motor insurance premium loadings according to detailed driving habits collected through in-car sensors
  ●	Real time on-demand pricing of insurance risk based on drivers’ location and length of time spent on road 

<img src="/assets/images_for_posts/Embedded Insurance/01The Olist dataset.png" style="width: auto; height: auto">

<b> The Olist dataset <b>
Olist is one of Brazil’s largest e-commerce companies, with more than 45,000 sellers on its platform in a USD 85 billion Latin America online retail market. In 2018, Olist published an e-commerce dataset [<a href="https://www.kaggle.com/olistbr/brazilian-ecommerce/">5</a>] containing 100,000 individual orders on its platform from 2016 to 2018 in Brazil. 

The Data Analytics in Embedded Insurance Working Party have adopted this dataset with the objective to identify insurance needs and introduce an innovative insurance recommender algorithm for e-commerce platforms.

As a first step, we have identified three key insurance products that can be recommended to varying affinity for Olist’s buyers. These products can help improve overall user experience by managing a specific risk inherent in their user journey, shown below.

<img src="/assets/images_for_posts/Embedded Insurance/02user journey.png" style="width: auto; height: auto">

<b> Pre-purchase - Bills Insurance <b>
Bills insurance is an insurance protection for buyers on the Olist platform that covers buyers’ outstanding bills payment in the event of loss of income due to accident or death. Based on an initial exploratory data analysis, we found that 76% of payments are made with a credit card in Brazil. Of this, 16% of total payments are made with more than 5 instalments.

<img src="/assets/images_for_posts/Embedded Insurance/03 Bills Insurance.png" style="width: auto; height: auto">

Hence, we believe that bills protection has a high affinity in the pre-purchase journey for Olist buyers, particularly those purchasing high value products with a high number of instalments.

Our aim is to train a supervised learning K-nearest neighbour algorithm that seeks to predict the probability of a buyer using a credit card as the main mode of payment with a high instalment period during checkout. This algorithm will be trained on historical purchase data and applied on future new purchases. The embedded bills insurance can then be offered to buyers with a high predicted probability of using a credit card, even before that payment option is selected.

Buyers can therefore feel more assured of meeting their bill payments even in unforeseen events, further driving up sales on Olist.

<b>  Order in-transit - Refund Protection <b>
Refund protection is an insurance product that covers online purchases in the event it does not arrive, the wrong item arrives or is damaged when it arrives. The cost of purchase will be reimbursed to buyers if the online seller rejects the return and refund. This insurance coverage is useful for items which have shorter return timeframes or items that are not eligible for returns after the package is opened.

Refund protection insurance would most likely be relevant to buyers who purchase from sellers with negative reviews. Upon examining the data set, we found that most of the negative reviews are related to delayed delivery of goods and damaged goods. The table below illustrates the most common phrases found in negative reviews.

<img src="/assets/images_for_posts/Embedded Insurance/04Refund Protection.png" style="width: auto; height: auto">

Based on our preliminary analysis, we believe that there is potential demand for refund protection insurance by Olist buyers. We intend to identify potential insurance customers by training a k-nearest neighbours algorithm to predict buyer sentiment based on features such as product type, cost of goods and sellers’ profiles. The algorithm will then be applied to future transactions, such that refund protection insurance can be recommended to buyers who have higher probability of requesting refunds. 

Buyers who opt for refund protection insurance may be more willing to increase spending on the Olist platform, as they would have a guaranteed avenue of recovering the cost of their purchases. As such, the introduction of refund protection insurance is beneficial for Olist and would help improve sales on the platform.

<b> Post delivery - Product Protection <b>
With the growing competition among sellers on online platform, sellers are required to offer different value-added services such as product protection plans that can increase the likelihood of consumer’s intention to buy and help build customer loyalty toward the brand by providing assurance that a product is reliable and will work as intended after acceptance of delivery. This will also give customers peace of mind from the moment they purchase a product and can provide them with a high-quality ecommerce experience.

To study product protection, we used the Olist dataset, which has customer reviews about various products purchased. The reviews are in Portuguese, so we first converted them to English using Googletrans Python library, which implemented Google translate API. Sample below: -

<img src="/assets/images_for_posts/Embedded Insurance/05Product Protection.png" style="width: auto; height: auto">

As also seen above, some customers review comments suggested that there were some products that became faulty soon after purchase. Product protection can be considered an umbrella term and can include various types of service contracts. We are considering the following protection plans for the products on Olist ecommerce platform:

  ●	Extended warranty
    It offers protection against accelerated wear and tear and generally covers repairs, damage, and lack of functionality for a specified duration. It usually begins when the manufacturer's warranty expires.
  
  ●	Protection plans
    This refers to the protection in the event that something happens to the item shortly after the purchase from specified damages or accidents or because of poor quality

We will be extracting relevant features (e.g., fast delivery, excellent product, low quality) from customer reviews. In accordance with these features, we will assign clusters using K-means text clustering. This will help us identify the cluster for products that started showing problems soon after the purchase and for which customers were not satisfied and complained regarding their poor or low quality. Post this we will estimate the chance that the product lies in the chosen cluster and is suitable for product protection insurance plans. 

<b> Next Steps <b>
Our working party’s next steps is to:
  ●	Optimise the recommender algorithm to improve relevance for shoppers
  ●	Propose a pricing mechanism for each of these products with affordability as a key consideration
  ●	Recommend future research angles from an actuarial analytics perspective
