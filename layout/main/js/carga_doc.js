function leer_doc() {
    event.preventDefault();
    var input = document.getElementById("uploadManifiesto");
    var file = input.files[0];
    var reader = new FileReader();
    reader.readAsText(file);
    reader.onload = function(event) {
        var csv = event.target.result;
        var datos = csv_array(csv);

        $.ajax({
            url: base_url+"aduanas/aduana/"
            ,method:"POST"
            ,data: JSON.stringify(datos)
            ,async: false
            ,success: function(data){
                resultado = data;
                alert(resultado);
            }
            ,error: function(XMLHttpRequest, textStatus, errorThrown){
                alert(textStatus);
            }
        });

    };
}

function csv_array(csv){
    var lines = csv.split("\r\n");
    var result = [];
    var headers = lines[0].split(",");
    for (var i = 1; i < lines.length-1; i++) {
        var obj = {};
        var currentline = lines[i].split(",");
        for (var j = 0; j < headers.length; j++) {
            obj[headers[j]] = currentline[j];
        }
        result.push(obj);
    }
    return result;

}
