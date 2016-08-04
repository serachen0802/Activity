
 $(function() {
     

 var interval = setInterval(function(){
     $.ajax({
        url: '../Home/countPeople',
        type: 'POST',
        dataType: 'json',
        error: function(xhr) {
            // alert(xhr.status);
        },
        success: function(response) {
            var result='';
             for(var i=0; i<response.length;i++){
                 if(response[i]['totalP']==null){
                     response[i]['totalP'] = 0;
                    }
                t=$('tr')[response[i]['aId']];
                 $(t).find('.total').text(response[i]['totalP']);
            }
        }
    })
 },1000)

$(function() {

    $.datetimepicker.setLocale('zh-TW');

     $('.datenowpicker').datetimepicker();
      
});


 })