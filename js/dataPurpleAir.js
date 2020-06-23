$('document').ready(function () {

    $.ajax({
        type: "GET",
        url: "https://www.purpleair.com/data.json?key=T2Z2PS44UEJPQ642&show=25501",
        dataType: "json",
        success: function (data) {

            // for (var i in data) {
            //     console.log(data[i].vendas)
            // }
            var label = [];

            var media = [];

            for (var i = 0; i < data.length; i++) {

                label.push(data[i].);
                media.push(data[i].media);
                
            }

            grafico(label,media);

        }
    });

})