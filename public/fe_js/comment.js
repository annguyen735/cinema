$('.create-comment').keypress(function (e) {
    div_wrap = $("<div class='comments-section-grid'></div>")
   
    //image user
    img = $(this).attr("user-img")
    div_img = $("<div class='col-md-2 comments-section-grid-image'></div>")
    img_user_link = $('<img src="'+ img +'" class="img-responsive"/>')
    
    //content comment
    div_content = $('<div class="col-md-10 comments-section-grid-text"></div>')
    fullname = $(this).attr('fullname')
    h4 = $('<h4><a href="#">'+fullname+'</a></h4>')
    lable = $('<label>5/4/2014 at 22:00</label>')
    content = $('<p>'+$(this).val()+'</p>')

    clr = $('<div class="clearfix"></div>')
    
    if(e.keyCode == 13) {
        div_img.append(img_user_link)
        
        div_content.append(h4)
        div_content.append(lable)
        div_content.append(content)
        
        div_wrap.append(div_img)
        div_wrap.append(div_content)
        div_wrap.append(clr)

        $('#comment-section').append(div_wrap)
        $(this).html('')
    }
})
