function formError() {
    var error = document.getElementById("toast");
    error.innerHTML = "Email incorrect";
    error.style.color = "#FF2222";
    $("#toast").effect("shake");
}

function verifMail(champ) {
    const regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if (!regex.test(champ.value)) {
        formError();
        return false;
    } else {
        $("#toast").html("");
        return true;
    }
}

function verifForm() {
    return verifMail(document.getElementById("contactmail"));
}

function submitForm() {
    var error = document.getElementById("toast");
    error.innerHTML = "envoi en cours ...";
    var posting = $.post("send.php", $("#etudeForm").serialize(), function (response) {
        if (response.localeCompare("yes") === 0) {
            error.style.color = "#22FF22";
            error.innerHTML = "Le message a été envoyé";
            $("#contactmail").val("");
            $("#contactname").val("");
            $("#message").val("");
        } else {
            error.style.color = "#FF2222";
            error.innerHTML = "Une erreur est survenue";
        }
    });
    posting.fail(function (xhr, textStatus, errorThrown) {
        error.style.color = "#FF2222";
        error.innerHTML = "Une erreur est survenue";
    });
}