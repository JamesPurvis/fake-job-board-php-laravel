navigator.geolocation.getCurrentPosition(success, error);

function showSearch() {
    var searchDiv = document.getElementById("search");
    var arrow = document.getElementById("arrow");

    if (searchDiv.classList.contains("hidden")) {
        searchDiv.classList.remove("hidden");
        searchDiv.classList.add("visible");
        arrow.className = "fas fa-arrow-down pe-2";
    }
    else {
        searchDiv.classList.remove("visible");
        searchDiv.classList.add("hidden");
        arrow.className = "fas fa-arrow-right pe-2";
    }
}

function showSearchDash() {
    var searchDiv = document.getElementById("searchdash");

    if (searchDiv.classList.contains("hidden")) {
        searchDiv.classList.remove("hidden");
        searchDiv.classList.add("visible");
    }
    else {
        searchDiv.classList.remove("visible");
        searchDiv.classList.add("hidden");
    }
}

function success(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
  
    var xhr = new XMLHttpRequest();
  
    xhr.open("POST", $locationRoute, true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.setRequestHeader("X-CSRF-TOKEN", csrfToken);
  
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          console.log("Location updated successfully" + " " + latitude + " " + longitude);
        } else {
          console.error("Error updating location. Status code:", xhr.status);
        }
      }
    };
  
    xhr.onerror = function () {
      console.error("An error occurred during the request.");
    };
  
    var data = JSON.stringify({ latitude: latitude, longitude: longitude });
    xhr.send(data);
  }
  
  function error(error) {
    console.error("Error getting location:", error);
  }
  

