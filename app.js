/* My Works tab content */
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


/* Emailjs */

//     var btn = document.getElementById('btn-submit');
//     btn.addEventListener('click', function(e){
//       e.preventDefault()
//       var name = document.getElementById('name').value;
//       var email = document.getElementById('email').value;
//       var subject = document.getElementById('subject').value;
//       var message = document.getElementById('message').value;
//       var body = 'name: ' + name + '<br/> email: ' + email + '<br/> subject ' + subject + '<br/> message ' + message; 
    
//       Email.send({
//         Host : "smtp.elasticemail.com",
//         Username : "managbanagdosal@gmail.com",
//         Password : "CAA955AE7E39D15D7771D799089199770A38",
//         To : 'managbanagdosal@gmail.com',
//         From : email,
//         Subject : subject,
//         Body : body
//       }).then(
//         message => alert(message)
//     );

//     return true;

// })

setTimeout(() => {document.getElementById('splash-screen').classList.toggle('fade');}, 6000);