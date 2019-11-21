var obj = {
    xhr: new XMLHttpRequest(),
    getData: function() {
        this.xhr.onreadystatechange = this.createList;
        this.xhr.open("GET", "topFood.php", true);
        this.xhr.send();
        console.log("XHR request sent");
    },
    createList: function() {
        if(this.readyState == 4 && this.status == 200) {
            var response = this.responseText;
            console.log("Received response");
            console.log(response);
            /*
             * remove 1 at end of string
             */
            response = response.substring(0, response.length - 1);
            /*
             * JSON.parse() method parses a JSON string,
             * constructing the JS value/object described
             * by the string
             */
            console.log(response[401]);
            var responseJson = JSON.parse(response);
            console.log(responseJson);
            for(i in responseJson) {
                console.log(i);
                var divElement = document.createElement("div");
                divElement.setAttribute("id", i);
                divElement.setAttribute("class", "moviecard");

                var para = document.createElement("p");
                para.innerHTML = i;
                divElement.appendChild(para);

                var parentDivElement = document.getElementById("pagecard");
                parentDivElement.appendChild(divElement);

                var imgElement = document.createElement("img");
                imgElement.setAttribute("id", "showthumbnail");
                imgElement.setAttribute("src", "images/" + i + ".jpg");
                divElement.appendChild(imgElement);
            }
        }
        else {
          console.log("Something's wrong");
        }
    }
}
obj.getData();