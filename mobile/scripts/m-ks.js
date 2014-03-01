$(function(){
        $("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
        $(".project").wrap("<td></td>");
        $("body").mousewheel(function(event, delta) {
            this.scrollLeft -= (delta * 30);
            event.preventDefault();
        });   
    });