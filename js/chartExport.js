const btnDownload = document.querySelector('#download1')
const myCanvas = document.querySelector('#lineChart')

btnDownload.addEventListener("click", function () {
    // IE/Edge Suport (PNG Only)
    if (window.navigator.msSaveBlob) {
        window.navigator.msSaveBlob(myCanvas.msToBlob(), 'chart-canvas.png')
    }else {
        const a = document.createElement('a')

        document.body.appendChild(a)
        a.href = myCanvas.toDataURL('image/png', 1.0)
        a.download = 'chart-canvas.png'
        a.click()
        a.windowtab=window.open('about:blank','image from canvas')
        a.windowtab.document.write("<img src='"+a.href+"' alt='from canvas'/>")
        document.body.removeChild(a)
    }
    
})

const btnDownload2 = document.querySelector('#download2')
const myCanvas2 = document.querySelector('#lineChart2')


btnDownload2.addEventListener("click", function () {
    // IE/Edge Suport (PNG Only)
    if (window.navigator.msSaveBlob) {
        window.navigator.msSaveBlob(myCanvas2.msToBlob(), 'chart2-canvas.png')
    }else {
        const a = document.createElement('a')

        document.body.appendChild(a)
        a.href = myCanvas2.toDataURL('image/png', 1.0)
        a.download = 'chart2-canvas.png'
        a.click()
        a.windowtab=window.open('about:blank','image from canvas')
        a.windowtab.document.write("<img src='"+a.href+"' alt='from canvas'/>")
        document.body.removeChild(a)
    }
    
})

const btnDownload3 = document.querySelector('#download3')
const myCanvas3 = document.querySelector('#lineChart3')


btnDownload3.addEventListener("click", function () {
    // IE/Edge Suport (PNG Only)
    if (window.navigator.msSaveBlob) {
        window.navigator.msSaveBlob(myCanvas3.msToBlob(), 'chart-canvas.png')
    }else {
        const a = document.createElement('a')

        document.body.appendChild(a)
        a.href = myCanvas3.toDataURL('image/png', 1.0)
        a.download = 'chart3-canvas.png'
        a.click()
        a.windowtab=window.open('about:blank','image from canvas')
        a.windowtab.document.write("<img src='"+a.href+"' alt='from canvas'/>")
        document.body.removeChild(a)
    }
    
})