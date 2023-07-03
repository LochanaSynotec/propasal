
$(function () {
  
        $("#form_submit").submit('click', function (event) {
          //alert('t');
        var submit_url=$('#form_submit').attr('action')


         Swal.fire({
                icon: 'info',
                title: 'Please Wait ! ',
                text: 'Please Wait !',
                footer: ''
              }) 

        event.preventDefault();
          var data = new FormData(this)
          $.ajax({
            type: 'POST',
            url:submit_url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
            //alert(data);

            Swal.fire({
                icon: 'success',
                title: 'THAN YOU ! ',
                text: 'Active after 24 hours!',
                footer: ''
              }) 
          
         }    
       });
   });
});



$('.isActive').each(function() {
var baseUrl = window.location.protocol + "//" + window.location.host;

  var currentURL = window.location.href;

  var linkHref = $(this).attr('href');
  //console.log(baseUrl+''+linkHref);
 // console.log(currentURL);

  currentURL= $.trim(currentURL);
  linkHref= $.trim(linkHref);

  if (currentURL === baseUrl+''+linkHref+'/') {
    $(this).addClass('active'); // Add the "active" class to the matched element
    console.log($(this).find("button").addClass('btn-color'));
  }else if(currentURL === baseUrl+''+linkHref){
    $(this).addClass('active'); // Add the "active" class to the matched element
    console.log($(this).find("button").addClass('btn-color'));

   
  }

  
});

