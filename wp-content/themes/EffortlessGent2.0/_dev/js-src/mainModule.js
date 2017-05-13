(function() {
  'use strict';
  angular.module('MainApp', [])

  // Directives
  // -------------

  //mobile nav toggle
  .directive('hamburger', function() {
    return function (scope, element, attrs) {        
       // toggle behavior
       $(element).on('click', function () {
        console.log('hmg click');
        $('#topbar nav').slideToggle();      
       });
       if($(window).width() < 786){
         $('#main').click(function(){
            $('#topbar nav').slideUp();          
         });
         $("#topbar nav a").click(function(){
            $('#topbar nav').slideUp();          
         });
       }
    }  
  })
})();