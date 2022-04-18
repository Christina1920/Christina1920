function SubscriptionBtn() {
    document.getElementById("questionaire-subscriptions").style.display = "block";
    document.getElementById("questionaire-general-use").style.display = "none";


    let SubscriptionBtn = document.getElementById("SubscriptionBtn");
    let GeneralBtn = document.getElementById("GeneralBtn");
    if (!SubscriptionBtn.classList.contains("tab-active-btn")) {
        SubscriptionBtn.classList.add("tab-active-btn");
    }

    if (GeneralBtn.classList.contains("tab-active-btn")) {
        GeneralBtn.classList.remove("tab-active-btn");
    }
}


function GeneralBtn() {
    document.getElementById("questionaire-subscriptions").style.display = "none";
    document.getElementById("questionaire-general-use").style.display = "block";

    let SubscriptionBtn = document.getElementById("SubscriptionBtn");
    let GeneralBtn = document.getElementById("GeneralBtn");
    if (!GeneralBtn.classList.contains("tab-active-btn")) {
        GeneralBtn.classList.add("tab-active-btn");
    }

    if (SubscriptionBtn.classList.contains("tab-active-btn")) {
        SubscriptionBtn.classList.remove("tab-active-btn");
    }
}

document.addEventListener('load', function(event) {
    document.getElementById("SubscriptionBtn").click();


    let questionaireSubscriptionsDiv = document.getElementById('questionaire-subscriptions');
    let questionaireGeneralUseDiv = document.getElementById('questionaire-general-use');
    let adjacentDivToggler = function(event) {
        var acc = document.getElementsByClassName("panel");

        for (i = 0; i < acc.length; i++) {
            acc[i].classList.remove('panelopen');
        }

        var accord = document.getElementsByClassName("accordion");

        for (j = 0; j < accord.length; j++) {
            accord[j].classList.remove('arrowOpen');
        }

        let button = event.target;
        if (button.classList.contains('accordion')) {
            let adjacentDiv = button.nextElementSibling;
            if (adjacentDiv.classList.contains('present')) {

                adjacentDiv.classList.remove('panelopen');
                adjacentDiv.classList.remove('present');
                button.classList.remove('arrowOpen');
            } else {

                for (i = 0; i < acc.length; i++) {
                    acc[i].classList.remove('present');
                }
                adjacentDiv.classList.add('panelopen');
                adjacentDiv.classList.add('present');
                button.classList.add('arrowOpen');

                this.scrollIntoView();
            }
        }
    }
    questionaireSubscriptionsDiv.addEventListener('click', adjacentDivToggler);
    questionaireGeneralUseDiv.addEventListener('click', adjacentDivToggler);
});


//Array vs Array Like objects -> adjacentDiv.

function myFunction(event) {
    var y = event.offsetY;
    document.getElementById("questionaire-subscriptions").scrollTop = y;
}