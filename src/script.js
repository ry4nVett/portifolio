document.getElementById("year").innerHTML = new Date().getFullYear();

// document.getElementById('contactForm').addEventListener('submit', function(event) {
//     var name = document.getElementById('name').value.trim();
//     var email = document.getElementById('email').value.trim();
//     var message = document.getElementById('message').value.trim();
//     var error = document.getElementById('error');

//     if (!name || !email || !message) {
//       alert("Preencha todos os campos")
//         error.style.display = 'block';
//         event.preventDefault(); 
//     } else {
//         error.style.display = 'none';
//     }

// });