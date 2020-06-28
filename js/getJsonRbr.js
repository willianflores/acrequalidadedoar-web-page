$(document).ready(function() {
    $.ajax({      
        type: "GET",
        xhrFields: {
            withCredentials: true
        },
        dataType: "json",
        url: "https://www.purpleair.com/data.json?key=XYRDDDUFJVNDYA92&show=25549",
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

            let aqRbr = `${aq} &#181;g/m&#179`
            
            $('#aq-rbr').append(aqRbr);

            function getCardColor(d) {
                return d >= 350 ? '#800000' :
                    d >= 150 ? '#800080' :
                    d >= 55  ? '#FF0000' :
                    d >= 35  ? '#FF8C00' :
                    d >= 12  ? '#FFFF00' :
                    d >= 0   ? '#008000' :
                                'white' ;
            }


            $('#background-color-rbr').css('background-color',getCardColor(aq))

            function getLabelColor(d) {
                return d >= 350 ? '#FFFFFF' :
                    d >= 150 ? '#FFFFFF' :
                    d >= 55  ? '#FFFFFF' :
                    d >= 35  ? '#FFFFFF' :
                    d >= 12  ? '#000000' :
                    d >= 0   ? '#FFFFFF' :
                                'white' ;
            }

            $('#label-color-rbr').css('color',getLabelColor(aq))
            $('.aq-color-rbr').css('color',getLabelColor(aq))
            $('#color-footer-rbr').css('color',getLabelColor(aq))
            $('#color-i-rbr').css('color',getLabelColor(aq))

            function getAqClass(d) {
                return d >  125 ? 'Pésima'     :
                    d >  75  ? 'Muito Ruim' :
                    d >= 50  ? 'Ruim'       :
                    d >= 25  ? 'Moderada'   :
                    d >= 0   ? 'Boa'        :
                                '' ;
            }

            $('.aq-class-rbr').append(getAqClass(aq))



        }

        


    })

})

