
$('document').ready(function () {

    $.ajax({
        type: "POST",
        url: "../php/sqlQuery1.php",
        dataType: "json",
        success: function (data) {

            // for (var i in data) {
            //     console.log(data[i].vendas)
            // }
            var labelarray = [];

            var mediaarray = [];

            for (var i = 0; i < data.length; i++) {

                labelarray.push(data[i].data);
                mediaarray.push(data[i].media);
                

            }

            grafico(labelarray,mediaarray);

        }
    });

})