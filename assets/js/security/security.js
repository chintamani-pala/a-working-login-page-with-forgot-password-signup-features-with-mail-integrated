$(document).ready(function(){
  $(document).contextmenu(function() {
      return false;
  });
});
   document.onkeydown = function(e) {
            if(event.keyCode == 123) {
            return false;
            }
            if(event.keyCode == 121) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                event.preventDefault();
                swal("Please Don't Try To Inspect Our Code Because Too Many Hard Work Is Invested To Write The Programe","","error");
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
            }
            if(e.keyCode == 'F10'.charCodeAt(0) && e.keyCode == 'F12'.charCodeAt(0)) {
            return false;
            }
            if (event.ctrlKey && event.keyCode === 83) {
                event.preventDefault();
                // alert();
                swal("Please Dont Try To Copy Our Code Because Programming Is Not Easy","","error");
            }
        }


























