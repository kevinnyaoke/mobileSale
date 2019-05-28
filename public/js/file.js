function  checkPrice() {
    var buyingprice=parseInt(document.getElementById('buyingprice').value);
    var sellingprice=parseInt(document.getElementById('sellingprice').value);
    var ok=true;
    if(buyingprice>=sellingprice){
        alert('Buying price cannot be more than selling price');
        document.getElementById("buyingprice").style.borderColor = "#E34234";
        document.getElementById("sellingprice").style.borderColor = "#E34234";
        ok=false;
    }
    return ok;
}
function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function calculate() 

