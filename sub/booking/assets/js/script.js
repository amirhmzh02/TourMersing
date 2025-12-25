function calc(value){

    var destination = document.getElementById('giftplaces').value;
    var numberGuests = document.getElementById('Numofguests').value;
  
  
    if (destination === 'ASEANIA BEACH RESORT'){
      var totalPrice = document.getElementById('totalPrice').value = 590 * numberGuests ;
    }
    else if (destination === 'DCOCONUT RESORT'){
      var totalPrice = document.getElementById('totalPrice').value = 455 * numberGuests ;
    }
    else if (destination === 'RAWA ISLAND RESORT'){
      var totalPrice = document.getElementById('totalPrice').value = 1350 * numberGuests ;
    }
    else if (destination === 'BLUEWATER RESORT'){
      var totalPrice = document.getElementById('totalPrice').value = 550 * numberGuests ;
    }
    else if (destination === 'SARI PACIFICA RESORT'){
      var totalPrice = document.getElementById('totalPrice').value = 560 * numberGuests ;
    }
    else if (destination === 'CHALET TOK MOK'){
      var totalPrice = document.getElementById('totalPrice').value = 410 * numberGuests ;
    }
}
