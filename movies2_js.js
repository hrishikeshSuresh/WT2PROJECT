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

                var para = document.createElement("p");
                para.innerHTML = i + ', ' + responseJson[i]['city'] + ', ' + responseJson[i]['country'];
                divElement.appendChild(para);

                var parentDivElement = document.getElementById("pagecard");
                parentDivElement.appendChild(divElement);
            }
        }
        else {
          console.log("Something's wrong");
        }
    }
}
console.log("works");
obj.getData();