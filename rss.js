function NewsFeed(){
	this.feeds = new Array();
	this.xhr = new XMLHttpRequest();
	temp = this;
	this.getFeed();
}

NewsFeed.prototype.getFeed = function(){
	this.xhr.onreadystatechange = this.showFeed;
	this.xhr.open("GET", "getRecipes.php", true);
	this.xhr.send();	
}

NewsFeed.prototype.showFeed = function(){
	if(this.readyState == 4 && this.status == 200){
		var res = this.responseXML;
		console.log(res);
		var root = res.documentElement;
		var itemList = root.getElementsByTagName("item");
		for (var i=0; i<itemList.length; i++) {
			var title = itemList[i].getElementsByTagName("title")[0].firstChild.nodeValue;			
			var link = itemList[i].getElementsByTagName("link")[0].firstChild.nodeValue;
			var description = itemList[i].getElementsByTagName("description")[0].firstChild.nodeValue;
			
    		var descriptionElement = document.createElement("div");
    		descriptionElement.setAttribute("class", "description");

    		var innerDivElement = document.createElement("div");
    		innerDivElement.setAttribute("class", "movie_info")

    		var pTitle = document.createElement("p");
    		pTitle.innerHTML = title;
    		var hyperLink = document.createElement("a");
    		hyperLink.setAttribute("href", link);
    		hyperLink.appendChild(pTitle);

    		innerDivElement.appendChild(hyperLink);

    		var pDescription = document.createElement("p");
    		pDescription.setAttribute("class", "desc");
    		pDescription.innerHTML = description;

    		descriptionElement.appendChild(innerDivElement);
    		descriptionElement.appendChild(pDescription);
    		document.body.appendChild(descriptionElement);
		}
	}
}

function init() {
	new NewsFeed();
}