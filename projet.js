function initMap() {
    const selector = document.getElementById("map")
    const center = { lat: 43.446643, lng: 5.222023 }
    const options = {
      center: center,
      zoom : 8,
    }
  
  const map = new google.maps.Map(selector, options);
  }
  function initMap() {
    const selector = document.getElementById("map")
    const center = { lat: 43.446643, lng: 5.222023 }
    const options = {
      center: center,
      zoom : 8,
    }
  
    const map = new google.maps.Map(selector, options);
  
    const marker = new google.maps.Marker({
      position: center,
      map: map,
    });
  }  

  ///Page Contact///

  //Starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

/*On sélectionne tous les éléments avec un attribut data-toggle="tooltip"*/
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});


const exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', event => {
  // Button that triggered the modal
  const button = event.relatedTarget
  // Extract info from data-bs-* attributes
  const recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  const modalTitle = exampleModal.querySelector('.modal-title')
  const modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = `New message to ${recipient}`
  modalBodyInput.value = recipient
})


$(document).ready(function() {
  $("#search-form").submit(function(event) {
    event.preventDefault();
    var searchValue = $("#search-field").val();

    $.ajax({
      type: "GET",
      url: "https://api.example.com/search?q=" + searchValue,
      success: function(data) {
        // Afficher les résultats de la recherche à l'utilisateur
      }
    });
  });
});


function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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

function theFunction() {
  // Declare variables
  var input, filter, table, tr, td, th, i, txtValue;
  input = document.getElementById("theInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("theTable");
  tr= table.getElementsByTagName("tr");
  th= table.getElementsByTagName("th");

  // Loop through all table rows, and hide those who don't match the search query
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


function ssrFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("ssrInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("ssrTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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

function rtdFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("rtdInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("rtdTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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


function testFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("testInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("testTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
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
