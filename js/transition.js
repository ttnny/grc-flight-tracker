let milestoneOptions ={
    private: {
        HTML: ["Solo", "Night", "Cross Country", "Check Ride"],
        value: ["solo", "night", "crossCountry", "checkRide"]
    },
    instrument: {
        HTML:  ["Instrument TT", "Cross Country", "Check Ride"],
        value: ["instrumentTT", "crossCountry", "checkRide"]
    },
    commercialSEL: {
        HTML: ["> 250 Hours", "Pic TT", "Cross Country", "Check Ride"],
        value: ["250hours", "picTT", "crossCountry", "checkRide"]
    },
    commercialMULTI: {
        HTML: ["Multi time", "Check Ride"],
        value: ["multitime", "checkRide"]
    },
    cfi: {
        HTML: ["TBD 1","TBD 2", "TBD 3", "Check Ride"],
        value:  ["tbd1","tbd2", "tbd3", "checkRide"]
    },
    mei:{
        HTML: ["TBD 1","TBD 2", "TBD 3", "Check Ride"],
        value:  ["tbd1","tbd2", "tbd3", "checkRide"]
    },
    cfii:{
            HTML: ["TBD 1","TBD 2", "TBD 3", "Check Ride"],
            value:  ["tbd1","tbd2", "tbd3", "checkRide"]
    }
};

$(function () {
    $("#nextStep").hide();
    $("#otherSchool").hide();
}) ;

$('#milestone').on('change',function(){
    //resets milestone options lists to be blank
    $('#recentMilestone').find('option').remove();
    $('#nextMilestone').find('option').remove();

    setOptions(milestoneOptions[$(this).val()].HTML,  milestoneOptions[$(this).val()].value);

});

//recieves two arrays one with HTML text the other with values
function setOptions(HTML, value) {
    let recentMilestoneSelect= document.getElementById("recentMilestone");
    let nextMilestoneSelect= document.getElementById("nextMilestone");
    //loops through HTML array to set the recent Milestone options
    for (var i =0; i<HTML.length; i++){
        var option = document.createElement('option');
        option.value = value[i];
        option.innerText = HTML[i];

        recentMilestoneSelect.appendChild(option);
        nextMilestoneSelect.appendChild(option.cloneNode(true));
    }
}
//if other school radio option selected displays text box
$("#otherRadio").click(function(){
    $('#otherSchool').show();
});

//if yes on currently flying show flight info using transitions
   $('#flightYes').click(function(){
       $('#nextStep').show();
   });

//if no on currently flying hide flight info using transitions
$('#flightNo').click(function(){
    $('#nextStep').hide();
});



