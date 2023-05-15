// COUNTER FOR VOTES

// Initialize vote counters for each candidate
var candidate1Votes = 0;
var candidate2Votes = 0;
var candidate3Votes = 0;
var candidate4Votes = 0;
var candidate5Votes = 0;
var candidate6Votes = 0;
var candidate7Votes = 0;
var candidate8Votes = 0;

// Get the buttons for each candidate
var candidate1Button = document.getElementById("candidate1_button");
var candidate2Button = document.getElementById("candidate2_button");
var candidate3Button = document.getElementById("candidate3_button");
var candidate4Button = document.getElementById("candidate4_button");
var candidate5Button = document.getElementById("candidate5_button");
var candidate6Button = document.getElementById("candidate6_button");
var candidate7Button = document.getElementById("candidate7_button");
var candidate8Button = document.getElementById("candidate8_button");

// Add event listeners to each button to increment vote counters
candidate1Button.addEventListener("click", function() {
  candidate1Votes++;
  document.getElementById("candidate1_button").innerHTML = candidate1Votes;
});

candidate2Button.addEventListener("click", function() {
  candidate2Votes++;
  document.getElementById("candidate2_button").innerHTML = candidate2Votes;
});

candidate3Button.addEventListener("click", function() {
  candidate3Votes++;
  document.getElementById("candidate3_button").innerHTML = candidate3Votes;
});

candidate4Button.addEventListener("click", function() {
  candidate4Votes++;
  document.getElementById("candidate4_button").innerHTML = candidate4Votes;
});

candidate5Button.addEventListener("click", function() {
  candidate5Votes++;
  document.getElementById("candidate5_button").innerHTML = candidate5Votes;
});

candidate6Button.addEventListener("click", function() {
  candidate6Votes++;
  document.getElementById("candidate6_button").innerHTML = candidate6Votes;
});

candidate7Button.addEventListener("click", function() {
  candidate7Votes++;
  document.getElementById("candidate7_button").innerHTML = candidate7Votes;
});

candidate8Button.addEventListener("click", function() {
  candidate8Votes++;
  document.getElementById("candidate8_button").innerHTML = candidate8Votes;
});
