 
$.ajax({
    type: "GET",
    url: "https://www.purpleair.com/data.json?key=BWIZGFV6LTP13MVS&show=31105",
    dataType: "json",
    success: function (data) {

        // data = JSON.parse(data);

        let pm = [];
        let aq = []

        for (var i = 0; i < data.data.length; i++) {
                  
            pm.push(data.data[i])

            aq = pm['0'][1]
            
            

           
        }

        aq = parseFloat(.5*aq-.66).toFixed(0)

        function zero(aq) {
            if (aq < 0) {
                return 0
              } else {
                return aq
              }
        }

        aq = zero(aq)
        

        console.log(aq)

        let aqLabel = `${aq} &#181;g/m&#179`
        
        $('#aq-abr').append(aqLabel);

        function getCardColor(d) {
            return d >= 350 ? '#800000' :
                   d >= 150 ? '#800080' :
                   d >= 55  ? '#FF0000' :
                   d >= 35  ? '#FF8C00' :
                   d >= 12  ? '#FFFF00' :
                   d >= 0   ? '#008000' :
                              'white' ;
        }


        $('#background-color-abr').css('background-color',getCardColor(aq))

        function getLabelColor(d) {
            return d >= 350 ? '#FFFFFF' :
                   d >= 150 ? '#FFFFFF' :
                   d >= 55  ? '#FFFFFF' :
                   d >= 35  ? '#FFFFFF' :
                   d >= 12  ? '#000000' :
                   d >= 0   ? '#FFFFFF' :
                              'white' ;
        }

        $('#label-color-abr').css('color',getLabelColor(aq))
        $('.aq-color-abr').css('color',getLabelColor(aq))
        $('#color-footer-abr').css('color',getLabelColor(aq))
        $('#color-i-abr').css('color',getLabelColor(aq))

        function getAqClass(d) {
            return d >  125 ? 'Pésima'     :
                   d >  75  ? 'Muito Ruim' :
                   d >= 50  ? 'Ruim'       :
                   d >= 25  ? 'Moderada'   :
                   d >= 0   ? 'Boa'        :
                              '' ;
        }

        $('.aq-class-abr').append(getAqClass(aq))



    }

    


});



