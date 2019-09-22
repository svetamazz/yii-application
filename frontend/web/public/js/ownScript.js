$(function(){
    $("#search").click(function(){
        var searchInput=$('#searchInput').val();
        if(searchInput!=''){
            $.ajax({
                url: "/site/search",
                data: "keyword="+searchInput,
                success: function(data){
                    $('#searchInput').val('');
                    $("#songs").html('');

                    if(data==0){
                        $('#songs').html('No matching data find');
                    }
                    else{
                        data=JSON.parse(data);
                        var res="";
                        $.each(data, function( index, row ) {
                            var name=row['name'];
                            var author=row['author'];
                            var fileName=row['fileName'];

                            res+="<div class='audio'>"
                            +"<span class='songName'>"+name+"</span>"
                            +"<span class='songAuthor'>"+author+"</span>"
                            +"<span><a href='#' class='downloadBtn'><img class='downloadImg' src='/public/images/complaint.png'></a><span><br/>"
                            +"<audio controls src='/uploads/"+fileName+"'></audio>"
                            +"</div>";
                        });
                        
                        $("#songs").html(res);
                    }
                }
            });
        }
    });

    $('#searchInput').keypress(function (e) {
        var key = e.which;
        if(key == 13)  // the enter key code
         {
           $('#search').click();
           return false;  
         }
       });


       $.createEventCapturing = (function () {
        var special = $.event.special;
        return function (names) {
            if (!document.addEventListener) {
                return;
            }
            if (typeof names == 'string') {
                names = [names];
            }
            $.each(names, function (i, name) {
                var handler = function (e) {
                    e = $.event.fix(e);
    
                    return $.event.dispatch.call(this, e);
                };
                special[name] = special[name] || {};
                if (special[name].setup || special[name].teardown) {
                    return;
                }
                $.extend(special[name], {
                    setup: function () {
                        this.addEventListener(name, handler, true);
                    },
                    teardown: function () {
                        this.removeEventListener(name, handler, true);
                    }
                });
            });
        };
    })();

    $.createEventCapturing(['play', 'pause']);

$(document).on('play', function(e){
    $('audio, video').not(e.target).each(function(){
        this.pause();
        this.currentTime = 0;
    });
});
});