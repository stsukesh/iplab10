$(document).ready(function() {
          var form = $('#form');
          var submit = $('#submit');
      
          form.on('submit', function(e) {
              e.preventDefault(); // prevent default form submission
              
              $.ajax({
                  url: 'ajax_comment.php',
                  type: 'POST',
                  data: form.serialize(), // serialize form data
                  beforeSend: function() {
                      submit.val('Submitting...').attr('disabled', 'disabled');
                  },
                  success: function(data) {
                      var item = $(data).hide().fadeIn(800);
                      $('.comment-block').append(item); // append new comment
                      form.trigger('reset'); // reset form
                      submit.val('Submit Comment').removeAttr('disabled'); // re-enable button
                  },
                  error: function(e) {
                      alert('Error submitting comment');
                      submit.val('Submit Comment').removeAttr('disabled');
                  }
              });
          });
      });
      