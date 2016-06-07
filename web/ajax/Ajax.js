function actionAchat(id) {

    var solde = document.getElementById("solde").value;
    var xhr = new XMLHttpRequest();
    var url = "http://localhost:54200/Sprint_Web_V1/SprintWebFTT/web/ajax/PointAdherent/AchatPointAdherent.php?id=" + id + "&solde=" + solde;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function ()
    {

        if (xhr.status == 200)
        {

            if (xhr.readyState == 4)
            {

                document.getElementById("achat").innerHTML = xhr.responseText;

            }

        }

    }

    xhr.send();
}

function actionVente(id) {

    var point = document.getElementById("point").value;
    var xhr = new XMLHttpRequest();
    var url = "http://localhost:54200/Sprint_Web_V1/SprintWebFTT.1/web/ajax/PointAdherent/VentePointAdherent.php?id=" + id + "&point=" + point;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function ()
    {

        if (xhr.status == 200)
        {

            if (xhr.readyState == 4)
            {

                document.getElementById("vente").innerHTML = xhr.responseText;

            }

        }

    }

    xhr.send();
}

function clignotement() {
    if (document.getElementById("MonElement").style.display == "block")
        document.getElementById("MonElement").style.display = "none";
    else
        document.getElementById("MonElement").style.display = "block";
}
setInterval("clignotement()", 1000);

function actionAchatTicket(id, solde,idTicket) {

    var xhr = new XMLHttpRequest();
    var url = "http://localhost:54200/Sprint_Web_V1/SprintWebFTT/web/ajax/TicketAdherent/AchatTicketAdherent.php?id=" + id + "&prix=" + solde;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function ()
    {

        if (xhr.status == 200)
        {

            if (xhr.readyState == 4)
            {

                document.getElementById("achatTicket-"+idTicket).innerHTML = xhr.responseText;

            }

        }

    }

    xhr.send();
}


function actionPronostic(id) {

    var solde = document.getElementById("mise").value;
    var xhr = new XMLHttpRequest();
    var url = "http://localhost:54200/Sprint_Web_V1/SprintWebFTT/web/ajax/PronosticAdherent/PronosticAdherent.php?id=" + id + "&mise=" + solde;
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function ()
    {

        if (xhr.status == 200)
        {

            if (xhr.readyState == 4)
            {

                document.getElementById("pronostic").innerHTML = xhr.responseText;

            }

        }

    }

    xhr.send();
}