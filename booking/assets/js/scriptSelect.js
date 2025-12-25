function calcSelect(value){

    var destination = document.getElementById('giftplaces').value;
    // var numberGuests = document.getElementById('Numofguests').value;
    var pax = document.getElementById('pax').value;
  
  
    if (destination === 'ASEANIA BEACH RESORT'){
      // var totalPrice = document.getElementById('totalPrice').value = 590 * numberGuests ;
      var totalPrice = document.getElementById('totalPrice').value = 590 * pax ;
    }
    else if (destination === 'DCOCONUT RESORT'){
      // var totalPrice = document.getElementById('totalPrice').value = 455 * numberGuests ;
      var totalPrice = document.getElementById('totalPrice').value = 455 * pax ;
    }
    else if (destination === 'RAWA ISLAND RESORT'){
      // var totalPrice = document.getElementById('totalPrice').value = 1350 * numberGuests ;
      var totalPrice = document.getElementById('totalPrice').value = 1350 * pax ;
    }
    else if (destination === 'BLUEWATER RESORT'){
      // var totalPrice = document.getElementById('totalPrice').value = 550 * numberGuests ;
      var totalPrice = document.getElementById('totalPrice').value = 550 * pax ;
    }
    else if (destination === 'SARI PACIFICA RESORT'){
      // var totalPrice = document.getElementById('totalPrice').value = 560 * numberGuests ;
      var totalPrice = document.getElementById('totalPrice').value = 560 * pax ;
    }
    else if (destination === 'CHALET TOK MOK'){
      // var totalPrice = document.getElementById('totalPrice').value = 410 * numberGuests ;
      var totalPrice = document.getElementById('totalPrice').value = 410 * pax ;
    }
    else{
      var totalPrice = document.getElementById('totalPrice').value = "0" ;
    }
    
}
