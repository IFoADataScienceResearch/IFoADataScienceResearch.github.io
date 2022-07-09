---
permalink: /unsupervised-learning/contact/
classes: wide
title: "Contact us"
author_profile: false
toc: false
sidebar:
  title: "Contents"
  nav: unsupervised-nav
---


![image-left]({{ site.url }}{{ site.baseurl }}/assets/images_for_wp/UL_tutorial.jpg){: .align-left}

<h3>Contact form</h3>
Please contact us via the form below.

<form accept-charset="UTF-8" action="https://getform.io/{YOUR_UNIQUE_FORM_ENDPOINT}" method="POST" enctype="multipart/form-data" target="_blank">
          <div class="form-group">
            <label for="exampleInputEmail1" required="required">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address"  required="required">
          </div>
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter your name" required="required">
          </div>
        <div class="form-group">
            <label for="exampleMessage">Message</label>
            <input type="text" name="name" class="form-control" id="exampleMessage" placeholder="Enter your message here" required="required" rows = "6" columns = "40">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select class="form-control" id="exampleFormControlSelect1" name="platform" required="required">
              <option>General query</option>
              <option>Research proposal</option>
              <option>Volunteer work</option>
            </select>
          </div>
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload any attachment</label>
            <input type="file" name="file">
          </div>
          <hr>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
