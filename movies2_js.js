scrollAmount = 1;
count = 1;
var obj = {
    xhr: new XMLHttpRequest(),
    getData: function() {
        this.xhr.onreadystatechange = this.createList;
        this.xhr.open("GET", "topRestaurants.php", true);
        this.xhr.send();
        console.log("XHR request sent");
    },
    createList: function() {
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
            console.log(responseJson);
            for(i in responseJson) {
                console.log(i);
                var divElement = document.createElement("div");
                divElement.setAttribute("id", i);
                divElement.setAttribute("class", "moviecard");
                divElement.setAttribute("onclick", "obj.openPage(this.id)");

                var para = document.createElement("p");
                para.innerHTML = i + ', ' + responseJson[i]['city'] + ', ' + responseJson[i]['country'];
                divElement.appendChild(para);

                var parentDivElement = document.getElementById("pagecard");
                parentDivElement.appendChild(divElement);

                var imgElement = document.createElement("img");
                imgElement.setAttribute("id", "moviethumbnail");
                imgElement.setAttribute("src", "images/" + i + ".jpg");
                divElement.appendChild(imgElement);
            }
        }
        else {
          console.log("Something's wrong");
        }
    },
    getChunks: function() {
        scroll = document.body.scrollTop || document.documentElement.scrollTop;
        console.log(scroll);
        console.log(scrollAmount);
        if(scroll > scrollAmount) {
            scrollAmount = scroll;
            this.xhr.onreadystatechange = this.showChunks;
            count++;
            console.log(count);
            this.xhr.open("GET", "topRestaurants.php?count=" + count, true);
            this.xhr.send();
        }
    },
    showChunks: function() {
        if(this.readyState == 4 && this.status == 200 ) {
            var parentDivElement = document.getElementById("pagecard");
            parentDivElement.innerHTML += this.responseText;
        }
    },
    openPage: function(pageCardId) {
        console.log("openMe");
        var pageCard = document.getElementById(pageCardId);
        localStorage.setItem("name", pageCardId);
        window.open('http://localhost/WT2PROJECT/restaurant.html', '_top');
    }
}
obj.getData();