$(document).ready(function(){
    $(".btnGo").click(function(){
        var selectedJob = $(".jobs option:selected").val();
        if(selectedJob !== ''){
            window.location = selectedJob;
        }
    });
});