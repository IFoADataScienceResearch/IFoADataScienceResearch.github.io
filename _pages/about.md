---
permalink: /about/
layout: splash
header:
  overlay_image: /assets/images/about.jpg
  caption: "Photo credit: [**Unsplash**](https://unsplash.com)"
classes: wide
title: "About"
author_profile: false
toc: false
---

{% include feature_row %}


The Institute and Faculty of Actuaries (IFoA) Data Science Research Section is an international research community, consisting of actuaries, data scientists, statisticians and academics meeting regularly to research and develop data science techniques in actuarial and insurance applications. We organised and disseminate our works through research working parties.

We aim to achieve this by:

1. Identifying interesting actuarial data science research problems and data sets
2. Conducting research and case studies, including but not limited to pricing, underwriting, capital modelling, mortality, morbidity, fraud, customer behaviour, privacy and technology
3. Publishing data science case studies and papers, via The Actuary magazine, journals, webinars, web blogs, LinkedIn and conferences

## Committee

Chair of Research Section: <a href="https://www.linkedin.com/in/aiglauer/?originalSubdomain=ch"> Alexis Iglauer </a> <br>
Academic Chair of Statistical Learning in Actuarial Applications WP: <a href="https://researchportal.hw.ac.uk/en/persons/george-tzougas"> Associate Professor George Tzougas </a> <br>
Chair of Federated Learning WP: <a href href="https://www.linkedin.com/in/ma%C5%82gorzata-%C5%9Bmietanka-a1963a112/"> Malgorzata Smietanka </a> <br>
Chair of Supervised Learning WP: <a href href="https://www.linkedin.com/in/neptune-jin-0a1aba93/"> Neptune Jin </a> <br>
Chair of Natural Language Processing (NLP) WP: <a href="https://www.linkedin.com/in/wui-hua-ng/"> John Ng </a> <br>
Chair of Unsupervised Learning WP: <a href="https://www.linkedin.com/in/debashish-dey-669025a3/"> Debashish Dey </a> <br>
Chair of Deep Learning WP: <a href href="https://www.linkedin.com/in/pieter-knox/"> Pieter Knox </a> <br>
Chair of Explainable Artificial Intelligence (XAI) WP: <a href href="https://www.linkedin.com/in/jonathan-bowden-22433b27/"> Jonathan Bowden </a> <br>
Chair of Data Visualisation WP: <a href href="https://www.linkedin.com/in/eilish-bouse-655194b2/"> Eilish Bouse </a> <br>
Chair of Data Analytics in Embedded Insurance WP: <a href href="https://www.linkedin.com/in/chanzhanliang/"> Zack Chan </a> <br>
Chair of Data Science Contents and Webpage WP: <a href href="https://www.linkedin.com/in/chanzhanliang/"> Zack Chan </a> <br>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'Mike', 'f':'Mike<div style="color:red; font-style:italic">President</div>'},
           '', 'The President'],
          [{'v':'Jim', 'f':'Jim<div style="color:red; font-style:italic">Vice President</div>'},
           'Mike', 'VP'],
          ['Alice', 'Mike', ''],
          ['Bob', 'Jim', 'Bob Sponge'],
          ['Carol', 'Bob', '']
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
   </script>
    </head>
  <body>
    <div id="chart_div"></div>
  </body>
</html>


## Disclaimer
The views expressed on this site are those of invited contributors and not necessarily those of the Institute and Faculty of Actuaries. The Institute and Faculty of Actuaries do not endorse any of the views stated, nor any claims or representations made on this site and accept no responsibility or liability to any person for loss or damage suffered as a consequence of their placing reliance upon any view, claim or representation made on this site. 

The information and expressions of opinion contained on this site are not intended to be a comprehensive study, nor to provide actuarial advice or advice of any nature and should not be treated as a substitute for specific advice concerning individual situations. On no account may any part of this publication be reproduced without the written permission of the Institute and Faculty of Actuaries.
