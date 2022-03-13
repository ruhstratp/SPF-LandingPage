
const hamburger  = document.getElementById("hamburger")
const navUL = document.getElementById("nav-ul")

hamburger.addEventListener ('click', () => {
  navUL.classList.toggle ('show');
});

var slide = 0;
schimbapoza();

function schimbapoza() {
  var i;
  var poze = document.getElementsByClassName("gallery");

  for (i = 0; i < poze.length; i++) {
    poze[i].style.display = "none";
  }
  slide++;

  if (slide > poze.length) {slide = 1}
  poze[slide-1].style.display = "block";

  setTimeout(schimbapoza, 10000); 
}

/*
var start = 1;
function interval()
{
  setInterval(galerie,1000);
}

function galerie()
{
  var imagini;
  if(start==1)
    {imagini="/img/reviderm.jpg";}
  else if(start==2)
    {imagini="/img/SVR.jpg";}
  else if(start==3)
    {imagini="/img/Q-COSM.jpg";}
  else if(start==4)
    {imagini="/img/avene.jpg.jpg";}
  else if(start==5)
    {imagini="/img/EVY.jpg.jpg";}
  else{start=1;}
document.getElementById("imagine").src=""+ imagini;
start++;

}*/

var i=0;
     var introPagina = setInterval(function(){
           alert("Bine ați venit! :)");
           i++;
           if(i>=1) {
                 clearInterval(introPagina);
            }
      } , 1000);

   function validateForm() {
        if (isEmpty(document.getElementById('email').value.trim())) {
        alert('Nu aţi introdus o adresă de e-mail!');
        return false;
        }
        if (!validateEmail(document.getElementById('email').value.trim())) {
        alert('Adresa de e-mail trebuie să fie validă!');
        return false;
        }
        return alert("Mulţumesc că te-ai abonat! :)");
    
        function isEmpty(str) { return (str.length === 0 || !str.trim()); }

        function validateEmail(email) {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
        return isEmpty(email) || re.test(email);
        }
    }
