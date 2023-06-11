

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
