<script>
var show_cse = document.getElementById('show_cse');
var show_it = document.getElementById('show_it');
var show_ece = document.getElementById('show_ece');
var show_eee = document.getElementById('show_eee');
var show_me = document.getElementById('show_me');
var show_ce = document.getElementById('show_ce');
// var deafult_show = document.getElementById('deafult');



function handlebranchChange(event) {
    var paymentType = event.target.value;
    if (paymentType == "CSE") {
        show_cse.style.display="flex";
    }
    if (paymentType == "IT") {
        show_it.style.display="flex";
    }
    if (paymentType == "ECE") {
        show_ece.style.display="flex";
    }
    if (paymentType == "EEE") {
        show_eee.style.display="flex";
    }
    if (paymentType == "ME") {
        show_me.style.display="flex";
    }
    if (paymentType == "CE") {
        show_ce.style.display="flex";
    }
  }
</script>