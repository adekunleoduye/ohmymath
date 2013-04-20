var ESPN = {
    player_search:function(search_field_id, result_div_id){
        var name = $('#'+search_field_id).val();
        var sport = $('#sport').val();

        var url = sport +'/'+name;

        var params = new Array();
        params[0] = sport;
        params[1] = 4967;

        url  = ESPN.setupUrl('getStats',params );


        ESPN.handleResponse(ESPN.makeRequest(url), result_div_id);
    },
    loadTeams:function(){
        var sport = $('#sport').val();
        var params = new Array();
        params[0] = sport;
        var url = ESPN.setupUrl('loadTeam', params);

        var result  =$.ajax({
            url : url,
            dataType: 'json'
        });

        result.done(function(data){

            var teams = data.sports[0].leagues[0].teams;

            var el ='Teams:<br/><select id="teams" onchange="ESPN.setPlayers();"><option>Select Team</option>';

            $(teams).each(function(item, element){
                 el += '<option value="' + element.id + '">' + element.location + " : " + element.name +"</option>"
            });
            el += '</select>';

            $('#team').html(el);

            $('#player').html('');

            $('#espn_result').html('');

        });


    },
    setPlayers:function(){
        var teamId = $('#teams').val();
        var sport = $('#sport').val();
        var params = new Array();
        params[0] = sport;
        params[1] = teamId;

        url = ESPN.setupUrl('getPlayers', params);

        var result = $.ajax({
            url:url,
            dataType: 'json'
        });

        result.done(function(data){


            var athletes = data.sports[0].leagues[0].teams[0].athletes;

            var el ='Players:<br/><select id="players" onchange="ESPN.getPlayerStats();"><option>Select Player</option>';

            $(athletes).each(function(item, element){
                el += '<option value="' + element.id + '">' + element.fullName + "</option>"
            });
            el += '</select>';

            $('#player').html(el);

            $('#espn_result').html('');

        });


    },
    getPlayerStats:function(){

        var sport = $('#sport').val();
        var params = new Array();
        params[0] = sport;
        params[1] = $('#players').val();

        url  = ESPN.setupUrl('getStats',params );

        console.log(url);

        var result = $.ajax({
            url:url,
            dataType: 'json'
        });

        result.done(function(data){

            var stats = data.sports[0].leagues[0].athletes[0];

            var headshot = '<img src="'+ stats.headshots.xlarge.href+'" />';
            $('#headshot').val(stats.headshots.xlarge.href);
            $('#playername').val(stats.fullName);

            var html = headshot;

            var stat = stats.statistics;

            $(stat).each(function(item, element){

                var el = '';

                var std ='';

                el +='<div onclick="Javascript:OhMyMath.toggle('+element.season.year+');"><h4>Season : '+element.season.year+'</h4>';

                $(element.statCategories).each(function(item, element2){

                    std += '<div class="'+element.season.year+'" style="display:none;"><h5>' + element2.description + '</h5>';

                    $(element2.stats).each(function(item, statO){

                        std += "<div>"+ statO.description+" :: " + statO.value +"</div>";
                    });

                    std += '</div>';
                });

                html += el + std + '</div>';
            });

            $('#espn_result').html(html);

        });
    },

    setupUrl:function(action, params){
        var primaryUrl = "http://api.espn.com/v1/sports/";
        var sports = new Array();
        sports['nba'] = 'basketball';
        sports['wnba'] = 'basketball';
        sports['golf'] = '';
        sports['nfl'] = 'football';
        sports['mlb'] = 'baseball';

        var statsParam = "?enable=statistics,competitors,logo&statstype=career&lang=en";
        var apiKey = "apikey=vr7pdzbst4xf28mpfhs66h5q";

        if(action == 'getStats'){
            return primaryUrl + sports[params[0]] + "/" + params[0] + "/athletes/" + params[1]
                + "/dates/2012/" + statsParam + "&" + apiKey;
        }

        if(action == 'loadTeam'){
            return primaryUrl + sports[params[0]] + "/" + params[0] + "/teams?" + apiKey
        }

        if(action == 'getPlayers'){
            return primaryUrl + sports[params[0]] + "/" + params[0] + "/teams/"+ params[1] + "?enable=roster&rosterType=full&" + apiKey
        }

    },
    makeRequest:function(url_request){
        alert('making request to :' + url_request);
        json = "<table><tr><td>blah</td><td>blah</td></tr></table>";
        return json;
    },
    handleResponse:function(response, display_div_id){
        $('#' + display_div_id).html(response);

    }
};

var OhMyMath ={
    useMultipleChoice:function(){
        $('#multipleChoiceAnswers').show();
    },
    useTrueOrFalse:function(){
        $('#multipleChoiceAnswers').hide();},
    setSportsTheme:function(){
        $('#sport_theme').val($('#sport').val());
        ESPN.loadTeams();
    },
    toggle:function(element){
        $('.' + element).toggle();
    }
};

ESPN.loadTeams();