// $(document).ready(function() {
//   $(".btn").click(function() {
//     var firstName = document.getElementById("regFirstName").value;
//     var lastName = document.getElementById("regLastName").value;
//     var email = document.getElementById("regEmail").value;
//     var pass = document.getElementById("regPassword").value;

//     $.ajax({
//       method: "POST",
//       url: "php/userRegistration.php",
//       // dataType: "json",
//       data: {
//         regFirstName: firstName,
//         regLastName: lastName,
//         regEmail: email,
//         regPassword: pass
//       },
//       success: function(podaci) {
//         alert("Korisnik je uspesno unet u bazu.");
//       },
//       error: function(xhr, statusTxt, error) {
//         var status = xhr.status;
//         switch (status) {
//           case 500:
//             alert("Greska na serveru. Trenutno nije moguce uneti korisnika.");
//             break;
//           case 404:
//             alert("Stranica nije pronadjena.");
//             break;
//           default:
//             alert("Greska: " + status + " - " + statusTxt);
//             break;
//         }
//       }
//     });
//   });
// });
