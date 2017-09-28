$(document).ready(function(){
  $("#header").load("_navigation.html");
  // getProducts();
});

// function getProducts(){
//   // var jpgFilesDirectory = '/assets/photos/2017050800/';
//   var jpgFilesDirectory = '_navigation.html';
//   var outputHtml = 'ok...';
//
//   // // outputHtml = jQuery.get({url: jpgFilesDirectory, data: data});
//   // $.get( jpgFilesDirectory, function( data ) {
//   //   outputHtml = data;
//   //   // $( ".result" ).html( data );
//   //   alert( "Load was performed." );
//   // });
//
//   $.get({
//     url: '/assets/photos/2017050800/',
//     success: function(data){
//       alert( "Load was performed." );
//       $(data).find("a:contains(.jpg)").each(function(){
//         // will loop through
//         var images = $(this).attr("href");
//         $('#myproducts').html(images);
//         // $('<p></p>').html(images).appendTo('#myproducts')
//       });
//     }
//   });
//
//   // // get auto-generated page
//   // $.ajax({url: jpgFilesDirectory}).then(function(data) {
//   //   // create temporary DOM element
//   //   var doc = $(data);
//   //
//   //   // find all links ending with .jpg
//   //   doc.find('a[href$=.jpg]').each(function() {
//   //     var jpgName = $(this).text();
//   //     var jpgUrl = $(this).attr('href');
//   //
//   //     // do what you want here
//   //     outputHtml += jpgName + "<br>";
//   //   });
//   // });
//
//   return outputHtml;
//
// };
