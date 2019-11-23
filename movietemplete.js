$('form.ajax').on('submit', function() {
  var that = $(this);
  url = that.attr('action');
  type = that.attr('method');
  data = {};

  that.find('[name]').each(function() {
    var that = $(this),
    name = that.attr('name');
    value = that.val();

    data[name]= value;
  });
  return false;
})

function renderImages(name, values) {
    var posterElement = document.getElementById("poster");
    posterElement.src = "images/" + name + ".jpg";
    
    /* 
     * create food photos
     */
    for(i=1; i<=6; i++) {
        var foodCard = document.createElement("div");
        foodCard.setAttribute("id", "castcard");

        var image = document.createElement("img");
        image.setAttribute("src", "images/food/" + name + "/" + i + ".jpg");
        console.log("images/food" + name + "/" + i + ".jpg");
        image.setAttribute("class", "cast");

        foodCard.appendChild(image);
        var foodDiv = document.getElementById("cast");
        foodDiv.appendChild(foodCard);
    }
    setTimeout(function() {
        renderVideo(name, values)
      }, 2000);
}

function renderVideo(name, values) {
    var videoElement = document.getElementById("movie_vid");
    videoElement.src = values["video"].replace("watch?v=", "embed/");
}

var obj = {
    xhr: new XMLHttpRequest(),
    getData: function() {
        this.xhr.onreadystatechange = this.renderText;
        this.xhr.open("GET", "topRestaurants.php?" + new Date().getTime(), true);
        this.xhr.send();
        console.log("XHR request sent");
    },
    renderText: function() {
        if(this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            console.log("Received response");
            /*
             * remove 1 at end of string
             */
            response = response.substring(0, response.length - 1);
            /*
             * JSON.parse() method parses a JSON string,
             * constructing the JS value/object described
             * by the string
             */
            var responseJson = JSON.parse(response);
            var name = localStorage.getItem("name");
            var values = responseJson[name];

            var movieNameElement = document.getElementById("title");
            movieNameElement.innerHTML = name;
            
            var descriptionElement = document.getElementById("desc");
            descriptionElement.innerHTML = values['description'];
            setTimeout(function() {
              renderImages(name, values)
              }, 2000);
        }
        else {
            console.log("Something's wrong");
        }
    }
};

setTimeout( function() {
    obj.getData()
    }, 2000);