<script>
var show_cse = document.getElementById('show_cse');
var show_it = document.getElementById('show_it');
var show_ece = document.getElementById('show_ece');
var show_eee = document.getElementById('show_eee');
var show_me = document.getElementById('show_me');
var show_ce = document.getElementById('show_ce');
var aboutus = document.getElementById('aboutus');
var deafult_show = document.getElementById('deafult');
var sem_button_show = document.getElementById('sem');

function handlebranchChange(event) {
    var paymentType = event.target.value;
    if (paymentType == "CSE") {
        show_cse.style.display="flex";
        sem_button_show.style.opacity="1";
    }
    if (paymentType == "IT") {
        show_it.style.display="flex";
        sem_button_show.style.opacity="1";
    }
    if (paymentType == "ECE") {
        show_ece.style.display="flex";
        sem_button_show.style.opacity="1";
    }
    if (paymentType == "EEE") {
        show_eee.style.display="flex";
        sem_button_show.style.opacity="1";
    }
    if (paymentType == "ME") {
        show_me.style.display="flex";
        sem_button_show.style.opacity="1";
    }
    if (paymentType == "CE") {
        show_ce.style.display="flex";
        sem_button_show.style.opacity="1";
    }
  }


function about()
{
    aboutus.style.display="flex";
    show_cse.style.display="none";
    show_it.style.display="none";
    show_ece.style.display="none";
    show_eee.style.display="none";
    show_me.style.display="none";
    show_ce.style.display="none";
    sem_button_show.style.opacity="0";

}  


function handlesemesterChange(event) {

    var selectElement = event.target;
    var value = selectElement.value;
    document.getElementById("semnumber").innerHTML = value;
}
</script>