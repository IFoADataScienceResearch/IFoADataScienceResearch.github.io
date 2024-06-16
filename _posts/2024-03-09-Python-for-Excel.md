---
title: "Python for Excel"
author_profile: false
sidebar:
    - title: "Stephen Windell"
categories:
    - Blog
tags:
    - Excel
    - Python
    - Visualisation
---

# Python in Excel
[Microsoft announced that Python has been introduced in Excel.](https://support.microsoft.com/en-gb/office/introduction-to-python-in-excel-55643c2e-ff56-4168-b1ce-9428c8308545)
![Python in Excel intro](/assets/images_for_posts/python-for-excel/intro.png)


The **Python** programming language is popular because of the large community and open source packages. The language has continued to be popular because of its applications to machine learning.

**Microsoft Excel** is ubiquitous in business as a general purpose tool for handling data.

Both continue to be relevant for different reasons while also overlapping in function. A combination of the two might make Python more accessible and Excel more powerful.

Let's dive into some of the important points to know about this exciting development.
![Hello actuaries](/assets/images_for_posts/python-for-excel/Hello%20actuaries.png)

## The gist
**Python in Excel released in August 2023**

This is only a recent development which means much is unknown about its current implementation and how it might change in future.

Early implementations show how it can be used to handle, summarise and visualise data.

**You need to be on the Beta Channel to get access**

Currently the implementation is only a preview. This means you need to be on the [Microsoft 365 Insider Program](https://insider.microsoft365.com/en-us/join/windows) and choose the Beta Channel Insider level. This includes having the Beta Channel installation of Excel.

**Integrated with Anaconda**

The implementation means that Python calculations run in Microsoft Cloud using an Anacoda distribution. [Anaconda](https://www.anaconda.com/) provides a number of Data Science and Machine Learning services, open source projects and communities.

This implementation means you don't have to have a local installation of Python but you need to be connected to the internet to use Python for Excel.

## The good
**Core libraries** 

The Anaconda distribution means that you get access to some of the most popular Python packages out of the box. Included are: 
* Popular data manipulation packages numpy and pandas
* Visualisation packages Matplotlib and seaborn
* Statistics and machine learning packages statsmodels, PyTorch and scikit-learn

**Because it's cloud, anyone can pickup and run your code.**

The choice of a cloud distribution means that anyone with your workbook can run the code within it without the hassle of a local Python install and dependency installs.

**Data and logic in one place.**

Python code is written in cells which means data and logic live within cells in your workbook. The relationship is easier to track.

A single cell can now hold many lines of logic with improved formatting. This can improve the readability of logic.

**Python responds to Excel.**

The implementation allows changing cell values to change variables in the Python meaning the Python cells respond like normal Excel formulas with much greater functionality.

**More freedom than workbooks.**

This brings much greater freedom to workbooks by vastly increasing the flexibility from what is available with built in functions.

Those with Python technical skills will now be able to build more advanced processes without touching or knowing VBA (Visual Basic for Applications).

## The bad
**Cloud installation: Anaconda on Microsoft Cloud**

Pushing data to the cloud has significant security considerations. 

The current implementation also means being tied to Microsoft's designs and limitations. For example:
* it isn't clear whether there will be scope to increase processing power
* the cost of cloud can be a hurdle
* can't add your own packages or install other packages

**Excel is still limited**

Modern Data Science and Actuarial work rely on massive sets of data. Excel can't compete with the sheer numbers that you are able to process with the correct Python packages.

The Python code can only work within a single workbook. This means that joining multiple large Excel files is beyond the scope of Python in Excel.

**Not ready for production**

This is only a recent announcement but one wonders how Python in Excel will behave when it comes to being used in production.

Version control is difficult with Excel and ensuring that the correct version is distributed, integrated and deployed will be a difficult process.

**Potential for less transparency**

Code living in workbooks means that you'd need to open the workbook and look at the particular cells to understand the logic.

This means much of the benefits of abstraction is lost (i.e. it's no longer clear where logic is being applied and the process of logic). This can greatly increase the complexity of debugging.

## Conclusion
This is an exciting development between a very popular programming language and a very popular business application.

It points to an evolution of Excel while making Python more accessible to a large business community.

This announcement promises an exciting future for lovers of Excel who wish they could get much easier access to Python's power.

## Get more
[Get started with Python in Excel](https://support.microsoft.com/en-gb/office/get-started-with-python-in-excel-a33fbcbe-065b-41d3-82cf-23d05397f53d).

Worried about security? [Data security and Python in Excel](https://support.microsoft.com/en-gb/office/data-security-and-python-in-excel-33cc88a4-4a87-485e-9ff9-f35958278327).

More on the libraries: [Open-source libraries and Python in Excel](https://support.microsoft.com/en-gb/office/open-source-libraries-and-python-in-excel-c817c897-41db-40a1-b9f3-d5ffe6d1bf3e).