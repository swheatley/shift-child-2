jQuery(document).ready(function ($) {
    
    
    
    //this below script makes sure to not share the post. this is activated when someone has configured the plugin settings this way
    if($('#dont-sent-to-linkedin-checkbox').length){
        
        if($('#dont-sent-to-linkedin-checkbox').attr('data') == 'dont-publish-by-default'){
            
            $('#dont-sent-to-linkedin-checkbox').prop('checked', true);
            
            var postID = $('.send-to-linkedin').attr("data");
            
            //run the request to make the post meta 
            var data = {
            'action': 'update_dont_share',
            'postID': postID,
            'dontShareAction': 'update',  
            };

            jQuery.post(ajaxurl, data, function(response) { 
                if(response == "success"){
                    //no need to run any success function
                }
            }); //end response  

        }
    }
    
    
    
    
    
    
    $(document).on('click', '.send-to-linkedin', function(event) { 
        event.preventDefault(); 
            
            $(this).after('<p style="color: blue; font-weight: bold;" class="linkedin-share-sending-message">Sending...Please wait...</p>');
        
            //share to linkedin
            var thisLink = $(this);
            var postID = $(this).attr("data");
            var newStatus = "publish";
            var oldStatus = "publish";   

            //do request    
            var data = {
            'action': 'post_to_linkedin',
            'postID': postID,
            'newStatus': newStatus,
            'oldStatus': oldStatus,    
            };

            jQuery.post(ajaxurl, data, function(response) { 
                if(response == "success"){
                    
                    $('.linkedin-share-sending-message').remove();
                    
                    thisLink.after('<p style="color: green; font-weight: bold;" class="linkedin-share-success-message">Successfully Shared!</p>');

                    setTimeout(function() {
                    $('.linkedin-share-success-message').slideUp();
                    }, 3000);

                }
            }); //end response   
            
            
        
    }); //end button click
    
    
    

    $('#custom-share-message').change(function(){
        
        var customShareMessage = $('#custom-share-message').val();
        var postID = $('.send-to-linkedin').attr("data");
        //do request    
        var data = {
        'action': 'update_share_message',
        'postID': postID,
        'shareMessage': customShareMessage,  
        };

        jQuery.post(ajaxurl, data, function(response) { 
            if(response == "success"){

                $('#custom-share-message').after('<p style="color: green; font-weight: bold;" class="custom-share-message-updated">Custom message saved!</p>');

                setTimeout(function() {
                $('.custom-share-message-updated').slideUp();
                }, 3000);

            }
        }); //end response  

    });
    
    
    
    
    
    $('#dont-sent-to-linkedin-checkbox').change(function(){
        
        var postID = $('.send-to-linkedin').attr("data");
        
        //if checkbox is checked signal to update/create post meta otherwise signal to delete post meta
        if ($('#dont-sent-to-linkedin-checkbox').is(':checked')) {
            var dontShareAction = "update";
        } else {
            var dontShareAction = "delete";
        }
          
        var data = {
        'action': 'update_dont_share',
        'postID': postID,
        'dontShareAction': dontShareAction,  
        };

        jQuery.post(ajaxurl, data, function(response) { 
            if(response == "success"){

                $('#dont-sent-to-linkedin-checkbox-line').after('<p style="color: green; font-weight: bold;" class="dont-share-action">Option updated!</p>');

                setTimeout(function() {
                $('.dont-share-action').slideUp();
                }, 3000);

            }
        }); //end response  

    });
    
    
    
    
    
    
    
});



