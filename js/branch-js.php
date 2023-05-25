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


function csesemesterChange(event) {

    var selectElement = event.target;
    var value = selectElement.value;
    // document.getElementById("semnumber").innerHTML = value;
    console.log(event);


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

//----------------------------------------------------- IT VIEW------------------------------------------------------------

var it_showsem1 = document.getElementById("it_sem1");
var it_showsem2 = document.getElementById("it_sem2");
var it_showsem3 = document.getElementById("it_sem3");
var it_showsem4 = document.getElementById("it_sem4");
var it_showsem5 = document.getElementById("it_sem5");
var it_showsem6 = document.getElementById("it_sem6");
var it_showsem7 = document.getElementById("it_sem7");
var it_showsem8 = document.getElementById("it_sem8");

function itsemesterChange(event) {

var selectElement = event.target;
var value = selectElement.value;
// document.getElementById("semnumber").innerHTML = value;



if(value == "Semester: 1")
{
    it_showsem1.style.display="block";
    it_showsem2.style.display="none";
    it_showsem3.style.display="none";
    it_showsem4.style.display="none";
    it_showsem5.style.display="none";
    it_showsem6.style.display="none";
    it_showsem7.style.display="none";
    it_showsem8.style.display="none";
}
if(value == "Semester: 2")
{
    it_showsem1.style.display="none";
    it_showsem2.style.display="block";
    it_showsem3.style.display="none";
    it_showsem4.style.display="none";
    it_showsem5.style.display="none";
    it_showsem6.style.display="none";
    it_showsem7.style.display="none";
    it_showsem8.style.display="none";
}
if(value == "Semester: 3")
{
    it_showsem1.style.display="none";
    it_showsem2.style.display="none";
    it_showsem3.style.display="block";
    it_showsem4.style.display="none";
    it_showsem5.style.display="none";
    it_showsem6.style.display="none";
    it_showsem7.style.display="none";
    it_showsem8.style.display="none";
}
if(value == "Semester: 4")
{
    it_showsem1.style.display="none";
    it_showsem2.style.display="none";
    it_showsem3.style.display="none";
    it_showsem4.style.display="block";
    it_showsem5.style.display="none";
    it_showsem6.style.display="none";
    it_showsem7.style.display="none";
    it_showsem8.style.display="none";
}
if(value == "Semester: 5")
{
    it_showsem1.style.display="none";
    it_showsem2.style.display="none";
    it_showsem3.style.display="none";
    it_showsem4.style.display="none";
    it_showsem5.style.display="block";
    it_showsem6.style.display="none";
    it_showsem7.style.display="none";
    it_showsem8.style.display="none";
}
if(value == "Semester: 6")
{
    it_showsem1.style.display="none";
    it_showsem2.style.display="none";
    it_showsem3.style.display="none";
    it_showsem4.style.display="none";
    it_showsem5.style.display="none";
    it_showsem6.style.display="block";
    it_showsem7.style.display="none";
    it_showsem8.style.display="none";
}
if(value == "Semester: 7")
{
    it_showsem1.style.display="none";
    it_showsem2.style.display="none";
    it_showsem3.style.display="none";
    it_showsem4.style.display="none";
    it_showsem5.style.display="none";
    it_showsem6.style.display="none";
    it_showsem7.style.display="block";
    it_showsem8.style.display="none";
}
if(value == "Semester: 8")
{
    it_showsem1.style.display="none";
    it_showsem2.style.display="none";
    it_showsem3.style.display="none";
    it_showsem4.style.display="none";
    it_showsem5.style.display="none";
    it_showsem6.style.display="none";
    it_showsem7.style.display="none";
    it_showsem8.style.display="block";
}
}

//------------------------------------------------------------------------------------------------------------------------

//----------------------------------------------------- ECE VIEW------------------------------------------------------------

var ece_showsem1 = document.getElementById("ece_sem1");
var ece_showsem2 = document.getElementById("ece_sem2");
var ece_showsem3 = document.getElementById("ece_sem3");
var ece_showsem4 = document.getElementById("ece_sem4");
var ece_showsem5 = document.getElementById("ece_sem5");
var ece_showsem6 = document.getElementById("ece_sem6");
var ece_showsem7 = document.getElementById("ece_sem7");
var ece_showsem8 = document.getElementById("ece_sem8");

function ecesemesterChange(event) {

var selectElement = event.target;
var value = selectElement.value;
// document.getElementById("semnumber").innerHTML = value;



if(value == "Semester: 1")
{
    ece_showsem1.style.display="block";
    ece_showsem2.style.display="none";
    ece_showsem3.style.display="none";
    ece_showsem4.style.display="none";
    ece_showsem5.style.display="none";
    ece_showsem6.style.display="none";
    ece_showsem7.style.display="none";
    ece_showsem8.style.display="none";
}
if(value == "Semester: 2")
{
    ece_showsem1.style.display="none";
    ece_showsem2.style.display="block";
    ece_showsem3.style.display="none";
    ece_showsem4.style.display="none";
    ece_showsem5.style.display="none";
    ece_showsem6.style.display="none";
    ece_showsem7.style.display="none";
    ece_showsem8.style.display="none";
}
if(value == "Semester: 3")
{
    ece_showsem1.style.display="none";
    ece_showsem2.style.display="none";
    ece_showsem3.style.display="block";
    ece_showsem4.style.display="none";
    ece_showsem5.style.display="none";
    ece_showsem6.style.display="none";
    ece_showsem7.style.display="none";
    ece_showsem8.style.display="none";
}
if(value == "Semester: 4")
{
    ece_showsem1.style.display="none";
    ece_showsem2.style.display="none";
    ece_showsem3.style.display="none";
    ece_showsem4.style.display="block";
    ece_showsem5.style.display="none";
    ece_showsem6.style.display="none";
    ece_showsem7.style.display="none";
    ece_showsem8.style.display="none";
}
if(value == "Semester: 5")
{
    ece_showsem1.style.display="none";
    ece_showsem2.style.display="none";
    ece_showsem3.style.display="none";
    ece_showsem4.style.display="none";
    ece_showsem5.style.display="block";
    ece_showsem6.style.display="none";
    ece_showsem7.style.display="none";
    ece_showsem8.style.display="none";
}
if(value == "Semester: 6")
{
    ece_showsem1.style.display="none";
    ece_showsem2.style.display="none";
    ece_showsem3.style.display="none";
    ece_showsem4.style.display="none";
    ece_showsem5.style.display="none";
    ece_showsem6.style.display="block";
    ece_showsem7.style.display="none";
    ece_showsem8.style.display="none";
}
if(value == "Semester: 7")
{
    ece_showsem1.style.display="none";
    ece_showsem2.style.display="none";
    ece_showsem3.style.display="none";
    ece_showsem4.style.display="none";
    ece_showsem5.style.display="none";
    ece_showsem6.style.display="none";
    ece_showsem7.style.display="block";
    ece_showsem8.style.display="none";
}
if(value == "Semester: 8")
{
    ece_showsem1.style.display="none";
    ece_showsem2.style.display="none";
    ece_showsem3.style.display="none";
    ece_showsem4.style.display="none";
    ece_showsem5.style.display="none";
    ece_showsem6.style.display="none";
    ece_showsem7.style.display="none";
    ece_showsem8.style.display="block";
}
}

//------------------------------------------------------------------------------------------------------------------------

//----------------------------------------------------- EEE VIEW------------------------------------------------------------

var eee_showsem1 = document.getElementById("eee_sem1");
var eee_showsem2 = document.getElementById("eee_sem2");
var eee_showsem3 = document.getElementById("eee_sem3");
var eee_showsem4 = document.getElementById("eee_sem4");
var eee_showsem5 = document.getElementById("eee_sem5");
var eee_showsem6 = document.getElementById("eee_sem6");
var eee_showsem7 = document.getElementById("eee_sem7");
var eee_showsem8 = document.getElementById("eee_sem8");

function eeesemesterChange(event) {

var selectElement = event.target;
var value = selectElement.value;
// document.getElementById("semnumber").innerHTML = value;



if(value == "Semester: 1")
{
    eee_showsem1.style.display="block";
    eee_showsem2.style.display="none";
    eee_showsem3.style.display="none";
    eee_showsem4.style.display="none";
    eee_showsem5.style.display="none";
    eee_showsem6.style.display="none";
    eee_showsem7.style.display="none";
    eee_showsem8.style.display="none";
}
if(value == "Semester: 2")
{
    eee_showsem1.style.display="none";
    eee_showsem2.style.display="block";
    eee_showsem3.style.display="none";
    eee_showsem4.style.display="none";
    eee_showsem5.style.display="none";
    eee_showsem6.style.display="none";
    eee_showsem7.style.display="none";
    eee_showsem8.style.display="none";
}
if(value == "Semester: 3")
{
    eee_showsem1.style.display="none";
    eee_showsem2.style.display="none";
    eee_showsem3.style.display="block";
    eee_showsem4.style.display="none";
    eee_showsem5.style.display="none";
    eee_showsem6.style.display="none";
    eee_showsem7.style.display="none";
    eee_showsem8.style.display="none";
}
if(value == "Semester: 4")
{
    eee_showsem1.style.display="none";
    eee_showsem2.style.display="none";
    eee_showsem3.style.display="none";
    eee_showsem4.style.display="block";
    eee_showsem5.style.display="none";
    eee_showsem6.style.display="none";
    eee_showsem7.style.display="none";
    eee_showsem8.style.display="none";
}
if(value == "Semester: 5")
{
    eee_showsem1.style.display="none";
    eee_showsem2.style.display="none";
    eee_showsem3.style.display="none";
    eee_showsem4.style.display="none";
    eee_showsem5.style.display="block";
    eee_showsem6.style.display="none";
    eee_showsem7.style.display="none";
    eee_showsem8.style.display="none";
}
if(value == "Semester: 6")
{
    eee_showsem1.style.display="none";
    eee_showsem2.style.display="none";
    eee_showsem3.style.display="none";
    eee_showsem4.style.display="none";
    eee_showsem5.style.display="none";
    eee_showsem6.style.display="block";
    eee_showsem7.style.display="none";
    eee_showsem8.style.display="none";
}
if(value == "Semester: 7")
{
    eee_showsem1.style.display="none";
    eee_showsem2.style.display="none";
    eee_showsem3.style.display="none";
    eee_showsem4.style.display="none";
    eee_showsem5.style.display="none";
    eee_showsem6.style.display="none";
    eee_showsem7.style.display="block";
    eee_showsem8.style.display="none";
}
if(value == "Semester: 8")
{
    eee_showsem1.style.display="none";
    eee_showsem2.style.display="none";
    eee_showsem3.style.display="none";
    eee_showsem4.style.display="none";
    eee_showsem5.style.display="none";
    eee_showsem6.style.display="none";
    eee_showsem7.style.display="none";
    eee_showsem8.style.display="block";
}
}

//------------------------------------------------------------------------------------------------------------------------

//----------------------------------------------------- ME VIEW------------------------------------------------------------

var me_showsem1 = document.getElementById("me_sem1");
var me_showsem2 = document.getElementById("me_sem2");
var me_showsem3 = document.getElementById("me_sem3");
var me_showsem4 = document.getElementById("me_sem4");
var me_showsem5 = document.getElementById("me_sem5");
var me_showsem6 = document.getElementById("me_sem6");
var me_showsem7 = document.getElementById("me_sem7");
var me_showsem8 = document.getElementById("me_sem8");

function mesemesterChange(event) {

var selectElement = event.target;
var value = selectElement.value;
// document.getElementById("semnumber").innerHTML = value;



if(value == "Semester: 1")
{
    me_showsem1.style.display="block";
    me_showsem2.style.display="none";
    me_showsem3.style.display="none";
    me_showsem4.style.display="none";
    me_showsem5.style.display="none";
    me_showsem6.style.display="none";
    me_showsem7.style.display="none";
    me_showsem8.style.display="none";
}
if(value == "Semester: 2")
{
    me_showsem1.style.display="none";
    me_showsem2.style.display="block";
    me_showsem3.style.display="none";
    me_showsem4.style.display="none";
    me_showsem5.style.display="none";
    me_showsem6.style.display="none";
    me_showsem7.style.display="none";
    me_showsem8.style.display="none";
}
if(value == "Semester: 3")
{
    me_showsem1.style.display="none";
    me_showsem2.style.display="none";
    me_showsem3.style.display="block";
    me_showsem4.style.display="none";
    me_showsem5.style.display="none";
    me_showsem6.style.display="none";
    me_showsem7.style.display="none";
    me_showsem8.style.display="none";
}
if(value == "Semester: 4")
{
    me_showsem1.style.display="none";
    me_showsem2.style.display="none";
    me_showsem3.style.display="none";
    me_showsem4.style.display="block";
    me_showsem5.style.display="none";
    me_showsem6.style.display="none";
    me_showsem7.style.display="none";
    me_showsem8.style.display="none";
}
if(value == "Semester: 5")
{
    me_showsem1.style.display="none";
    me_showsem2.style.display="none";
    me_showsem3.style.display="none";
    me_showsem4.style.display="none";
    me_showsem5.style.display="block";
    me_showsem6.style.display="none";
    me_showsem7.style.display="none";
    me_showsem8.style.display="none";
}
if(value == "Semester: 6")
{
    me_showsem1.style.display="none";
    me_showsem2.style.display="none";
    me_showsem3.style.display="none";
    me_showsem4.style.display="none";
    me_showsem5.style.display="none";
    me_showsem6.style.display="block";
    me_showsem7.style.display="none";
    me_showsem8.style.display="none";
}
if(value == "Semester: 7")
{
    me_showsem1.style.display="none";
    me_showsem2.style.display="none";
    me_showsem3.style.display="none";
    me_showsem4.style.display="none";
    me_showsem5.style.display="none";
    me_showsem6.style.display="none";
    me_showsem7.style.display="block";
    me_showsem8.style.display="none";
}
if(value == "Semester: 8")
{
    me_showsem1.style.display="none";
    me_showsem2.style.display="none";
    me_showsem3.style.display="none";
    me_showsem4.style.display="none";
    me_showsem5.style.display="none";
    me_showsem6.style.display="none";
    me_showsem7.style.display="none";
    me_showsem8.style.display="block";
}
}

//------------------------------------------------------------------------------------------------------------------------

//----------------------------------------------------- CE VIEW------------------------------------------------------------

var ce_showsem1 = document.getElementById("ce_sem1");
var ce_showsem2 = document.getElementById("ce_sem2");
var ce_showsem3 = document.getElementById("ce_sem3");
var ce_showsem4 = document.getElementById("ce_sem4");
var ce_showsem5 = document.getElementById("ce_sem5");
var ce_showsem6 = document.getElementById("ce_sem6");
var ce_showsem7 = document.getElementById("ce_sem7");
var ce_showsem8 = document.getElementById("ce_sem8");

function cesemesterChange(event) {

var selectElement = event.target;
var value = selectElement.value;
// document.getElementById("semnumber").innerHTML = value;



if(value == "Semester: 1")
{
    ce_showsem1.style.display="block";
    ce_showsem2.style.display="none";
    ce_showsem3.style.display="none";
    ce_showsem4.style.display="none";
    ce_showsem5.style.display="none";
    ce_showsem6.style.display="none";
    ce_showsem7.style.display="none";
    ce_showsem8.style.display="none";
}
if(value == "Semester: 2")
{
    ce_showsem1.style.display="none";
    ce_showsem2.style.display="block";
    ce_showsem3.style.display="none";
    ce_showsem4.style.display="none";
    ce_showsem5.style.display="none";
    ce_showsem6.style.display="none";
    ce_showsem7.style.display="none";
    ce_showsem8.style.display="none";
}
if(value == "Semester: 3")
{
    ce_showsem1.style.display="none";
    ce_showsem2.style.display="none";
    ce_showsem3.style.display="block";
    ce_showsem4.style.display="none";
    ce_showsem5.style.display="none";
    ce_showsem6.style.display="none";
    ce_showsem7.style.display="none";
    ce_showsem8.style.display="none";
}
if(value == "Semester: 4")
{
    ce_showsem1.style.display="none";
    ce_showsem2.style.display="none";
    ce_showsem3.style.display="none";
    ce_showsem4.style.display="block";
    ce_showsem5.style.display="none";
    ce_showsem6.style.display="none";
    ce_showsem7.style.display="none";
    ce_showsem8.style.display="none";
}
if(value == "Semester: 5")
{
    ce_showsem1.style.display="none";
    ce_showsem2.style.display="none";
    ce_showsem3.style.display="none";
    ce_showsem4.style.display="none";
    ce_showsem5.style.display="block";
    ce_showsem6.style.display="none";
    ce_showsem7.style.display="none";
    ce_showsem8.style.display="none";
}
if(value == "Semester: 6")
{
    ce_showsem1.style.display="none";
    ce_showsem2.style.display="none";
    ce_showsem3.style.display="none";
    ce_showsem4.style.display="none";
    ce_showsem5.style.display="none";
    ce_showsem6.style.display="block";
    ce_showsem7.style.display="none";
    ce_showsem8.style.display="none";
}
if(value == "Semester: 7")
{
    ce_showsem1.style.display="none";
    ce_showsem2.style.display="none";
    ce_showsem3.style.display="none";
    ce_showsem4.style.display="none";
    ce_showsem5.style.display="none";
    ce_showsem6.style.display="none";
    ce_showsem7.style.display="block";
    ce_showsem8.style.display="none";
}
if(value == "Semester: 8")
{
    ce_showsem1.style.display="none";
    ce_showsem2.style.display="none";
    ce_showsem3.style.display="none";
    ce_showsem4.style.display="none";
    ce_showsem5.style.display="none";
    ce_showsem6.style.display="none";
    ce_showsem7.style.display="none";
    ce_showsem8.style.display="block";
}
}

//------------------------------------------------------------------------------------------------------------------------

var navcontent = document.getElementById("navcon");
function showmenu(){
    navcontent.style.display="block";

}
function hidemenu(){
    navcontent.style.display="none";
    
}


//--------------------------------------------------- CSE SEARCH SCRIPT ----------------------------------------------------
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable4");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable5");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable6");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable7");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function csesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("csesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("csetable8");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------

//--------------------------------------------------- IT SEARCH SCRIPT ----------------------------------------------------
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable4");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable5");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable6");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable7");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function itsearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("itsearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ittable8");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------- ECE SEARCH SCRIPT ----------------------------------------------------
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable4");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable5");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable6");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable7");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function ecesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ecesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("ecetable8");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------- EEE SEARCH SCRIPT ----------------------------------------------------
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable4");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable5");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable6");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable7");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function eeesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("eeesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("eeetable8");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------- ME SEARCH SCRIPT ----------------------------------------------------
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable4");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable5");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable6");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable7");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function mesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("mesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("metable8");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
//--------------------------------------------------- CE SEARCH SCRIPT ----------------------------------------------------
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable2");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable3");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable4");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable5");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable6");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable7");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function cesearch() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("cesearch");
  filter = input.value.toUpperCase();
  table = document.getElementById("cetable8");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------
</script>