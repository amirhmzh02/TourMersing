function calcIslandSelect(value){

    var package = document.getElementById('package').value;
    var adult = document.getElementById('adult').value;
    var child = document.getElementById('child').value;

  
  
    if (package === 'light'){
        var totalPrice = document.getElementById('totalPrice').value =  (adult*140) + (child*70) ;
    }
    else if (package === 'adventure'){
        var totalPrice = document.getElementById('totalPrice').value =  (adult*180) + (child*90) ;
    }
}