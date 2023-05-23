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