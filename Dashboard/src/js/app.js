$(".butUpdateTarget").each(function () {
    $(this).on("click", function () {
        var tdValues = $(this).closest("tr").find("td");       
        tdValues.each(function () {
            let targetId = $(this).data("target");
            console.log(targetId);
             $("input#" + targetId).val($(this).html());
        })
    })
});
console.log("test");

function openUpadateLogin() {

    $('.ButUpdate').on('click', () => {
        $('.UpdateLogin').toggle()
        
        // $('#form_UpdateLogin').on('submit', function(e) {
            // e.preventDefault();
            // var name = $('#Update_name').val();
            // var user = $('#Update_user').val();
            // var email = $('#Update_email').val();
            // var mdp = $('#Update_mdp').val();
    
            // if (name === '' || user === '' || email === '' || mdp === '') {
                // alert('Veuillez remplir tous les champs');
                // $('.erreur_UpdateLogin').html(`

                    // <p class="text-red w-100 m-0">Remplissez tous les champs</p>
                // 
                // `);
            // } else {
                // $(this).unbind('submit').submit();
            // }
        // });
    });
}
openUpadateLogin();


function openAddLogin() {
$('.ButAdd').on('click', () => {
    $('.AddLogin').toggle()
    
    // $('#form_AadLogin').on('submit', function(e) {
        // e.preventDefault();
        // var name = $('#Aad_name').val();
        // var user = $('#Aad_user').val();
        // var email = $('#Aad_email').val();
        // var mdp = $('#Aad_mdp').val();

        // if (name === '' || user === '' || email === '' || mdp === '') {
            // alert('Veuillez remplir tous les champs');
            // $('.erreur_AadLogin').html(`

                // <p class="text-red w-100 m-0">Remplissez tous les champs</p>
            // 
            // `);
        // } else {
            // $(this).unbind('submit').submit();
        // }
    //});
});
}
openAddLogin();

