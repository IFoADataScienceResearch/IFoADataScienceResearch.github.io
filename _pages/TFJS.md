---
permalink: /TFJS/
---


<html>
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>
<h2>TensorFlow.js</h2>
<p id="message">Model is training!</p>

<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
// Create Training Data
const xs = tf.tensor([0, 1, 2, 3, 4]);
const ys = xs.mul(1.2).add(5);

// Define a Linear Regression Model
const model = tf.sequential();
model.add(tf.layers.dense({units:1, inputShape:[1]}));

// Specify Loss and Optimizer
model.compile({loss: 'meanSquaredError', optimizer:'sgd'});

// Train the Model
model.fit(xs, ys, {epochs:500}).then(() => {myFunction()});

// Use the Model
function myFunction() {
  const xMax = 10;
  const xArr = [];
  const yArr = [];
  for (let x = 0; x <= xMax; x++) { 
    let result = model.predict(tf.tensor([Number(x)]));
    result.data().then(y => {
      xArr.push(x);
      yArr.push(Number(y));
      if (x == xMax) {plot(xArr, yArr)};
    });
  }
  document.getElementById('message').style.display="none";
}

function plot(xArr, yArr) {
// Define Data
const data = [{x:xArr,y:yArr,mode:"markers",type:"scatter"}];

// Define Layout
const layout = {
  xaxis: {range: [0, 10]},
  yaxis: {range: [0, 20]},  
};

// Display Plot
Plotly.newPlot("myPlot", data, layout);
}
</script>
</body>
</html>
