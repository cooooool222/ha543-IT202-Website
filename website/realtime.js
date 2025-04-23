function getRealTime() {
    var domcategories = document.getElementById("Techgadgetcategorycount");
    var domproducts = document.getElementById("Techgadgetproductcount");
    var domlistpricetotal = document.getElementById("listpricetotal");
    var domwholesalepricetotal = document.getElementById("Wholesalepricetotal")
    var request = new XMLHttpRequest();
    request.open("GET", "realtime.php", true);
    request.onreadystatechange = function() {
        if (request.readyState == 4 && request.status == 200) {
            var xmldoc = request.responseXML;
            var xmlcategories = xmldoc.getElementsByTagName("Techgadgetcategories")[0];
            var categories = xmlcategories.childNodes[0].nodeValue;
            var xmlproducts = xmldoc.getElementsByTagName("Techgadgetproducts")[0];
            var products = xmlproducts.childNodes[0].nodeValue;
            var xmllistpricetotal = xmldoc.getElementsByTagName("TechgadgetListPrice")[0];
            var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
            var xmlwholesalepricetotal = xmldoc.getElementsByTagName("Techgadgetwholesaleprice")[0];
            var wholesalepricetotal = xmlwholesalepricetotal.childNodes[0].nodeValue;
            domcategories.innerHTML = categories;
            domproducts.innerHTML = products;
            domlistpricetotal.innerHTML = listpricetotal;
            domwholesalepricetotal.innerHTML = wholesalepricetotal;

        }
    };
    request.send();
   }
   