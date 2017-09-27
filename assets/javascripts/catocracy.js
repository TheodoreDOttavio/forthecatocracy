$(document).on('page:load', function() {
});

$("#myproducts").html(getProducts());
console.log('response: ');
console.log(getProducts());

function getProducts(){
  var jpgFilesDirectory = '/assets/photos/2017050800/';
  var outputHtml = 'test';

  //----ajax is not a function? ok....

  // // get auto-generated page
  // $.ajax({url: jpgFilesDirectory}).then(function(html) {
  //     // create temporary DOM element
  //     var document = $(html);
  //
  //     // find all links ending with .jpg
  //     document.find('a[href$=.jpg]').each(function() {
  //         var jpgName = $(this).text();
  //         var jpgUrl = $(this).attr('href');
  //
  //         // do what you want here
  //         outputHtml += jpgName + "<br>";
  //     })
  // });

  return outputHtml;

};
