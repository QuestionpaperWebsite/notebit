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
var showadmin = document.getElementById('adminmenu');


var showsem1 = document.getElementById("sem1");
var showsem2 = document.getElementById("sem2");
var showsem3 = document.getElementById("sem3");
var showsem4 = document.getElementById("sem4");
var showsem5 = document.getElementById("sem5");
var showsem6 = document.getElementById("sem6");
var showsem7 = document.getElementById("sem7");
var showsem8 = document.getElementById("sem8");


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
    showadmin.style.display="none";
    sem_button_show.style.opacity="0";

}  

function admin()
{
    showadmin.style.display="flex";
    aboutus.style.display="none";
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


    if(value == "Semester: 1")
    {
        showsem1.style.display="block";
        showsem2.style.display="none";
        showsem3.style.display="none";
        showsem4.style.display="none";
        showsem5.style.display="none";
        showsem6.style.display="none";
        showsem7.style.display="none";
        showsem8.style.display="none";
    }
    if(value == "Semester: 2")
    {
        showsem1.style.display="none";
        showsem2.style.display="block";
        showsem3.style.display="none";
        showsem4.style.display="none";
        showsem5.style.display="none";
        showsem6.style.display="none";
        showsem7.style.display="none";
        showsem8.style.display="none";
    }
    if(value == "Semester: 3")
    {
        showsem1.style.display="none";
        showsem2.style.display="none";
        showsem3.style.display="block";
        showsem4.style.display="none";
        showsem5.style.display="none";
        showsem6.style.display="none";
        showsem7.style.display="none";
        showsem8.style.display="none";
    }
    if(value == "Semester: 4")
    {
        showsem1.style.display="none";
        showsem2.style.display="none";
        showsem3.style.display="none";
        showsem4.style.display="block";
        showsem5.style.display="none";
        showsem6.style.display="none";
        showsem7.style.display="none";
        showsem8.style.display="none";
    }
    if(value == "Semester: 5")
    {
        showsem1.style.display="none";
        showsem2.style.display="none";
        showsem3.style.display="none";
        showsem4.style.display="none";
        showsem5.style.display="block";
        showsem6.style.display="none";
        showsem7.style.display="none";
        showsem8.style.display="none";
    }
    if(value == "Semester: 6")
    {
        showsem1.style.display="none";
        showsem2.style.display="none";
        showsem3.style.display="none";
        showsem4.style.display="none";
        showsem5.style.display="none";
        showsem6.style.display="block";
        showsem7.style.display="none";
        showsem8.style.display="none";
    }
    if(value == "Semester: 7")
    {
        showsem1.style.display="none";
        showsem2.style.display="none";
        showsem3.style.display="none";
        showsem4.style.display="none";
        showsem5.style.display="none";
        showsem6.style.display="none";
        showsem7.style.display="block";
        showsem8.style.display="none";
    }
    if(value == "Semester: 8")
    {
        showsem1.style.display="none";
        showsem2.style.display="none";
        showsem3.style.display="none";
        showsem4.style.display="none";
        showsem5.style.display="none";
        showsem6.style.display="none";
        showsem7.style.display="none";
        showsem8.style.display="block";
    }
}

var navcontent = document.getElementById("navcon");
function showmenu(){
    navcontent.style.display="block";

}
function hidemenu(){
    navcontent.style.display="none";
    
}
</script>