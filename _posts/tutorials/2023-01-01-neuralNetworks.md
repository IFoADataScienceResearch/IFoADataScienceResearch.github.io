---
classes: wide
title: "Neural Networks"
author_profile: false
toc: false
sidebar:
  title: "Contents"
  nav: tutorial-nav
categories:
  - Tutorial
tags:
  - Neural Networks
---


![image-left]({{ site.url }}{{ site.baseurl }}/assets/images_for_tutorials/tutorial.jpg){: .align-left}

<h3>Overview / Background</h3>

Neural networks are at the heart of deep learning.  These are architectures which mimic the design of the brain and have the capability of being applied to any problem.  

Underlying a neural network are neurons, layers, weights and biases.

#### Key Concepts
- **Neurons**: Basic units of a neural network, which process inputs and generate an output.
- **Layers**: Neural networks consist of input layers, hidden layers, and output layers.
- **Weights and Biases**: Parameters within the network that are adjusted during training to minimize error.
- **Activation functions**: Functions which allow non-linearity.

<h3>Main</h3>

Neural networks are composed of layers of nodes. Each node is a perceptron that performs a weighted sum of its inputs and passes the result through an activation function.

#### Steps in a Neural Network
1. **Input Layer**: Receives the input data.
2. **Hidden Layers**: Perform computations and transfer information from the input layer to the output layer.
3. **Output Layer**: Provides the final output.

#### Example Activation Functions
- **Sigmoid**: \( \sigma(x) = \frac{1}{1 + e^{-x}} \)
- **ReLU (Rectified Linear Unit)**: \( f(x) = \max(0, x) \)
- **Tanh (Hyperbolic Tangent)**: \( \tanh(x) = \frac{e^x - e^{-x}}{e^x + e^{-x}} \)

#### Backpropagation
A method used to calculate the gradient of the loss function and update weights in the network to minimize error.

<h3>Examples</h3>

#### Deep Neural Networks (DNN)
Deep Neural Networks (DNN) are neural networks with multiple hidden layers between the input and output layers. They are capable of learning complex patterns in data by transforming the data through several layers of nonlinear operations.

#### Convolutional Neural Networks (CNN)
Convolutional Neural Networks (CNN) are specialized neural networks designed for processing data with a grid-like topology, such as images. They use convolutional layers to automatically and adaptively learn spatial hierarchies of features from input images.

#### Long Short-Term Memory (LSTM) Networks
Long Short-Term Memory (LSTM) networks are a type of recurrent neural network (RNN) that are capable of learning long-term dependencies. They are well-suited for sequence prediction problems where the context is important, such as time series forecasting and natural language processing.

#### Gated Recurrent Unit (GRU) Networks
Gated Recurrent Unit (GRU) networks are a variation of LSTM networks that use gating units to modulate the flow of information. GRUs are simpler and computationally more efficient than LSTMs while still being effective for capturing dependencies in sequential data.

<h3>Conclusion</h3>

Neural networks are powerful tools for various applications in machine learning and artificial intelligence. With the right understanding and tools, you can build models that solve complex problems and provide valuable insights.

<h3>Further reading / Links</h3>

- [Deep Learning Book by Ian Goodfellow](http://www.deeplearningbook.org/)
- [Neural Networks and Deep Learning by Michael Nielsen](http://neuralnetworksanddeeplearning.com/)
- [TensorFlow Documentation](https://www.tensorflow.org/)
- [IBM Cloud Hub](https://www.ibm.com/cloud/learn/neural-networks)
