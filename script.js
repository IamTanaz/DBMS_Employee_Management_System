
const search = () =>{
    var input_text = document.getElementById("text").value.toUpperCase();
    var table = document.getElementById("table");
    var tr = table.getElementsByTagName("tr");
    for(var i = 0; i<tr.length; i++){
        td = tr[i].getElementsByTagName("td")[1];
        if(td){
            var textvalue = td.textContent;
            if(textvalue.toUpperCase().indexOf(input_text)>-1){
                tr[i].style.display = ""

            }else{
                tr[i].style.display = "none";
            }
        
        }

    }
    
    
}