(function(){
    var app = angular.module('valentine-app', [ ]);
    app.controller("HomeController", function(){

        angular.element(document).ready(function () {
            var windowWidth = parseInt($(window).width(),10);
            var windowHeight = parseInt($(window).height(),10);

            var ngang = (windowWidth/2) - 25;
            var doc = (windowHeight/2) - 25;

            $("#my-heart").css("margin-left", ngang + "px");
            $("#my-heart").css("margin-top", doc + "px");

            $("#loinhan").css("margin-left", (ngang - 100) + "px");
            $("#loinhan").css("margin-top", (doc*2 ) + "px");



        });

        var temp = 1;
        this.changeImageSize = function(){
            
            var oldValue = parseInt($("#image-size").val(),10);


            oldValue = oldValue * 2;
            $("#image-size").val(oldValue)

            var windowWidth = parseInt($(window).width(),10);
            var windowHeight = parseInt($(window).height(),10);

            var ngang = (windowWidth/2) - (oldValue/2);
            var doc = (windowHeight/2) - (oldValue/2);


            $("#my-heart").css("margin-left", ngang + "px");
            $("#my-heart").css("margin-top", doc + "px");

            $("#my-heart").css("width", oldValue +"px");
            $("#my-heart").css("height", oldValue +"px");

            if(oldValue == 100){
                 $("#loinhan").html('Bạn đã click vào tôi, thấy tôi lớn lên chưa');
            }
           

        }
    });

    var gem = [
        {
            name: 'Galaxy S9',
            price: 25000000,
            description:'Galaxy for everyone',
            canPurchase: true,
            soldOut: true,
            images: [
                 {
                    full: 'mobile_full.jpg' ,
                    thumb: 'mobile_thumb.jpg' ,
                 },
                 {
                    full: 'dodecahedron-01-full.jpg' ,
                    thumb: 'dodecahedron-01-thumb.jpg'
                 }
            ]
        }
        ];
})();
