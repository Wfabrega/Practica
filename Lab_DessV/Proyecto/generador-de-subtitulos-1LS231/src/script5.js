const video = document.getElementById("video");
const playButton = document.getElementById("play");
const pauseButton = document.getElementById("pause");
const startTimeDisplay = document.getElementById("start-time");
const endTimeDisplay = document.getElementById("end-time");

// Set up play and pause buttons
playButton.addEventListener("click", () => {
  video.play();
});

pauseButton.addEventListener("click", () => {
  video.pause();
});

// Prompt user for start and end times
const startTime = prompt("Enter start time in seconds:");
const endTime = prompt("Enter end time in seconds:");

// Set up initial time interval
video.currentTime = startTime;
video.addEventListener("loadedmetadata", () => {
  video.play();
  startTimeDisplay.textContent = startTime;
  endTimeDisplay.textContent = endTime;
  video.addEventListener("timeupdate", () => {
    if (video.currentTime >= endTime) {
      video.pause();
    }
  });
});