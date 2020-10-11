// Config
const addressAPI = './api/ml_data'; // sending data to ...
const input1 = document.getElementById("input1");
const input2 = document.getElementById('input2');

//__________________________ GLOBAL VARIABLES ______________________________________
// global TimeStamp
let globalTimeStamp = Date.now();
// global Key Watch
let inputsArr = [input1, input2]; // inputs to Watch
let keyMediumSpeed = 0; // to server
let keyMediumTime = 0; // to server
let keyMediumCount = 0; // to server
let keyDataArray = []; // for calc

// global ClickCount
let clicksCount = 0;

// global MouseMove
let mRefreshInterval = 500;
let lastMouseX = -1;
let lastMouseY = -1;
let lastMouseTime;
let mouseTravel = 0;
let firstDate = Date.now();
let middleSpeed = 0;

// global USER AGENT
let screenWidth = screen.width;
let screenHeight = screen.height;
let screenDiagonal = Math.floor(Math.sqrt(screenWidth^2 + screenHeight^2));
let screenOrientation = screenHeight > screenWidth ? "vertical" : "horizontal";
let colorDepth = screen.colorDepth;
let windowHistoryLength = history.length;
let userAgentBrowser = navigator.userAgent;
let userAgentVersion = navigator.appVersion;
let userAgentName = navigator.appName;
let userAgentCodeName = navigator.appCodeName;
let userAgentPlatform = navigator.platform;
let userAgentCoresCount = navigator.hardwareConcurrency;
let userAgentConnectionData = navigator.connection ? navigator.connection : null;
//extra
let webGL = document.createElement('canvas').getContext('webgl'),
  ext = webGL.getExtension('WEBGL_debug_renderer_info');
let userAgentVideoCardAndDirectX = webGL.getParameter(ext.UNMASKED_RENDERER_WEBGL);


//_________________________ FUNCTIONS ________________________________________

// MOUSE SPEED
document.body.addEventListener('mousemove', (e) => {
  let mouseX = e.pageX;
  let mouseY = e.pageY;
  if (lastMouseX > -1)
    mouseTravel += Math.max(Math.abs(mouseX - lastMouseX), Math.abs(mouseY - lastMouseY));
  lastMouseX = mouseX;
  lastMouseY = mouseY;
  middleSpeed = mouseTravel / (Date.now() - firstDate);
})

// CLICK COUNTER
document.addEventListener('click', (event) => {
  clicksCount++;
})

// KEY WATCHER
const watchKeys = (inputs = []) => {
  inputs.forEach(element => {
    element.addEventListener('keyup', () => {
      keyDataArray.push(Date.now());
    })
  })
}
// KEY SPEED
const keySpeedCalc = () => {
  let first = keyDataArray[0];
  let last = keyDataArray[keyDataArray.length - 1];

  keyMediumCount = keyDataArray.length;
  keyMediumTime = last - first;
  keyMediumSpeed = Math.floor(keyMediumTime / keyMediumCount);
}


//__________________________ SEND DATA ______________________________________

async function keyDataSend() {
  keySpeedCalc();
  const url = addressAPI;
  const data = {
    "globalTimeStamp": globalTimeStamp,
    "keyMediumCount": keyMediumCount,
    "keyMediumTime": keyMediumTime,
    "keyMediumSpeed": keyMediumSpeed,
    "clicksCount": clicksCount,
    "middleSpeed": middleSpeed,
    "screenWidth": screenWidth,
    "screenHeight": screenHeight,
    "screenDiagonal": screenDiagonal,
    "screenOrientation": screenOrientation,
    "colorDepth": colorDepth,
    "windowHistoryLength": windowHistoryLength,
    "userAgentBrowser": userAgentBrowser,
    "userAgentVersion": userAgentVersion,
    "userAgentName": userAgentName,
    "userAgentCodeName": userAgentCodeName,
    "userAgentPlatform": userAgentPlatform,
    "userAgentCoresCount": userAgentCoresCount,
    "userAgentConnectionData": userAgentConnectionData,
    "userAgentVideoCardAndDirectX": userAgentVideoCardAndDirectX
  };

  try {

    $.ajax({
      url: addressAPI,
      type: "POST",
      data: JSON.stringify(data)
    });

    console.log(JSON.stringify(data));

  } catch (error) {
    console.error('Error:', error);
  }
}

//__________________________ INIT ______________________________________
//Launch only then page is already load
watchKeys([...document.querySelectorAll('input[type=text]')]);