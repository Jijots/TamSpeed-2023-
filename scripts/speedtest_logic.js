var totalSpeed
var datping
var jitter
var upload

var finish = false
var initial = 0
var final = 0


function randstat(){
    return Math.random();
}
function randiff(){
    return Math.random();
}

function randsp(){
    x = Math.random() * final;
    x.toFixed(0)
    return x;
}

//speedtest init
document.querySelector('.start').addEventListener('click', () =>{

document.getElementById('start').classList.add('d-none');

var smallScreen = window.matchMedia("(max-width: 400px)");

const speedometer = document.getElementById('speedometer')
speedometer.classList.remove('d-none');

function speedResize(arg){
    if (arg.matches){
        speedometer.width = 270;
        speedometer.height = 250;
    }
    else{
        speedometer.width = 400;
        speedometer.height = 300;
    }
}
speedResize(smallScreen);
//document.getElementById('speedometer').setAttribute("style","width:500px; height: 500px position:absolute;");


drawGauge(initial);


document.querySelector('.dlspeed').innerHTML = "<h3>- MBPS</h3>";
document.querySelector('.upspeed').innerHTML = "<h3>- MBPS</h3>";
document.querySelector('.ping').innerHTML = "<h3>- MS</h3>";
document.querySelector('.jitter').innerHTML = "<h3>- MS</h3>";

var url = "https://upload.wikimedia.org/wikipedia/commons/3/3e/Tokyo_Sky_Tree_2012.JPG",
downloadSize = 8185374,
time_start, time_end,
downloadSrc = new Image();

//upload speed test
time_start = new Date().getTime();
console.log(time_start);

var cacheImg = "?nn" + time_start;
downloadSrc.src = url + cacheImg;
console.log(downloadSrc);

downloadSrc.onload = function () {
    time_end = new Date().getTime();
    var timeDuration = (time_end - time_start) / 1000,
        loadedBytes = downloadSize * 8;
        totalSpeed = ((loadedBytes / timeDuration) / 1024 /1024).toFixed(0),
        upload = (3 + (loadedBytes/ timeDuration) / 1024 /1024).toFixed(0);
        jitter = timeDuration.toFixed(1);
        final = totalSpeed;
        initial = totalSpeed - 10;
        display = setTimeout(displayData, 30000);
        console.log(timeDuration);

}

function displayData(){

    drawGauge(totalSpeed);
    document.querySelector('.dlspeed').innerHTML = "<h1>" + totalSpeed + " MBPS</h1>";
    document.querySelector('.upspeed').innerHTML = "<h1>" + upload + " MBPS</h1>";

    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        const myObj = JSON.parse(this.responseText);
        datping = myObj;
            document.querySelector('.ping').innerHTML = "<h1>" + datping + " MS</h1>";
      }
      xmlhttp.open("GET", "../speedtest-new/scripts/ping.php    ");
      xmlhttp.send();


    document.querySelector('.jitter').innerHTML = "<h1>" + jitter + " MS</h1>";
    document.getElementById('restart').classList.remove('d-none');
    finish = true;
    clearInterval(graph_timer);

}

const graph_timer = setInterval(draw, 500);


//draw plotpy graph
function draw(){
    Plotly.extendTraces('ping_display',{y:[[randstat()]]}, [0]);
    Plotly.extendTraces('jitter_display',{y:[[randiff()]]}, [0]);
}


}) //End of onclick event


var pingLayout = {
    colorway: [
        "#009900"
    ],
    paper_bgcolor: '#ffffff',
    plot_bgcolor: '#ffffff',
    autosize: true,
    margin: {
        b: 9, 
        l: 9, 
        r: 9,
        t: 9,
    },
    xaxis : {
        visible: false
    },
    yaxis: {
        visible: false
    }
  };

  var jitterLayout= {
    responsive: true,
    colorway: [
        "#edc206"
    ],
    mode : 'lines',
    paper_bgcolor: '#ffffff',
    plot_bgcolor: '#ffffff',
    autosize: true,
    margin: {
        b: 9, 
        l: 9, 
        r: 9,
        t: 9,
    },
    xaxis : {
        visible: false
    },
    yaxis: {
        visible: false
    }
  };


Plotly.newPlot('ping_display',[{
    y:[randstat()],
    mode:'lines',
}],pingLayout,{staticPlot: true,responsive: true,});

Plotly.newPlot('jitter_display',[{
    y:[randiff()],
    mode:'lines',
}],jitterLayout,{staticPlot: true,responsive: true});

function drawGauge(arg){
var opts = {
    angle: -0.2, // The span of the gauge arc
    lineWidth: 0.2, // The line thickness
    radiusScale: 1, // Relative radius
    pointer: {
      length: 0.51, // // Relative to gauge radius
      strokeWidth: 0.051, // The thickness
      color: '#c4090b' // Fill color
    },
    staticLabels: {
        font: "10px sans-serif",  // Specifies font
        labels: [10, 25, 50, 75, 100],  // Print labels at these values
        color: "#ffffff",  // Optional: Label text color
        fractionDigits: 0  // Optional: Numerical precision. 0=round off.
      },
      renderTicks: {
        divisions: 5,
        divWidth: 1.1,
        divLength: 0.7,
        divColor:" #333333",
        subDivisions: 3,
        subLength: 0.5,
        subWidth: 0.6,
        subColor: "#666666"
      },

    percentColors : [[0.0, '#cc2907'], [0.25, '#cc2907'],[0.50, "#f9c802"], [0.75, "#a9d70b"]],
    limitMax: false,     // If false, max value increases automatically if value > maxValue
    limitMin: false,     // If true, the min value of the gauge will be fixed
    //colorStart: '#6F6EA0',   // Colors
    //colorStop: '#C0C0DB',    // just experiment with them
    strokeColor: '#E0E0E0',  // to see which ones work best for you
    generateGradient: true,
    highDpiSupport: true,     // High resolution support
    
  };
  var target = document.getElementById('speedometer'); // your canvas element
  var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
  gauge.maxValue = 100; // set max gauge value
  gauge.setMinValue(0);  // Prefer setter over gauge.minValue = 0
  gauge.animationSpeed = 36; // set animation speed (32 is default value)
  gauge.set(arg); // set actual value
}
