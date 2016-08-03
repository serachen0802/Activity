$(function() {
    $("#btnok").click(function() {
    //     if(!("#name").val()){
    //         alert("請輸入活動名稱");
    //     }else{
            // var now = new Date();
            // var orderdate = new Date($("#orderdate").val());

            // if (orderdate  < now) {
            //     alert("請輸入正確日期");
            // }
            // else if ($("#ordertime1").val() != "" && $("#ordertime2").val() != "") {
            //     var ordertime1 = new Date(now.toDateString() + " " + $("#ordertime1").val());
            //     var ordertime2 = new Date(now.toDateString() + " " + $("#ordertime2").val());
            //     if (ordertime1 > ordertime2) {
            //         alert("請輸入正確時間範圍");
            //     }
            //     else {
            //         $("form").submit();
            //     }
            // }
            // else {
                $("form").submit();
            // }
        })
})

$(function() {

    $.datetimepicker.setLocale('zh-TW');

    // $(".datenowpicker").datetimepicker({
    //     timepicker: false,
    //     format: 'Y/m/d',
    //     minDate: 0
    // });

    $(".timepicker").datetimepicker({
        datepicker: false,
        format: 'H:i',
    });
    
     $('.datenowpicker').datetimepicker();
});