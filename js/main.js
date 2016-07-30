$(function() {
    $('#search_result').hide(); // dont show this div if you don't have results jet or instead of this you can add display:none to css for serach_result
    var left = $('#box').position().left;
    var top = $('#box').position().top;
    var width = $('#box').width();
    var data = {}; // define object it needs to be object which will be send as data through ajax
    $('#search_result').css('left', left).css('top', top+32).css('width', width);

    $('#search_box').keyup(function() {
        // get value of what user typed int search_box and this will be send as data array
        var value = $(this).val();
        console.log(value);

        // check if value typed by user is alphanumeric and no space
        if(value) {
            $('#search_result').show();
            data['value'] = value; // <- very important Object {value: "g"}
            console.log(data);

            if(data != '') {
                // ajax call with passing data as json to search.php
                $.ajax({
                    url: 'ajax/search.php',
                    type: 'POST',
                    data: data, // here object data is sent
                    success: function(response) {
                        // send info about success
                        $('#search_result').html(response);
                        //console.log(response);
                    }
                });
            }
        } else {
            $('#search_result').hide();
        }
    });

});