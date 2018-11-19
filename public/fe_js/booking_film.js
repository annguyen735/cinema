//get id_film
let url = window.location.href
let idFilm = url.substring(26,27);
//get date
date = new Date();
current_day = date.getDay();
var day_name = '';


current_month = date.getMonth() + 1;
current_date = date.getDate();

current_year = date.getFullYear();

// get list 5 days from currưnt day
for (i = 0; i < 10; i++) {
    let li
    if (i == 0) {
        li = $('<li class="current date-event"></li>')        
    } else {
        li = $('<li class="date-event"></li>')       
    }
    span = $("<span>"+ current_month+"</span>")
    current_day = current_day + i
    switch (current_day) {
        case 0:
            day_name = "Sun";
            break;
        case 1:
            day_name = "Mon";
            break;
        case 2:
            day_name = "Tue";
            break;
        case 3:
            day_name = "Wed";
            break;
        case 4:
            day_name = "Thu";
            break;
        case 5:
            day_name = "Fri";
            break;
        case 6:
            day_name = "Sar";
    }
    em = $("<em>"+day_name+"</em>")
    days = moment(current_year + '-' + current_month + '-' + current_date).add(i, 'days').toDate().getDate()
    strong = $("<strong>"+(days)+"</strong>")
    li.append(span)
    li.append(em)
    li.append(strong)
    li.attr("data-date", current_year + '-' + current_month + '-' + days)
    $('.modal-date').append(li)
    li = null
}
    ajaxListCity(moment(current_year + '-' + current_month + '-' + current_date).format('YYYY-MM-DD '));
    ajaxCinema(9);

function ajaxListCity($dateTime) {
    // get list city that have cinemas in the first time
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        },
        url: '/cities/available',
        type: "GET",
        dataType: 'json',
        data: {
            dateTime :$dateTime,
        },
        success : function ($result) {
            for (i = 0; i < $result['cities'].length; i++) {
                let li
                if (i == 0) {
                    li = $('<li class="current city-event"></li>')        
                } else {
                    li = $('<li class="city-event"></li>')
                }
                span = $("<span>"+ $result['cities'][i]['name'] +"</span>")
                li.append(span)
                li.attr("data-id", $result['cities'][i]['id'])
                $('.modal-city').append(li)

                li = null
            }
            //click event change city
            $('.city-event').off().on().click(function() {
                if ($(".city-event").hasClass("current")) {
                    $('.city-event').attr("class", "city-event") 
                }
                $(this).attr("class", "current city-event");
                console.log($(this).attr("data-id"))
                ajaxCinema($(this).attr("data-id"));
            });    
        },
        error : function () {
            console.log("error")
        }
    });
}

//check ajax complete
// $(document).ajaxComplete(function() {
    //click event change date
    $('.date-event').off().on().click(function() {
        if ($(".date-event").hasClass("current")) {
            $('.date-event').attr("class", "date-event") 
        }
        $(this).attr("class", "current date-event")
        $(".modal-city").empty()
        $(".modal-cinema").empty()
        ajaxListCity($(this).attr("data-date"))
        ajaxCinema(9);
    });

    //click event change city
    // $('.city-event').off().on().click(function() {
    //     console.log("here2")
    //     if ($(".city-event").hasClass("current")) {
    //         $('.city-event').attr("class", "city-event") 
    //     }
    //     $(this).attr("class", "current city-event");
    //     ajaxCinema($(this).attr("data-id"));
    // });    
// });

function ajaxCinema(idCity) {
    //get list cinema of city and list schedule
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        },
        url: '/cinemas',
        type: "GET",
        dataType: 'json',
        data: {
            id_city :idCity,
        },
        success : function ($result) {
            $('.modal-cinema').html("")
            let div
            console.log($result['cinemas'].length)
            for (i = 0; i < $result['cinemas'].length; i++) {
                div = $('<div class="cinema-event"></div>')
                h3 = $("<h3>"+ $result['cinemas'][i]['name'] +"</h3>")
                div.append(h3)
                ajaxCinemaScheduleTime($result['cinemas'][i]['id'], idFilm, div)
                $('.modal-cinema').append(div)
            }
        },
        error : function () {
            console.log("error")
        }
    });
}

function ajaxCinemaScheduleTime(idCinema, idFilm, div) {
    //get list cinema of city and list schedule
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        },
        url: '/schedules',
        type: "GET",
        dataType: 'json',
        data: {
            id_cinema: idCinema,
            id_film: idFilm
        },
        success : function ($result) {
            if ($result['schedules'].length == 0) {
                h3 = $("<h3>Hôm nay đã hết suất chiếu.Vui lòng quay lại sau</h3>")
                div.append(h3)
            } else {
                let ul = $('<ul></ul>')
                for (i = 0; i < $result['schedules'].length; i++) {
                    let li = $('<li class="schedule-event"></li>')
                    route = '/films/'+$result["schedules"][i]["film_id"]+'/booking'
                    a = $("<a href="+route+"></a>")
                    span1 = $("<span >"+ $result["schedules"][i]["time_start"].slice(0,5) +"</span>")
                    br = $("<br>")
                    
                    a.append(span1)
                    a.append(br)
                    
                    let span2 = $("<span style='padding-top:20%;'>"+$result["schedules"][i]['room']["seats_available"]+" ghế trống</span>")
                    
                    a.append(span2)

                    li.append(a)

                    ul.append(li)
                    li = null;
                }
                div.append(ul)
            }
        },
        error : function () {
            console.log("error")
        }
    });
}
