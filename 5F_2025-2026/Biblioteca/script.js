tempo = document.getElementById("time");
data = document.getElementById("date");
bottone= document.getElementById("bottonePerPagina2")
const now = new Date();
updateTime();
updateDate();
bottone.addEventListener("click",()=>{
    window.location.href="form.php";
});
function getCurrentTime(now) {
    return addZero(now.getHours()) + ":" + addZero(now.getMinutes()) + ":" + addZero(now.getSeconds());
}

function addZero(numero) {
    return String(numero).padStart(2, "0")
}

function updateTime() {
    const now = new Date();
    tempo.textContent = getCurrentTime(now);
    setTimeout(() => {
        updateTime()
    }, 1000);
}

function getCurrentDate(now){
    const giorniSettimanali=["Domenica","Lunedì","Martedì","Mercoledì","Giovedì","Venerdì","Sabato"];
    const mesiAnnuali =["Gennaio","Febbraio","Marzo","Aprile","Maggio","Giugno","Luglio","Agosto","Settembre","Ottobre","Novembre","Dicembre"];
    return giorniSettimanali[now.getDay()] + " " + now.getDate() + "/" + mesiAnnuali[now.getMonth()] + "/" + now.getFullYear();
}

function millisecondiPerMezzanotte(now) {
    const domani = new Date(now.getFullYear(),now.getMonth(),now.getDate()+1);
    return domani-now;
}
function updateDate(){
    const now = new Date();
    data.textContent= getCurrentDate(now);
    const mezzanotte = millisecondiPerMezzanotte(now);
    setTimeout(() =>{
        updateDate()
    },mezzanotte);
}

