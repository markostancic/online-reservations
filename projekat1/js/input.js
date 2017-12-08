$(document).ready(function() {
  $('.icon').click(function() {
      $(this).css('border-color', 'black');
  }); 
});

function checkForm() {
            ok = true;
            
            if ($('#email').val().length == '[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$') {
                ok = false;
                alert('Mejl adresa nije pravilno unesena.');
            }
            
            return ok;
        }