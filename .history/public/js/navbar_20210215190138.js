document.addEventListener('scroll', onScrolling())

function onScrolling() {
    var doc = document.documentElement
    var top = (window.pageYOffset || document.documentElement.scrollTop) - (doc.clientTop || 0)
    console.log(top)
}
