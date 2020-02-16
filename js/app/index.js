

class INDEX {
    constructor(){
       
        this.porpular = document.getElementById('porpularPost');
    }

    listen(){

    }
    //this function will get allt the aricles with highest number of likes
    porpularpost(){
        $.ajax({
            url: "user/includes/article.inc.php",
            method: "POST",
            data: { porpularArticles: 'porpularArticles' },
            dataType: "json",
            success: function (data) {
                console.log(data);
                var output = '';
                for(let i in data)
                {   let string = data[i].content.article_text;
                    let date = $.timeago(data[i].content.article_pub_date) ;
					let txt = `Hi, Check out my latest Article on Kirinyaga University CU Website https://kyucu.co.ke/article.php?id=${data[i].content.article_id}`;
					txt = encodeURI(txt)
					let url = `https://wa.me/?text=${txt}`;  
                    output += `
                    
                    <div class="col-md-6 w3ls-left wow fadeInDown " data-wow-duration=".8s" data-wow-delay=".2s">
                        
                        <div class="tc-ch">
                            <div class="tch-img">
                                <a href="article.php?id=${data[i].content.article_id}">
                                    <img loading="lazy" style="max-height:200px" src="user/includes/images/${data[i].content.articleimg}" class="img-responsive" alt=""></a>
                            </div>

                            <h3><a href="article.php?id=${data[i].content.article_id}">${data[i].content.article_tittle}</a></h3>

                            <h6>By <a href="article.php">${data[i].content.user_fname} ${data[i].content.user_lname} </a>${date}</h6>
                            <div class="d-flex">
                                <div class="mx-3 comment"><a href="article.php?id=${data[i].content.article_id}#comment_content" class="text-dark"><span> <i class="far fa-comment-alt"></i> </span><span
                                        id="coment_count">${data[i].comments}</span> </a> </div>
                                <div class="mx-3"><span> <i
                                            id="<?php echo $urlID ?>"
                                            onclick="react(this,<?php echo $urlID ?>)"
                                            class="fas fa-thumbs-up"></i> <span id="count">${data[i].likes}</span> </span> </div>
                                <span id="loginfirst" class=""></span>
                            </div>
                            <div class="readmore" > ${string}</div>
                            <div class="bht1">
                                <a href="article.php?id=${data[i].content.article_id}">Read More</a>
                            </div>
                            <div class="soci">
                                <ul>

                                    <li class=""><a class="" href="${url}" target="_blank"><i class="fab fa-whatsapp-square fa-2x"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                `; 

                }
                
                
                $('#porpularPost').html(output)
                $('.readmore').readmore({ speed: 75,collapsedHeight: 80, lessLink: '',moreLink: '' });
                
                

                         
            },
            error: function (error) {
                console.log(error);
                
            }
        })
    }
   checklogin() {
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

}

const index = new INDEX;
index.porpularpost();
index.checklogin();