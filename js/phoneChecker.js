var inputPrice = document.getElementById("data2");

function validate(evt) {
    var errorMsg = document.querySelector('.error')
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    inputPrice.classList = '';
    errorMsg.classList = "error";
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        errorMsg.classList.add('visible');
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
}