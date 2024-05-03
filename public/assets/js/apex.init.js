/**
 * Theme: T-Wind - Tailwind Admin Dashboard Template
 * Author: Mannatthemes
 * File: Apex Js
 */

var options = {
  series: [{
    name: "clubs",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 120]
  }],
  chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    },
    foreColor: '#ffffff'
  },
  colors: ['#827fff'],
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight',
    width: [3],
  },
  title: {
    text: 'Clubs Trends by Month',
    align: 'left',
    style: {
      color: '#ffffff'
    }
  },
  grid: {
    row: {
      colors: ['#ffffff', 'transparent'],
      opacity: 0.5
    },
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
  },
  yaxis: {}
};

var chart = new ApexCharts(document.querySelector("#apex_line1"), options);
chart.render();








    //visots

    var options = {
      title: {
        text: 'visits',
        align: 'left',
        style: {
          color: '#ffffff'
        }
      },

      chart: {
          height: 360,
          type: 'area',
          stacked: true,
          toolbar: {
            show: false,
            autoSelected: 'zoom'
          },
          foreColor: '#ffffff',
      },
      colors: ['#827fff', '#45404a2e'],
      dataLabels: {
          enabled: false
      },
      stroke: {
          curve: 'smooth',
          width: [3, 3],
          dashArray: [0, 4],
          lineCap: 'round'
      },
      grid: {
        borderColor: "#45404a2e",
        padding: {
          left: 0,
          right: 0
        },
        strokeDashArray: 4,
      },
      markers: {
        size: 0,
        hover: {
          size: 0
        }
      },
      series: [{
          name: 'New Visits',
          data: [0,60,20,90,45,110,55,130,44,110,75,120]
      }, {
          name: 'Unique Visits',
          data: [0,45,10,75,35,94,40,115,30,105,65,110]
      }],

      xaxis: {
          type: 'month',
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          axisBorder: {
            show: true,
            color: '#45404a2e',
          },
          axisTicks: {
            show: true,
            color: '#45404a2e',
          },
      },
      fill: {
        type: "gradient",
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.4,
          opacityTo: 0.3,
          stops: [0, 90, 100]
        }
      },

      tooltip: {
          x: {
              format: 'dd/MM/yy HH:mm'
          },
      },
      legend: {
        position: 'top',
        horizontalAlign: 'right',
        labels: {
          colors: ['#ffffff'] // لون نصوص الأساطير بالأبيض
        }
      },
  }

  var chart = new ApexCharts(
    document.querySelector("#apex_area1"),
    options
  );

  chart.render();



// Category

var options = {
  title: {
    text: 'Category',
    align: 'left',
    style: {
      color: '#ffffff'
    }
  },
  series: [
  {
    data: [
      { x: 'Academic', y: 218 },
      { x: 'cultural', y: 149 },
      { x: 'Social', y: 184 },
      { x: 'Service', y: 55 },
      { x: 'Religious', y: 84 },
      { x: 'Art', y: 31 },
      { x: 'Political', y: 70 },
      { x: 'Sports', y: 30 },
      { x: 'Media', y: 44 },
      { x: 'Environment', y: 68 },
      { x: 'Communication', y: 28 },
      { x: 'Dancing', y: 19 },
      { x: 'Programming', y: 29 },
      { x: 'Gaming', y: 28 },
      { x: 'AI', y: 28 }
    ]
  }
],
  legend: {
    show: false
  },
  chart: {
    height: 350,
    type: 'treemap',
    toolbar: {
      show: false,
    },
  },
  colors: [
    '#3B93A5',
    '#F7B844',
    '#ADD8C7',
    '#EC3C65',
    '#CDD7B6',
    '#C1F666',
    '#D43F97',
    '#1E5D8C',
    '#421243',
    '#7F94B0',
    '#EF6537',
    '#C0ADDB'
  ],
  plotOptions: {
    treemap: {
      distributed: true,
      enableShades: false
    }
  }
};

var chart = new ApexCharts(document.querySelector("#treemap_2"), options);
chart.render();


