$(function () {

  'use strict';

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //-----------------------
  //- MONTHLY SALES CHART -
  //-----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $("#salesChart").length > 0 ? $("#salesChart").get(0).getContext("2d") : null;
//  var i = 0;
//  for (i = 0; i < 6; i++) {
	  var vlr1 = $("#nf_geral_mes_1").val();
	  var vlr1s = $("#nf_mes_canc_1").val();
	  var vlr1c = $("#nf_mes_subs_1").val();

	  var vlr2 = $("#nf_geral_mes_2").val();
	  var vlr2s = $("#nf_mes_canc_2").val();
	  var vlr2c = $("#nf_mes_subs_2").val();

	  var vlr3 = $("#nf_geral_mes_3").val();
	  var vlr3s = $("#nf_mes_canc_3").val();
	  var vlr3c = $("#nf_mes_subs_3").val();

	  var vlr4 = $("#nf_geral_mes_4").val();
	  var vlr4s = $("#nf_mes_canc_4").val();
	  var vlr4c = $("#nf_mes_subs_4").val();

	  var vlr5 = $("#nf_geral_mes_5").val();
	  var vlr5s = $("#nf_mes_canc_5").val();
	  var vlr5c = $("#nf_mes_subs_5").val();

	  var vlr6 = $("#nf_geral_mes_6").val();
	  var vlr6s = $("#nf_mes_canc_6").val();
	  var vlr6c = $("#nf_mes_subs_6").val();

	  var vlr7 = $("#nf_geral_mes_7").val();
	  var vlr7s = $("#nf_mes_canc_7").val();
	  var vlr7c = $("#nf_mes_subs_7").val();

	  var vlr8 = $("#nf_geral_mes_8").val();
	  var vlr8s = $("#nf_mes_canc_8").val();
	  var vlr8c = $("#nf_mes_subs_8").val();

	  var vlr9 = $("#nf_geral_mes_9").val();
	  var vlr9s = $("#nf_mes_canc_9").val();
	  var vlr9c = $("#nf_mes_subs_9").val();

	  var vlr10 = $("#nf_geral_mes_10").val();
	  var vlr10s = $("#nf_mes_canc_10").val();
	  var vlr10c = $("#nf_mes_subs_10").val();

	  var vlr11 = $("#nf_geral_mes_11").val();
	  var vlr11s = $("#nf_mes_canc_11").val();
	  var vlr11c = $("#nf_mes_subs_11").val();

	  var vlr12 = $("#nf_geral_mes_12").val();
	  var vlr12s = $("#nf_mes_canc_12").val();
	  var vlr12c = $("#nf_mes_subs_12").val();
	  
//  }
  
  
  // This will get the first returned node in the jQuery collection.
  var salesChart = null;
  if (salesChartCanvas != null)
	  salesChart = new Chart(salesChartCanvas);

  
  var salesChartData = {
    labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho","Agosto","Setembo","Outubro","Novembro","Dezembro"],
    datasets: [
       {
          label: "Emitidas",
          fillColor: "rgb(189,169,1,1)",
          strokeColor: "rgb(189,169,1,1)",
          pointColor: "rgb(189,169,1,1)",
          pointStrokeColor: "marron",
          pointHighlightFill: "#000",
          pointHighlightStroke: "rgb(189,169,1,1)",
          data: [vlr1, vlr2, vlr3, vlr4, vlr5, vlr6, vlr7,vlr8,vlr9,vlr10,vlr11,vlr12]
      },
               
      {
        label: "Canceladas",
        fillColor: "rgb(210, 214, 222)",
        strokeColor: "rgb(210, 214, 222)",
        pointColor: "rgb(210, 214, 222)",
        pointStrokeColor: "#c1c7d1",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgb(220,220,220)",
        data: [vlr1s, vlr2s, vlr3s, vlr4s, vlr5s, vlr6s, vlr7s,vlr8s,vlr9s,vlr10s,vlr11s,vlr12s]
      },
      {
        label: "Substituidas",
        fillColor: "rgba(60,141,188,0.9)",
        strokeColor: "rgba(60,141,188,0.8)",
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: [vlr1c, vlr2c, vlr3c, vlr4c, vlr5c, vlr6c, vlr7c,vlr8c,vlr9c,vlr10c,vlr11c,vlr12c]
      }
    ]
  };

  var salesChartOptions = {
    //Boolean - If we should show the scale at all
    showScale: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: false,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - Whether the line is curved between points
    bezierCurve: true,
    //Number - Tension of the bezier curve between points
    bezierCurveTension: 0.3,
    //Boolean - Whether to show a dot for each point
    pointDot: false,
    //Number - Radius of each point dot in pixels
    pointDotRadius: 4,
    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth: 1,
    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius: 20,
    //Boolean - Whether to show a stroke for datasets
    datasetStroke: true,
    //Number - Pixel width of dataset stroke
    datasetStrokeWidth: 3,
    //Boolean - Whether to fill the dataset with a color
    datasetFill: true,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
    //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio: true,
    //Boolean - whether to make the chart responsive to window resizing
    responsive: true
  };

  //Create the line chart
  if (salesChart != null)
	  salesChart.Line(salesChartData, salesChartOptions);

  //---------------------------
  //- END MONTHLY SALES CHART -
  //---------------------------

  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
//  var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
//  var pieChart = new Chart(pieChartCanvas);
//  
//  var valor = $("#nf_geral_mes_1").val();
//  var valor2 = $("#nf_geral_mes_2").val();
//  
//  console.log(valor);
//  var PieData = [
//    {
//      value: valor,
//      color: "#f56954",
//      highlight: "#f56954",
//      label: "Chrome"
//    },
//    {
//      value: valor2,
//      color: "#00a65a",
//      highlight: "#00a65a",
//      label: "IE"
//    },
//    {
//      value: 400,
//      color: "#f39c12",
//      highlight: "#f39c12",
//      label: "FireFox"
//    },
//    {
//      value: 600,
//      color: "#00c0ef",
//      highlight: "#00c0ef",
//      label: "Safari"
//    },
//    {
//      value: 300,
//      color: "#3c8dbc",
//      highlight: "#3c8dbc",
//      label: "Opera"
//    },
//    {
//      value: 100,
//      color: "#d2d6de",
//      highlight: "#d2d6de",
//      label: "Navigator"
//    }
//  ];
//  var pieOptions = {
//    //Boolean - Whether we should show a stroke on each segment
//    segmentShowStroke: true,
//    //String - The colour of each segment stroke
//    segmentStrokeColor: "#fff",
//    //Number - The width of each segment stroke
//    segmentStrokeWidth: 1,
//    //Number - The percentage of the chart that we cut out of the middle
//    percentageInnerCutout: 50, // This is 0 for Pie charts
//    //Number - Amount of animation steps
//    animationSteps: 100,
//    //String - Animation easing effect
//    animationEasing: "easeOutBounce",
//    //Boolean - Whether we animate the rotation of the Doughnut
//    animateRotate: true,
//    //Boolean - Whether we animate scaling the Doughnut from the centre
//    animateScale: false,
//    //Boolean - whether to make the chart responsive to window resizing
//    responsive: true,
//    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
//    maintainAspectRatio: false,
//    //String - A legend template
//    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
//    //String - A tooltip template
//    tooltipTemplate: "<%=value %> <%=label%> users"
//  };
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  //pieChart.Doughnut(PieData, pieOptions);
  //-----------------
  //- END PIE CHART -
  //-----------------

  /* jVector Maps
   * ------------
   * Create a world map with markers
   */
/*  $('#world-map-markers').vectorMap({
    map: 'world_mill_en',
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    backgroundColor: 'transparent',
    regionStyle: {
      initial: {
        fill: 'rgba(210, 214, 222, 1)',
        "fill-opacity": 1,
        stroke: 'none',
        "stroke-width": 0,
        "stroke-opacity": 1
      },
      hover: {
        "fill-opacity": 0.7,
        cursor: 'pointer'
      },
      selected: {
        fill: 'yellow'
      },
      selectedHover: {
      }
    },
    markerStyle: {
      initial: {
        fill: '#00a65a',
        stroke: '#111'
      }
    },
    markers: [
      {latLng: [41.90, 12.45], name: 'Vatican City'},
      {latLng: [43.73, 7.41], name: 'Monaco'},
      {latLng: [-0.52, 166.93], name: 'Nauru'},
      {latLng: [-8.51, 179.21], name: 'Tuvalu'},
      {latLng: [43.93, 12.46], name: 'San Marino'},
      {latLng: [47.14, 9.52], name: 'Liechtenstein'},
      {latLng: [7.11, 171.06], name: 'Marshall Islands'},
      {latLng: [17.3, -62.73], name: 'Saint Kitts and Nevis'},
      {latLng: [3.2, 73.22], name: 'Maldives'},
      {latLng: [35.88, 14.5], name: 'Malta'},
      {latLng: [12.05, -61.75], name: 'Grenada'},
      {latLng: [13.16, -61.23], name: 'Saint Vincent and the Grenadines'},
      {latLng: [13.16, -59.55], name: 'Barbados'},
      {latLng: [17.11, -61.85], name: 'Antigua and Barbuda'},
      {latLng: [-4.61, 55.45], name: 'Seychelles'},
      {latLng: [7.35, 134.46], name: 'Palau'},
      {latLng: [42.5, 1.51], name: 'Andorra'},
      {latLng: [14.01, -60.98], name: 'Saint Lucia'},
      {latLng: [6.91, 158.18], name: 'Federated States of Micronesia'},
      {latLng: [1.3, 103.8], name: 'Singapore'},
      {latLng: [1.46, 173.03], name: 'Kiribati'},
      {latLng: [-21.13, -175.2], name: 'Tonga'},
      {latLng: [15.3, -61.38], name: 'Dominica'},
      {latLng: [-20.2, 57.5], name: 'Mauritius'},
      {latLng: [26.02, 50.55], name: 'Bahrain'},
      {latLng: [0.33, 6.73], name: 'São Tomé and Príncipe'}
    ]
  });
  */

  /* SPARKLINE CHARTS
   * ----------------
   * Create a inline charts with spark line
   */

  //-----------------
  //- SPARKLINE BAR -
  //-----------------
  $('.sparkbar').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'bar',
      height: $this.data('height') ? $this.data('height') : '30',
      barColor: $this.data('color')
    });
  });

  //-----------------
  //- SPARKLINE PIE -
  //-----------------
  $('.sparkpie').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'pie',
      height: $this.data('height') ? $this.data('height') : '90',
      sliceColors: $this.data('color')
    });
  });

  //------------------
  //- SPARKLINE LINE -
  //------------------
  $('.sparkline').each(function () {
    var $this = $(this);
    $this.sparkline('html', {
      type: 'line',
      height: $this.data('height') ? $this.data('height') : '90',
      width: '100%',
      lineColor: $this.data('linecolor'),
      fillColor: $this.data('fillcolor'),
      spotColor: $this.data('spotcolor')
    });
  });
});
