
$(document).ready(function () {
    $('#comment_form').on('submit', function (e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url: "user/includes/articleComment.php",
            method: "POST",
            data: form_data,
            dataType: "JSON",
            success: function (data) {
                $('#comment_form')[0].reset();
                $('#comment_message').html(data.error);
                setTimeout(() => {
                    $('#comment_message p').fadeOut();
                }, 2000);
                $('#comment_id').val('0');
                load_comment(); 
            },
            error: function (error) {
                console.log(error);
            }
        })
    })

    

    load_comment();
    function load_comment() {
        var idarray = window.location.search.split('=');
        var id = idarray[1];
        // alert(id)
        $.ajax({
            url: "user/includes/articleComment.php",
            method: "POST",
            data: { artid: id },
            success: function (data) {
                // console.log(data);

                $('#display_comment').html(data);

                $('.timeago').each(function (item) {
                    var date = $(this).text();
                    // console.log(date);
                    
                    // console.log(date);
                    var timeago =  $.timeago(date)
                    $(this).text(timeago)
                    
                });

                
            }
        })
    };

    function count_comments(){

        //count the comments on a specific article
        var idarray = window.location.search.split('=');
        var id = idarray[1];
        $.ajax({
            url: "user/includes/articleComment.php",
            method: "POST",
            data: { commentcount: id },
            success: function (data) {
                $('#coment_count').html(data);
                $('.comment').click(function (e) {
                    $('#comment_content').focus();
                });
                count_comments()              
                
            }
        })
    }

    count_comments()
    $(document).on('click', '.reply', function () {
        var comment_id = $(this).attr("id");
        $('#comment_id').val(comment_id);
        console.log($('#comment_id').val());
        $('#comment_content').focus();
    });

    $('.timeago1').each(function (item) {
        var date = $(this).text();
        console.log(date);
        
        // console.log(date);
        var timeago =  $.timeago(date)
        $(this).text(timeago)
        
    });
    $('.readmore').readmore();

    function getuserreactions(e) {
        //get the id of the article
        var idarray = window.location.search.split('=');
        var id = idarray[1];
        var likedata = {
            articleid: id,
            user_reaction:'postlikes'
        }
        $.ajax({
            url: "user/includes/article.inc.php",
            method: "POST",
            data: likedata,
            dataType: "html",
            success: function (data) {
                // console.log(typeof(data));
                
                if (data === 'true') {
                   var  artcle_id = document.getElementById(id);
                    $(artcle_id).addClass('text-primary');
                } else{
                    var  artcle_id = document.getElementById(id);
                    $(artcle_id).removeClass('text-primary');
                    
                }
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
    getuserreactions();

    

})

function loadlikes(){
    var idarray = window.location.search.split('=');
    var id = idarray[1];
    $.ajax({
        url: "user/includes/article.inc.php",
        data:{loadlikes: id},
        method: "POST",
        dataType: "JSON",
        success: function (data) {         
            console.log(data);
            $('#count').html(data)
            
        },
        error: function (error) {
            console.log(error);
        }
    })
}

loadlikes()

function checklogin() {
    $.ajax({
        url: "user/includes/checklogin.inc.php",
        method: "POST",
        dataType: "JSON",
        success: function (data) {         
           if (data == true) {
             return data
               console.log("it is very true");
           } else if(data == false){
            $('#login-request').modal('show');
                return false
           }else{
               console.log('something is wrong');
           }
        },
        error: function (error) {
            console.log(error);
        }
    })
}

function react (item,id) {
    var likedata = {
        react: 1,
        articleid: id,
        post_likes:'postlikes'
    }
    $.ajax({
        url: "user/includes/checklogin.inc.php",
        method: "POST",
        dataType: "JSON",
        success: function (data) {         
           if (data == true) {
            $.ajax({
                url: "user/includes/article.inc.php",
                method: "POST",
                data: likedata,
                dataType: "html",
                success: function (data) {
                    // console.log(data);
                    $(item).toggleClass('text-primary');
                    loadlikes()
                },
                error: function (error) {
                    console.log(error);
                }
            })
          
           } else if(data == false){
                $('#loginfirst').html('<a href="user/login.php">Log In </a>to Like ');
                
           }else{
               console.log('something is wrong');
               
           }
        },
        error: function (error) {
            console.log(error);
        }
    })

    loadlikes()

    
}
checklogin();






