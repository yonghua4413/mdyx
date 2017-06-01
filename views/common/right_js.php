<script type="text/javascript">
    //功能更新
    $(".tuPian").mouseover(function(){
      $(this).children().children(".tubiao").hide();
      $(this).children().children(".tubiao1").show();
    });
    $(".tuPian").mouseout(function(){
      $(this).children().children(".tubiao").show();
      $(this).children().children(".tubiao1").hide();
    });
    //右侧导航 - 二维码
    $(".youhui").mouseover(function(){
        $(this).children(".2wm").show();
    })
    $(".youhui").mouseout(function(){
        $(this).children(".2wm").hide();
    });
    //右侧导航 - QQ
    var ndiv = $("#qq").children().length;;
    var npx = ((ndiv-2)*49)+"px";
    $("#qq").mouseover(function(){
        $("#tel").css("margin-top",npx);
    })
    $("#qq").mouseout(function(){
        $("#tel").css("margin-top","0px");
    })
    //右侧导航 - 电话
    var ndiv = $("#tels").children().length;
    var npx1 = ((ndiv-2)*49)+"px";
    $("#tels").mouseover(function(){
        $("#btn").css("margin-top",npx1);
    })
    $("#tels").mouseout(function(){
        $("#btn").css("margin-top","0px");
    })
</script>